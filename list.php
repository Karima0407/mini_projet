<?php
require_once "./model/userModel.php";
$listConseiller = User::listConseiller();


?>
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
    <div class="destroy">
        <div class="invisible"></div>

        <h1>Liste de Conseillers:</h1>
        <form action="./traitement/traitement.php" method="POST">
            <button name="deconnexion">Deconnexion</button>
        </form>
    </div>


    <table>
        <thead>
            <tr>

                <th>Nom:</th>
                <th>Numéro de téléphone</th>
                <th>Email</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($listConseiller as $user) { ?>
                <tr>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['phone_number']; ?></td> 
                    <td><?= $user['email']; ?></td>
                    <td><a class="contacte" href="message.php?conseiller=<?= $user['id_user']; ?>">Contactez ce conseiller</a></td>
                <?php } ?>
                </tr>
        </tbody>
    </table>