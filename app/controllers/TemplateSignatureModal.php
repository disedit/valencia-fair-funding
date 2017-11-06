<?php

namespace App;

use Sober\Controller\Controller;

class TemplateSignatureModal extends Controller
{
  use Signatures;

  public function signatures()
  {
    $type = (isset($_GET['type'])) ? $_GET['type'] : null;
    $type = (in_array($type, array('individual', 'organization', 'committee'))) ? $type : 'individual';
    $per_page = (isset($_GET['per_page'])) ? min($_GET['per_page'], 1000) : 100;
    $current_page = (isset($_GET['current_page'])) ? intval($_GET['current_page']) : 1;
    $offset = ($per_page * $current_page) - $per_page;

    return Signatures::signatures($type, $offset, $per_page);
  }
}
