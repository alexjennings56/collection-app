<?php

$db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `brand`, `style`, `neckwood` FROM `guitars`;');
$query->execute();
$data = $query->fetchAll();

echo "<ul>";

foreach($data as $list){

    echo "<br>Brand:".$list["brand"]."</br>";
    echo "<br>Style:".$list["style"]."</br>";
    echo "<br>Neck Wood:".$list["neckwood"]."</br>";
}

echo "</ul>";