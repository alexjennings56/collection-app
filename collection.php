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
</body>
</html>

<?php

$db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `brand`, `style`, `neckwood` FROM `guitars`;');
$query->execute();
$data = $query->fetchAll();

echo "<ul>";

foreach($data as $list){

    echo "<p>Brand: ".$list["brand"]."</p>";
    echo "<p>Style: ".$list["style"]."</p>";
    echo "<p>Neck Wood: ".$list["neckwood"]."</p>";
}

echo "</ul>";

?>

