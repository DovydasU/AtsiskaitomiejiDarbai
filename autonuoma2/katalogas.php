<?php
echo '<div class="row">';
foreach ($auto as $a) {
    echo '<div class="col-sm-6 col-md-4 col-lg-3 mb-3">';
    $a->isvedimasKatalogui();
    echo '</div>';
}
echo '</div>';

echo '<div class="row">';
echo '<ul>';
foreach ($auto as $a) {
    echo '<li>';
    echo $a;
    echo '</li>';
}
echo '</ul>';
echo '</div>';
?>