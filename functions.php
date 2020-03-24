<?php

function getGuitarList()
{
    $db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

function getGuitar(PDO $db): array {
    $query = $db->prepare("SELECT `brand`, `style`, `neckwood`, `instrument_url` FROM `guitars`");
    $query->execute();

    return $query->fetchAll();
}
