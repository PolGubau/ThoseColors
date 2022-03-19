<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThoseColors</title>    <link rel="shortcut icon" href="../../style/logotip_logo2.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="body">

        <?php
        session_start();



        if (isset($_REQUEST['color'])) {

            require 'variables.php';
            require 'form.php';
            require 'functions.php';
        ?>
            <div class="type_palette">
                <p class="palette_type_title">Good Contrast Palette.</p>


                <?php print_palette(40, $cant, $color_hex); ?>
            </div>
            <div class="type_palette">

                <p class="palette_type">Mosaic Palette.</p>

                <?php print_palette(20, $cant, $color_hex); ?>
            </div>
            <div class="type_palette">
                <p class="palette_type">High Contrast Palette.</p>

                <?php print_palette(90, $cant, $color_hex); ?>
            </div>
            <div class="type_palette">
                <p class="palette_type">Black & white rivality.</p>
                <?php
                    echo '<div class="cont">';
        echo '<div class="color" style="background-color:white;width:'. 100/3 .'%"><p>white</p></div>';
        echo '<div class="color" style="background-color:#' . $color_hex . ';width:'. 100/3 .'%"><p>#' . $color_hex . '</p></div>';
        echo '<div class="color" style="background-color:black;width:'. 100/3 .'%"><p>black</p></div>';
           echo' </div>';
           echo '<div class="degradado" style="background: linear-gradient(to right,white,#'.$color_hex.',black); width:100%;"></div>';

        
        } else {
            require 'form.php';
        }
        ?>

    </div>
</body>

</html>