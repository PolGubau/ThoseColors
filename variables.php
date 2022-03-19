<?php

$dec_white = 4294967295;
$rand_dec = rand(0, $dec_white - 1294967295);
$hex_rand = dechex($rand_dec);

if (isset($_REQUEST['color'])) {
    session_unset();
}



if (isset($_REQUEST['color'])) {

    $_SESSION['color'] = $_REQUEST['color'];
    $_SESSION['cant'] = $_REQUEST['cant'];
    $cant = $_SESSION['cant'];

    $color_hex = ltrim($_REQUEST['color'], '#'); //Eliminar el #

    $color_dec = hexdec($color_hex);
}
