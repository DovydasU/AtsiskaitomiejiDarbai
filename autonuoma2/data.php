<?php

require_once("database.php");

use Transportas\Automobilis;
use Transportas\Keleivinis;
use Transportas\Krovininis;

try {
    $sql = "SELECT * FROM automobilis";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $obj) {
        if ($obj["klase"] == "automobilis") {
            $auto[$obj["id"]] = new Automobilis($obj);
        } elseif ($obj["klase"] == "krovininis") {
            $auto[$obj["id"]] = new Krovininis($obj);
        } elseif ($obj["klase"] == "keleivinis") {
            $auto[$obj["id"]] = new Keleivinis($obj);
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}