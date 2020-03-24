<?php

$db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `brand`, `style`, `neckwood`, `instrument_url` FROM `guitars`;');
$query->execute();
$data = $query->fetchAll();

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
    <?php foreach ($data as $guitar) { ?>
        <article class="guitar">
            <img alt="<?php echo $guitar["brand"] ?> Guitars" src="<?php echo $guitar["instrument_url"] ?>" />
            <h1>
                Brand: <?php echo $guitar["brand"]; ?><br> Style: <?php echo $guitar["style"]; ?><br> Neck Wood: <?php echo $guitar["neckwood"]; ?>
            </h1>
        </article>
    <?php } ?>
</section>
<!--<section id="collection" class="collectionholder">-->
<!--    <div class="projects">-->
<!--        <div class="guitar1 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/351619-0113010700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar2 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/351635-0113012700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar3 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/347985-0113060700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar4 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/348009-0113062700%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar5 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/344839-0193610776_gtr_frt_001_rr.png?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar6 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/339685-0193612776%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar7 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/350640-0193900748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--        <div class="guitar8 guitars">-->
<!--            <img src="https://andertons-productimages.imgix.net/350605-0193902748%20%281%29.jpg?w=768&h=768&fit=fill&bg=FFFFFF&auto=format&ixlib=imgixjs-3.3.2"/>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
</body>
</html>



