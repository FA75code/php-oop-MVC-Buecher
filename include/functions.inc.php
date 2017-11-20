<?php
require_once 'models/Buch.php';

function speichere_buch($daten)
{
    $buecher = unserialize(file_get_contents('data/buecher.txt'));
    $buecher[] = new Buch($daten);
    file_put_contents('data/buecher.txt', serialize($buecher));
    
}
?>