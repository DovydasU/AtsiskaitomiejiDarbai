<?php

use Transportas\Automobilis;
use Transportas\Keleivinis;
use Transportas\Krovininis;

/*
$auto[1] = new Automobilis(
    1,
    "VW",
    "Passat",
    2015,
    "mėlyna",
    "benzinas",
    "mechaninė",
    "img/vw_passat.jpg",
    7
);

$auto[2] = new Automobilis(
    2,
    "VW",
    "Golf",
    2020,
    "geltona",
    "dyzelinas",
    "mechaninė",
    "img/vw_golf.jpg",
    12
);

$auto[3] = new Automobilis(
    3,
    "Mercedes",
    "S550",
    2018,
    "balta",
    "benzinas",
    "automatinė",
    "img/mercedes_s550.jpg",
    50
);

$auto[4] = new Automobilis(
    4,
    "Volvo",
    "XC60",
    2021,
    "juoda",
    "benzinas/elektra",
    "automatinė",
    "img/volvo_xc60.jpg",
    20
);

$auto[5] = new Automobilis(
    5,
    "Volvo",
    "XC90",
    2021,
    "balta",
    "dyzelinas",
    "mechaninė",
    "img/volvo_xc90.jpg",
    30
);


$auto[6] = new Krovininis(
    6,
    "Mercedes",
    "Sprinter",
    2018,
    "balta",
    "dyzelinas",
    "mechaninė",
    "img/mercedes_sprinter.jpg",
    20,
    "2 tonos"
);
*/

$json = file_get_contents("transportas.json");
$json = json_decode($json, true);

foreach ($json as $obj) {
    if ($obj["klase"] == "automobilis") {
        $auto[$obj["id"]] = new Automobilis($obj);
    } elseif ($obj["klase"] == "krovininis") {
        $auto[$obj["id"]] = new Krovininis($obj);
    } elseif ($obj["klase"] == "keleivinis") {
        $auto[$obj["id"]] = new Keleivinis($obj);
    }
}
