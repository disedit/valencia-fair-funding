<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    if (remove_action('wp_head', 'wp_enqueue_scripts', 1)) {
        wp_enqueue_scripts();
    }

    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                        "{$template}.blade.php",
                        "{$template}.php",
                    ];
                });
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

/**
 * Return a WP menu without <ul>s
 * @return string
 */
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary_navigation',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);
}

function default_page_menu() {
   wp_list_pages('title_li=');
}

function titleCase($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("i", "dels", "de", "da", "dos", "das", "do", "I", "II", "III", "IV", "V", "VI")){
       /*
        * Exceptions in lower case are words you don't want converted
        * Exceptions all in upper case are any words you don't want converted to title case
        *   but should be converted to upper case, e.g.:
        *   king henry viii or king henry Viii should be King Henry VIII
        */
       $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
       foreach ($delimiters as $dlnr => $delimiter) {
           $words = explode($delimiter, $string);
           $newwords = array();
           foreach ($words as $wordnr => $word) {
               if (in_array(mb_strtoupper($word, "UTF-8"), $exceptions)) {
                   // check exceptions list for any words that should be in upper case
                   $word = mb_strtoupper($word, "UTF-8");
               } elseif (in_array(mb_strtolower($word, "UTF-8"), $exceptions)) {
                   // check exceptions list for any words that should be in upper case
                   $word = mb_strtolower($word, "UTF-8");
               } elseif (!in_array($word, $exceptions)) {
                   // convert to uppercase (non-utf8 only)
                   $word = ucfirst($word);
               }
               array_push($newwords, $word);
           }
           $string = join($delimiter, $newwords);
      }//foreach
      return $string;
   }
