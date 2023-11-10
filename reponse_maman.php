<?php
include_once("./inc/header.html.php");
session_start();
$id_conseillere = $_SESSION["id_user"];
$id_maman = $_GET['id_maman'];
$id_sujet = $_GET['id_sujet'];


?>


<body>
    <div class="container">
        <form action="./traitement/traitement.php" method="post">
            <input type="hidden" name="maman" value="<?= $id_maman ?>">
            <input type="hidden" name="conseillere" value="<?= $id_conseillere ?>">
            <input type="hidden" name="sujet" value="<?= $id_sujet ?>">
            <textarea style="margin-top: 30px ;" name="answer" id="" cols="80" rows="35"></textarea>
            <button class="btn_answer" name="envoi_reponse">Envoyer la réponse</button>
        </form>
        <?php if (isset($_SESSION["reponse_success"])) { ?>
            <p style="background-color: lightblue; padding: 0 10px; width:200px; text-align:center;"><?= $_SESSION["reponse_success"]; ?></p>
        <?php } unset($_SESSION['reponse_success']); ?>
    </div>
</body>

</html>
<?php
include_once "./inc/footer.html.php";
?>