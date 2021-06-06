<?php

namespace App;

use Sober\Controller\Controller;

class TemplateManifesto extends Controller
{
  use Signatures;

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

  public function signaturesSponsors()
  {
    return Signatures::signatures('sponsor', 0, 20);
  }

  public function signaturesCommittees()
  {
    return Signatures::signatures('committee', 0, 20);
  }

  public function signaturesOrganizations()
  {
    return Signatures::signatures('organization', 0, 20);
  }

  public function signaturesPeople()
  {
    return Signatures::signatures('individual', 0, 60);
  }
}
