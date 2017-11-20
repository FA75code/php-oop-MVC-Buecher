<?php

require_once 'models/buch.php';
require_once 'include/emulator.inc.php';

$buecher = hole_buecher();

require_once 'views/zeige_buecher.tpl.php';

?>