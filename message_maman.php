<?php
include_once("./inc/header.html.php");
require_once "./model/messageModel.php";
$maman = $_GET["maman"];
$msgmaman = MessageModel::message_maman($maman);
?>




<body>
    <div>
        <table class="messages_sujets">
            <tr>
                <th>Sujet</th>
                <th>Date</th>
                <th>Message :</th>
            </tr>
            <?php foreach ($msgmaman as $maman) { ?>
                <tr>
                    <td><?= $maman['text']; ?></td>
                    <td><?= $maman['date']; ?></td>
                    <td><?= $maman['contenu']; ?></td>
                    <td><a class="contacte" href="reponse_maman.php?id_maman=<?= $maman['id_parent']; ?> &id_sujet=<?= $maman['id_sujet']; ?>">Répondre</a></td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>
<?php
include_once "./inc/footer.html.php";
?>