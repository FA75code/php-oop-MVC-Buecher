<?php
require_once 'include/functions.inc.php';

if (isset($_POST['titel']) && isset($_POST['preis'])) {
    speichere_buch($_POST);
    $message = 'Vielen Dank!';
    header("Location: index.php?message=$message");
}
?>

<body>
  <h1>Neues Buch anlegen</h1>
  <form method="post" action="">
    Titel: <input type="text" name="titel"/>
    Preis: <input type="text" name="preis"/>
    <input type="submit" value="speichern"/>
  </form>
</body>

</html>