<?php

require_once "functions.php";

$db = getGuitarDatabase();
addGuitarToDatabase($db, $_POST);
var_dump($_POST);