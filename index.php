<?php

require_once('functions.php');
$db = getGuitarDatabase();
$guitars = getGuitarList($db);
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
              <a href="http://localhost:1234/collection-app/addguitars.php">--Add Guitar To Collection--</a>
          </div>
      </div>
  </header>
      <div class="success">
  <?php
  if (!empty($_GET["success"])){
      echo "guitar added successfully!";
  }
  ?>
      </div>
  <section id="guitars">
      <?php
         echo displayGuitars($guitars);
      ?>
  </section>
</body>
</html>