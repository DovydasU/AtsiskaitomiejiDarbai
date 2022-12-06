<?php
require_once "class/Transportas/Transportas.php";
require_once "class/Transportas/ITransportas.php";
require_once "class/Transportas/TransportoIsvedimas.php";
require_once "class/Transportas/Automobilis.php";
require_once "class/Transportas/Krovininis.php";
require_once "class/Transportas/Keleivinis.php";

// užkraunami duomenys (sukuriami objektai)
require_once "./data.php";

function validacija($text)
{
    return trim(htmlspecialchars($text));
}

if (isset($_POST["klase"])) {
    // print_r($_POST);

    $naujas_transportas = [
        "klase" => validacija($_POST["klase"]),
        "marke" => validacija($_POST["marke"]),
        "modelis" => validacija($_POST["modelis"]),
        "metai" => validacija($_POST["metai"]),
        "spalva" => validacija($_POST["spalva"]),
        "kuras" => validacija($_POST["kuras"]),
        "transmisija" => validacija($_POST["transmisija"]),
        "image" => validacija($_POST["image"]),
        "kaina" => validacija($_POST["kaina"]),
        "vietu_sk" => validacija($_POST["vietu_sk"]),
        "keliamoji" => validacija($_POST["keliamoji"])
    ];

    $ok = false;

    if ($naujas_transportas["klase"] == "automobilis") {
        $ok = $naujas_transportas["marke"] &&
            $naujas_transportas["modelis"] &&
            $naujas_transportas["metai"] &&
            $naujas_transportas["spalva"] &&
            $naujas_transportas["kuras"] &&
            $naujas_transportas["transmisija"] &&
            $naujas_transportas["image"] &&
            $naujas_transportas["kaina"];

    } else if ($naujas_transportas["klase"] == "krovininis") {
        $ok = $naujas_transportas["marke"] &&
            $naujas_transportas["modelis"] &&
            $naujas_transportas["metai"] &&
            $naujas_transportas["spalva"] &&
            $naujas_transportas["kuras"] &&
            $naujas_transportas["transmisija"] &&
            $naujas_transportas["image"] &&
            $naujas_transportas["kaina"] &&
            $naujas_transportas["keliamoji"];

    } else if ($naujas_transportas["klase"] == "keleivinis") {
        $ok = $naujas_transportas["marke"] &&
            $naujas_transportas["modelis"] &&
            $naujas_transportas["metai"] &&
            $naujas_transportas["spalva"] &&
            $naujas_transportas["kuras"] &&
            $naujas_transportas["transmisija"] &&
            $naujas_transportas["image"] &&
            $naujas_transportas["kaina"] &&
            $naujas_transportas["vietu_sk"];
    }
}

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
        <h1>Automobilių nuomo administravimas</h1>
        <div class="row">
            <div class="col-lg-4">
                <h3>Transporto sąrašas</h3>
                <table class="table table-striped">
                    <tbody>
                        <?php
                        foreach ($auto as $id => $value) {
                            echo "<tr><td>" . $value . "</td></tr>";
                        }

                        ?>

                    </tbody>
                </table>

            </div>
            <div class="col-lg-8">
                <h3>Pridėti transporto priemonę</h3>

                <form action="admin.php" method="POST">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="formaKlase" name="klase" aria-label="Transporto piemonės klasė">
                            <option value="automobilis">Automobilis</option>
                            <option value="krovininis">Krovininis</option>
                            <option value="keleivinis">Keleivinis</option>
                        </select>
                        <label for="formaKlase">Transporto piemonės klasė</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="formMarke" name="marke" placeholder="Audi">
                                <label for="formMarke">Markė</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="formModelis" name="modelis" placeholder="A4">
                                <label for="formModelis">Modelis</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="formMetai" name="metai">
                                <label for="formMetai">Metai</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="formSpalva" name="spalva" placeholder="Raudona">
                                <label for="formSpalva">Spalva</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="kaina" id="formKaina">
                                <label for="formKaina">Kaina</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="formKuras" name="kuras" aria-label="Kuro tipas">
                            <option value="benzinas">Benzinas</option>
                            <option value="dyzelinas">Dyzelinas</option>
                            <option value="benzinas/elektra">Benzinas/Elektra</option>
                            <option value="elektra">Elektra</option>
                        </select>
                        <label for="formKuras">Kuro tipas</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="formTransmisija" name="transmisija" aria-label="Pavarų dėžė">
                            <option value="mechaninė">Mechaninė</option>
                            <option value="automatinė">Automatinė</option>
                        </select>
                        <label for="formTransmisija">Pavarų dėžė</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="formImage" name="image" aria-label="Nuotrauka">
                            <?php
                            $katalogas = scandir("./img");
                            foreach ($katalogas as $failas) {
                                if (is_file("img/" . $failas)) {
                                    echo "<option value=\"img/$failas\">$failas</option>";
                                }
                            }
                            ?>
                        </select>
                        <label for="formImage">Nuotrauka</label>
                    </div>
                    <div class="form-floating mb-3" id="holderVientuSk">
                        <input type="number" class="form-control" id="formVietuSk" name="vietu_sk">
                        <label for="formVietuSk">Vietų skaičius</label>
                    </div>
                    <div class="form-floating mb-3" id="holderKeliamoji">
                        <input type="number" class="form-control" id="formKeliamoji" name="keliamoji">
                        <label for="formKeliamoji">Keliamoji galia (t)</label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Pridėti</button>
                    </div>

                </form>

                <script>
                    function tikrintiKlase() {
                        let formaKlase = document.getElementById("formaKlase");
                        let holderVientuSk = document.getElementById("holderVientuSk");
                        let holderKeliamoji = document.getElementById("holderKeliamoji");

                        holderKeliamoji.style.display = "none";
                        holderVientuSk.style.display = "none";

                        if (formaKlase.value == "krovininis") {
                            holderKeliamoji.style.display = "block";

                        } else if (formaKlase.value == "keleivinis") {
                            holderVientuSk.style.display = "block";

                        }

                        formaKlase.onchange = tikrintiKlase;
                    }

                    tikrintiKlase();
                </script>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>