<?php

require_once 'models/Buch.php';
require_once 'include/emulator.inc.php';

require_once 'views/_menu.tpl.php';

if (isset($_GET['message'])) {
  echo $_GET['message'];
}
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$view = $action;

switch($action) {
  case 'zeige_buecher':
    $buecher = hole_buecher();
    break;
  case 'speichere_buch':
    // $daten = lese_buch();
    // speichere_buch($daten);
    // $buecher = hole_buecher();
    $view = 'speichere_buch';
    break;
  case 'zeige_buch':
    if ($_GET['id']) {
      $buch = hole_buch($_GET['id']);
    } else {
      $buch = hole_buch(0);
    }
    break;
  default:
    $buecher = hole_buecher();
    $view = 'zeige_buecher';
    break;
}

require_once 'views/' . $view . '.tpl.php';

?>