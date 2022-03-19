<?php


function print_palette($sep, $cant, $color_hex)
{
    echo '<div class="cont">';
    for ($i = 0; $i < $cant; $i++) {
        $color_dec = hexdec($color_hex);
        $color_d = $color_dec + $i * $sep;

        $color_h = dechex($color_d);

        if (strlen($color_h) != 6) {
            $cantidadletras = strlen($color_h);
            for ($i = $cantidadletras; $i != 6; $i++) {
                if ($cantidadletras < 6) {
                    $color_h = '0' . $color_h;
                }
                if ($cantidadletras > 6) {
                    $color_h = substr_replace($color_h, "", -1);
                    if (strlen($color_h) == 6) {
                        break;
                    }
                }
            }
        }
        echo '<div class="color" style="background-color:#' . $color_h . ';width:' . 100 / $cant . '%"><p>#' . $color_h . '</p></div>';
        $colors[]= '#'.$color_h;
    }
   
    $colors=implode(',',$colors);
    
    echo '<div class="degradado" style="background: linear-gradient(to right,'.$colors.'); width:100%;"></div>';

    echo '</div>';
}
?>