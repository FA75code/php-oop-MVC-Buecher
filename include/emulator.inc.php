<?php

// Emuliert ein "SELECT * FROM buecher"

function hole_buecher()
{
  $buecher = array();
  $buecher[] = new Buch(
    array(
      'titel' => 'Der Graf von Monte Christo',
      'preis' => 9.95
    )
  );
  $buecher[] = new Buch(
    array(
      'titel' => 'Per Anhalter durch die Galaxis',
      'preis' => 7.95
    )
  );
  return $buecher;
}

// Emuliert ein "SELECT * FROM buecher WHERE id=:id"

function hole_buch($id)
{
  $buecher = hole_buecher();
#$id=1;
  $buch = null;
  if (isset($buecher[$id])) {
    $buch = $buecher[$id];
  }
  return $buch;
}

?>