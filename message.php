<?php
// if (isset($_GET["conseiller"])){
// session_start();
// require_once $_SERVER['DOCUMENT_ROOT'] . '/model/messageModel.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/model/sujetModel.php';
include_once("./inc/header.html.php");
require_once "./model/messageModel.php";
require_once "./model/sujetModel.php";
if (isset($_GET["id_conseiller"])) // si l'id de conseillere existe dans l'URL.
{
    $idConseiller = $_GET["id_conseiller"];
    $idMaman = $_SESSION["id_user"];
    // $communication = MessageModel::communication($idMaman, $idConseiller);
}

$listSujet = Sujet::listSujet();



?>


<body>
    <div class="container">
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

            <div><textarea style="margin-top: 30px;" name="messages" id="" cols="50" rows="20" placeholder="Tapez Votre Message"></textarea></div>
            <button name="envoi_message" style="margin-left: 25%;">Envoyer</button>
        </form>
    </div>


</body>

</html>

<?php
include_once "./inc/footer.html.php";
?>