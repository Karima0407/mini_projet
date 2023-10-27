<?php
include_once ("./inc/header.html.php");
require_once "./model/userModel.php";
$list = User::list();

?>


<body>
    <div class="destroy">
        <div class="invisible"></div>

        <h1>Liste des Mamans:</h1>
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
            <?php foreach ($list as $user) { ?>
                <tr>
                    <?php if ($user["role"] == "ROLE_MAMAN") { ?>

                        <td><?= $user['name']; ?></td>
                        <td><?= $user['phone_number']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><a class="contacte" href="message_maman.php?maman=<?= $user['id_user']; ?>">Voir le message</a></td>
                        <!-- <td><a class="contacte" href="message.php?conseiller=<?= $user['id_user']; ?>">Contactez ce conseiller</a></td> -->
                    <?php } else if (($user["role"] == "maman")) { ?>
                        <?php echo "Désolé cette page est seulement pour les conseillères" ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>