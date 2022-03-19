<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Those Colors</title>
</head>

<body>
    <?php
    include 'variables.php';
    ?>
    <a class="nuevo" href="./index.php?Nuevo=true">Nuevo Color</a>
    <div class="content">
        <h1 class="title">Those Colors</h1>

        <form action="./index.php" method="post">
            <div class="inputs">
                <?php
                if (isset($_SESSION['color'])) {
                    echo '<input class="input_color input" type="color" value="'.$_SESSION['color'].'" name="color" required>';
                } else {
                    echo '<input class="input_color input" type="color" value="#4f51aa" name="color" required>';
                }

                if (isset($_SESSION['cant'])) {
                    echo '  <input class="input_number input" type="number" name="cant" value="' . $_SESSION['cant'] . '" required min="1" max="20">';
                } else {
                    echo '<input class="input_number input" type="number" name="cant" value="3" required min="1" max="20">
';
                }


                ?>
                <input class="input_submit input" type="submit" value="Create!">
            </div>
        </form>
    </div>
</body>

</html>