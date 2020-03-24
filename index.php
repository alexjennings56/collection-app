<?php

require_once('functions.php');
$db = getGuitarList();
$guitars = getGuitar($db);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="collection.css"/>
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width,initial-scales=1"/>
</head>
<body>
  <header class="topheader">
      <div class="logo">
          <div class="logotext">
              <h1>GUITAR COLLECTION</h1>
          </div>
      </div>
  </header>
  <section id="guitars">
      <?php
      foreach ($guitars as $guitar) { ?>
          <article class="guitar">
              <img alt="<?php echo $guitar["brand"] ?>
            Guitars"
                   src="<?php echo $guitar["instrument_url"] ?>" />
              <h1>
                  Brand: <?php echo $guitar["brand"]; ?><br>
                  Style: <?php echo $guitar["style"]; ?><br>
                  Neck Wood: <?php echo $guitar["neckwood"]; ?>
              </h1>
          </article>
      <?php }
      ?>
  </section>
</body>
</html>


