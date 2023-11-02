<?php
include_once "./inc/header.html.php";
require_once "./model/userModel.php";
$listConseiller = User::listConseiller();


?>


<body>
    <div class="destroy">
        <div class="invisible"></div>

        <h1>Liste de Conseillers:</h1>
        <form action="./traitement/traitement.php" method="post">
            <button class="deconexion" name="deconnexion">Deconnexion</button>

        </form>

    </div>
    <div class="recep">
        <div class="invisible"></div>
        <div class="invisible"></div>
        <div class="invisible"></div>
        <a class="boite_reception" href="">Boite de récéption</a>
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
                    <td><a class="contacte" href="message.php?id_conseiller=<?= $user['id_user']; ?>">Contactez ce conseiller</a></td>
                <?php } ?>
                </tr>
        </tbody>
    </table>
</body>