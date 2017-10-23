<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

include 'check-nif.php';

/**
 * Handle signature post
 */
function add_signature() {
  global $wpdb;

  $response = array('status' => 'OK', 'errors' => array());

  $type = (isset($_POST['type'])) ? $_POST['type'] : 'individual';
  $name = (isset($_POST['name'])) ? $_POST['name'] : false;
  $nif = (isset($_POST['nif'])) ? $_POST['nif'] : false;
  $email = (isset($_POST['email'])) ? $_POST['email'] : false;
  $is_public = (isset($_POST['is_public'])) ? $_POST['is_public'] : 0;

  $nif = str_replace(" ", "", $nif);
  $nif = str_replace("-", "", $nif);
  $nif = str_replace(".", "", $nif);

  // Type validation
  if(!in_array($type, array('individual', 'organization'))) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'type', 'message' => pll__('Camp Tipus invalid', 'fair-funding'));
  }

  // Name validation
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  if(empty($name)) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'name', 'message' => pll__('Has d\'escriure un nom', 'fair-funding'));
  }

  // NIF validation
  $validNif = isValidIdNumber($nif);
  if(!$validNif) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'nif', 'message' => pll__('El DNI/NIE/CIF introduït no és vàlid.', 'fair-funding'));
  }

  $nifExists = exists('nif', $nif);
  if($nifExists) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'nif', 'message' => pll__('Aquest DNI/NIE/CIF ja ha signat el manifest.', 'fair-funding'));
  }

  // E-mail validation
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if(!$email) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'email', 'message' => pll__('Has d\'escriure un e-mail valid', 'fair-funding'));
  }

  $emailExists = exists('email', $email);
  if($emailExists) {
    $response['status'] = 'error';
    $response['errors'][] = array('input' => 'email', 'message' => pll__('Aquest e-mail ja es troba al llistat de signatures.', 'fair-funding'));
  }

  // is_public can only be 1 or 0
  $is_public = ($is_public == 1) ? 1 : 0;

  // Insert signature
  if(empty($response['errors'])) {
    $query = $wpdb->prepare("INSERT INTO signatures (`type`, `name`, `nif`, `email`, `is_public`, `visible`) VALUES (%s, %s, %s, %s, %d, '1')", $type, $name, $nif, $email, $is_public);
    $wpdb->query($query);
  }

  echo json_encode($response);
}

add_action('admin_post_nopriv_sign', 'App\add_signature');
add_action('admin_post_sign', 'App\add_signature');

function exists($column, $value) {
  global $wpdb;

  $query = $wpdb->prepare("SELECT COUNT($column) FROM signatures WHERE $column = %s", $value);
  $exists = $wpdb->get_var($query);

  return ($exists) ? true : false;
}
