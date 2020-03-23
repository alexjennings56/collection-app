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
<section id="portfolio" class="projectholder">
    <div class="projects">
        <div class="project1 pject">
            <img src="https://andertons-productimages.imgix.net/351619-0113010700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project2 pject">
            <img src="https://andertons-productimages.imgix.net/351635-0113012700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project3 pject">
            <img src="https://andertons-productimages.imgix.net/347985-0113060700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project4 pject">
            <img src="https://andertons-productimages.imgix.net/348009-0113062700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project5 pject">
            <img src="https://andertons-productimages.imgix.net/344839-0193610776_gtr_frt_001_rr.png?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project6 pject">
            <img src="https://andertons-productimages.imgix.net/339685-0193612776%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project7 pject">
            <img src="https://andertons-productimages.imgix.net/350640-0193900748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
        <div class="project8 pject">
            <img src="https://andertons-productimages.imgix.net/350605-0193902748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>
        </div>
    </div class="headingbox">
</section>
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

