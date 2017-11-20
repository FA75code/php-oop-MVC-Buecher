<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Buecherliste</title>
</head>

<body>
  <?php foreach ($buecher as $buch) { ?>
    <h2 class="titel"><?php echo $buch->getTitel(); ?></h2>
    <p class="preis"><?php echo $buch->getPreis(); ?></p>
  <?php } ?>
</body>

</html>