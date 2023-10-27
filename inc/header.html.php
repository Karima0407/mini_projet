<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="titre">
            <ul>
                <li><a href="inscri.php">Inscription</a></li>
                <li><a href="./login.php">Connexion</a></li>
                <?php if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'ROLE_MAMAN') { ?>
                    <li><a href="./list.php">Liste des Conseillères</a></li>
                <?php }
                if (isset($_SESSION['id_user']) && $_SESSION['role'] == 'ROLE_CONSEILLER') { ?>
                    <li><a href="./list_maman.php">Liste des mamans</a></li>
                <?php } ?>
            </ul>


            <h1>The Baby love</h1>
            <div class="invisible"></div>
            <div class="invisible"></div>
        </div>
        <?php
        include_once "./inc/nav.html.php" ;
         ?>
        
    </header>