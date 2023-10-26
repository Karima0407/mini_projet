<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/model/messageModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/model/sujetModel.php';
if (isset($_GET["conseiller"])) // si l'id de conseillere existe dans l'URL.
{
    $idConseiller = $_GET["conseiller"];
    $idMaman = $_SESSION["id_user"];
    // $communication = MessageModel::communication($idMaman, $idConseiller);
}
$listSujet = Sujet::listSujet();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h3>Bienvenue Chère Maman . Choisis un sujet d'abord</h3>
    <form action="./traitement/traitement.php" method="POST">
        <input type="hidden" name="id_conseillere" value=<?= $idConseiller; ?>>
        <input type="hidden" name="id_maman" value=<?= $idMaman; ?>>
        <!-- <h2> <?= $idMaman ?></h2> -->
        <select name="selectSujet">
            <?php foreach ($listSujet as $sujet) { ?>

                <option value=<?= $sujet['id_sujet']; ?>><?= $sujet['text']; ?></option>


            <?php } ?>
        </select>

        <div><textarea style="margin-top: 30px;" name="messages" id="" cols="30" rows="10" placeholder="Tapez Votre Message"></textarea></div>
        <button name="envoi_message" style="margin-left: 8%;">Envoyer</button>
    </form>


</body>

</html>