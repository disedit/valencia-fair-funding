<?php

namespace App;

trait Signatures
{
  public function signaturesCount()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures");

    return $wpdb->num_rows;
  }

  public function signaturesCountOrganizations()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures WHERE type = 'organization'");

    return $wpdb->num_rows;
  }

  public function signaturesCountPeople()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures WHERE type = 'individual'");

    return $wpdb->num_rows;
  }

  public static function signatures($type, $offset, $limit)
  {
    global $wpdb;
    $query = $wpdb->prepare("SELECT name FROM signatures WHERE type = '%s' AND visible = 1 AND is_public = 1 ORDER BY id DESC LIMIT %d, %d", $type, $offset, $limit);
    $signatures = $wpdb->get_results($query);

    return $signatures;
  }
}
