<?php

require_once 'models/Buch.php';
require_once 'include/emulator.inc.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$view = $action;

switch($action) {
  case 'zeige_buecher':
    $buecher = hole_buecher();
    $header = 'Bücherliste';
    break;
  case 'speichere_buch':
    // $daten = lese_buch();
    // speichere_buch($daten);
    // $buecher = hole_buecher();
    $view = 'speichere_buch';
    $header = 'Neues Buch';
    break;
  case 'editiere_buch':
    $view = 'editiere_buch';
    $header = 'Editiere Buch';
    break;
  case 'zeige_buch':
    if ($_GET['id']) {
      $buch = hole_buch($_GET['id']);
    } else {
      $buch = hole_buch(0);
    }
    $header = 'Ein klasse Buch';
    break;
  default:
    $buecher = hole_buecher();
    $view = 'zeige_buecher';
    $header = 'Bücherliste';
    break;
}
require_once 'views/_header.tpl.php';
require_once 'views/_menu.tpl.php';

if (isset($_GET['message'])) {
  require 'views/_linien.tpl.php';
  echo $_GET['message'];
  require 'views/_linien.tpl.php';
}



require_once 'views/' . $view . '.tpl.php';

require_once 'views/_footer.tpl.php';

?>