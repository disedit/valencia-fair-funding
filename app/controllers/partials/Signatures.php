<?php

namespace App;

trait Signatures
{
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
