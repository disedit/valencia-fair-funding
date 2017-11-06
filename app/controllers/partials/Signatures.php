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

  public function signaturesCountCommittees()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures WHERE type = 'committee'");

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

  public static function signatures($type = 'individual', $offset = 0, $limit = 20, $rand = false)
  {
    global $wpdb;
    $order = ($rand) ? 'rand()' : 'id DESC';
    $query = $wpdb->prepare("SELECT name FROM signatures WHERE type = %s AND visible = 1 AND is_public = 1 ORDER BY $order LIMIT %d, %d", $type, $offset, $limit);
    $signatures = $wpdb->get_results($query);

    if($type == 'individual') {
      $i = 0;
      foreach($signatures as $signatura) {
        $signatures[$i]->name = titleCase($signatura->name);
        $i++;
      }
    }

    return $signatures;
  }
}
