<?php

require_once 'models/Buch.php';
require_once 'include/emulator.inc.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$view = $action;

switch($action) {
  case 'zeige_buecher':
    $buecher = hole_buecher();
    break;
  case 'zeige_buch':
    $buch = hole_buch(0);
    break;
  default:
    $buecher = hole_buecher();
    $view = 'zeige_buecher';
    break;
}

require_once 'views/' . $view . '.tpl.php';

?>