<?php
require_once 'models/Buch.php';

function speichere_buch($daten)
{
    $buecher = unserialize(file_get_contents('data/buecher.txt'));
    $buecher[] = new Buch($daten);
    file_put_contents('data/buecher.txt', serialize($buecher));    
}

function editiere_buch($id, $daten)
{
    $buecher = unserialize(file_get_contents('data/buecher.txt'));
    $buecher[$id]->setTitel($daten['titel']);
    $buecher[$id]->setPreis($daten['preis']);
    file_put_contents('data/buecher.txt', serialize($buecher));
}

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>