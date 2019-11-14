<?php
$plantillaMesa = file_get_contents("templates/mesa.html");
$plantillaSilla = file_get_contents("templates/silla.html");

$sillas = sprintf($plantillaSilla, 1, "silla reservada", "title=\"Esta silla ya la tiene Doña Mary!\"");
$sillas .= sprintf($plantillaSilla, 2, "", "");
$sillas = sprintf($plantillaSilla, 3, "silla reservada", "title=\"Esta silla ya la tiene Don Mario!\"");

$mesa = sprintf($plantillaMesa, 1, $sillas);
?>