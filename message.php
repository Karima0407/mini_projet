<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/model/messageModel.php';
if (isset($_GET["conseiller"])) {
    $idConseiller = $_GET["conseiller"];
    $idMaman = $_SESSION["id_user"];
    MessageModel::communication($idMaman, $idConseiller);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <textarea name="" id="" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
</body>

</html>