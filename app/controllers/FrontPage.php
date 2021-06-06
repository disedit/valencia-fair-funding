<?php

namespace App;

use Sober\Controller\Controller;

class Home extends Controller
{
  public function signaturesCount()
  {
    global $wpdb;
    $wpdb->get_results("SELECT id FROM signatures");

    return $wpdb->num_rows;
  }
}
