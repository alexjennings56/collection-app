<?php

function getGuitarDatabase(): PDO
{
    $db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

function getGuitarList(PDO $db): array
{
    $query = $db->prepare("SELECT `brand`, `style`, `neckwood`, `instrument_url` FROM `guitars`");
    $query->execute();

    return $query->fetchAll();
}

function getGuitarBrandAndStyle(array $guitars): string {
    if (!empty($guitars["brand"]) && !empty($guitars["style"])) {
        return $guitars["brand"] . " | " . $guitars["style"];
    }

    return "";
}

function displayGuitars($guitars) {
    $return = '';
    foreach ($guitars as $guitar) {
        $return .= '<article class="guitar">';
        $return .= '<img alt="' . getGuitarBrandAndStyle($guitar) . '
            guitars"
                 src="' . $guitar["instrument_url"]  . '" />
            <h1>
                Brand: ' . $guitar["brand"] . '
                | Style: ' . $guitar["style"] . '
                | Neck Wood: ' . $guitar["neckwood"] . '
            </h1>
        </article>';
    }
    return $return;
}