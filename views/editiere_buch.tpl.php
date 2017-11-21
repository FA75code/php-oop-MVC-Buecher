<?php
require_once 'include/functions.inc.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

if (isset($_POST['titel']) && isset($_POST['preis'])) {
    editiere_buch($id, $_POST);
    $message = 'Buch wurde erfolgreich editiert.';
    redirect("index.php?message=$message");
}
  $buecher = unserialize(file_get_contents('data/buecher.txt'));
?>

<body>
  <form method="post" action="">
    Titel: <input type="text" name="titel" value="<?php echo $buecher[$id]->getTitel(); ?>"/>
    Preis: <input type="text" name="preis" value="<?php echo $buecher[$id]->getPreis(); ?>"/>
    <input type="submit" value="editieren"/>
  </form>