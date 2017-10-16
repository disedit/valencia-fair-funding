<?php

namespace App;

trait Signatures
{
  public function signaturesCountFormatted()
  {
    $count = $this->signaturesCount();
    $numbers = str_split($count);
    $string = '';

    foreach($numbers as $number) $string .= '<span>' . $number . '</span> ';

    return $string;
  }

  private function signaturesCount()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures");

    return $wpdb->num_rows;
  }

  public static function signatures()
  {
    global $wpdb;
    $signatures = $wpdb->get_results("SELECT * FROM signatures WHERE type = 'individual' AND visible = 1 ORDER BY id DESC");

    return $signatures;
  }

  public static function supportingOrganizations()
  {
    global $wpdb;
    $supportingOrganizations = $wpdb->get_results("SELECT * FROM signatures WHERE type = 'organization' AND visible = 1 ORDER BY id DESC");

    return $supportingOrganizations;
  }
}
