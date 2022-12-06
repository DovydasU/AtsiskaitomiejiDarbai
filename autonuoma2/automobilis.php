<?php
$auto_get_id = (int)$_GET["auto"];


if (isset($auto[$auto_get_id])) {
    echo '<div class="row mt-5">';
    echo '<div class="col-md-6">';
    $auto[$auto_get_id]->isvedimasPilnas();
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<h4>Užsakymo forma</h4>';
    echo '</div>';
    echo '</div>';
} else {
    echo "<h3 class=\"display-3 text-center mt-5\">Automobilis neegzistuoja</h3>";
}
