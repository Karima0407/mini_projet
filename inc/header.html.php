<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="titre">
            <ul>
                <li><a href="inscri.php">Inscription</a></li>
                <li><a href="./login.php">Connexion</a></li>
                <div class="invisible"></div>
                <?php /* if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'ROLE_MAMAN') { ?>
                <li><a href="./list.php">Liste des Conseillères</a></li>
            <?php }
                    if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'ROLE_CONSEILLER') { ?>
                <li><a href="./list_maman.php">Liste des mamans</a></li>
            <?php } */
                ?>
            </ul>


            <a class="titre2" href="index.php">The Baby love </a>
            <div class="invisible"></div>
            <div class="invisible"></div>
        </div>
        <?php
        include_once "./inc/nav.html.php";
        ?>

    </header>