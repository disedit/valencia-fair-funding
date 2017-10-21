<?php

namespace App;

use Sober\Controller\Controller;

class TemplateSignatures extends Controller
{
  use Signatures;

  public function json()
  {
    $type = ($_GET['type'] == 'individual') ? 'individual' : 'organization';
    $per_page = min($_GET['per_page'], 100);
    $current_page = intval($_GET['current_page']);
    $offset = ($per_page * $current_page) - $per_page;

    return Signatures::signatures($type, $offset, $per_page);
  }
}
