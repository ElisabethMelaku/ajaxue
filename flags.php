<?php

require "./vendor/autoload.php";
use HTL3R\Flags\Flags as Flag;

$flage1 = new Flag\TriangleFlag(
    "Irl",
    20,
    10,
    29,
    "red"
);

$flage2 = new Flag\TriangleFlag(
    "AUT",
    20,
    10,
    29,
    "blue"
);

$flage3 = new Flag\TriangleFlag(
    "FR",
    20,
    10,
    29,
    "green"
);
//
//echo $flage1;
//echo $flage2;
//echo $flage3;

$a = array(
    Objektumwandeln($flage1),
    Objektumwandeln($flage2),
    Objektumwandeln($flage3)
);

function Objektumwandeln($flag ){
    $obj = [];
    $obj["name"] = $flag->getName();
    $obj["preis"] = $flag->getPrice();
    $obj["breite"] = $flag->getWidth();
    $obj["hoehe"] = $flag->getHeight();
    $obj["farbe"] = $flag->getColor();

    return $obj;
}

if (isset($_GET["type"]) && $_GET["type"]=="json"){
    header('Content-Type: application/json');
    echo json_encode($a);
}else{
//    typo3fluid kommt hier her
}



