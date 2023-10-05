<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="./traitement/traitement.php" method="post">


            <div>
                <label for="">Email:</label>
                <div><input type="email" name="email" id=""></div>
            </div>

            <div>
                <label for="">Password:</label>
                <div> <input type="password" name="password" id=""></div>
                <?php if (isset($_SESSION["error_message"])) { ?>
                    <p> <?= $_SESSION["error_message"] ?></p>
                <?php unset($_SESSION["error_message"]);
                } ?>
            </div>


            <button name="login">S'incrire</button>
        </form>
    </div>

</body>

</html>