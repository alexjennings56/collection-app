<?php

$db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `brand`, `style`, `neckwood` FROM `guitars`;');
$query->execute();
$data = $query->fetchAll();

var_dump($data);