<?php
session_start();
$id_conseillere = $_SESSION["id_user"];
$id_maman = $_GET['id_maman'];
$id_sujet = $_GET['id_sujet'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="./traitement/traitement.php" method="post">
        <input type="hidden" name="maman" value="<?= $id_maman ?>">
        <input type="hidden" name="conseillere" value="<?= $id_conseillere ?>">
        <input type="hidden" name="sujet" value="<?= $id_sujet ?>">
        <textarea name="answer" id="" cols="30" rows="10"></textarea>
        <button class="btn_answer" name="envoi_reponse">Envoyer la réponse</button>
    </form>
</body>

</html>