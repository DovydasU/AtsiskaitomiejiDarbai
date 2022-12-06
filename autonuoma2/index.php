<?php
require_once "class/Transportas/Transportas.php";
require_once "class/Transportas/ITransportas.php";
require_once "class/Transportas/TransportoIsvedimas.php";
require_once "class/Transportas/Automobilis.php";
require_once "class/Transportas/Krovininis.php";
require_once "class/Transportas/Keleivinis.php";

// užkraunami duomenys (sukuriami objektai)
require_once "./data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autonuoma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Automobilių nuoma</h1>
        <?php
        if (isset($_GET["auto"])) {
            // pasirinkto automobilio išvedimas
            require "./automobilis.php";
        } else {
            // automobilių sąrašas
            require "./katalogas.php";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>