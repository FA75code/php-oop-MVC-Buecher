  <?php foreach ($buecher as $id=>$buch) { ?>
    <h2 class="titel"><?php echo $buch->getTitel(); ?></h2>
    <p class="preis"><?php echo $buch->getPreis(); ?> <a href="index.php?action=editiere_buch&id=<?php echo $id ?>">editieren</a></p>
  <?php } ?>