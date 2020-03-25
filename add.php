<?php

require_once "functions.php";

if (empty($_POST["brand"])){
    $error=0;
}

if (empty($_POST["style"])){
    $error=1;
}

if (empty($_POST["instrument_url"])){
    $error=2;
}

if (empty($_POST["year"])){
    $error=3;
}

if ($_POST["year"]>2020){
    $error=4;
}

if ($_POST["year"]<0){
    $error=5;
}

if (isset($error)){
    header("Location: addguitars.php?error=". $error);
    die();
}
else{
    $db = getGuitarDatabase();
    addGuitarToDatabase($db, $_POST);

    header("Location: index.php?success=1");
    die();
}