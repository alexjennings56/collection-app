<?php

function getGuitarDatabase(): PDO
{
    $db = new PDO('mysql:host=DB;dbname=collectiondb', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

function getGuitarList(PDO $db): array
{
    $query = $db->prepare("SELECT `brand`, `style`, `year`, `instrument_url` FROM `guitars`");
    $query->execute();

    return $query->fetchAll();
}

function getGuitarBrandAndStyle(array $guitars): string {
    if (!empty($guitars["brand"]) && !empty($guitars["style"])) {
        return $guitars["brand"] . " | " . $guitars["style"];
    }

    return "";
}

function displayGuitars($guitars): string{
    $return = '';
    foreach ($guitars as $guitar) {
        $return .= '<article class="guitar">';
        $return .= '<img alt="' . getGuitarBrandAndStyle($guitar) . '
            guitars"
                 src="' . $guitar["instrument_url"]  . '" />
            <h1>
                Brand: ' . $guitar["brand"] . '
                | Style: ' . $guitar["style"] . '
                | Year: ' . $guitar["year"] . '
            </h1>
        </article>';
    }
    return $return;
}

function addGuitarToDatabase(PDO $db, array $guitars): void {
    $query = $db->prepare("INSERT INTO `guitars` (`brand`, `style`, `year`, `instrument_url`) VALUES (?, ?, ?, ?)");
    $query->execute([
        $guitars["brand"],
        $guitars["style"],
        $guitars["year"],
        $guitars["instrument_url"]
    ]);
}

function getErrorMessage($code): string{
    $errors=[
        "You must supply a brand",
        "You must supply a style",
        "You must supply a valid andertons image address",
        "You must supply a valid year",
        "You must supply a valid year",
        "You must supply a valid year"];
    return $errors[$code];
}