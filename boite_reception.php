<?php
include_once("./inc/header.html.php");
require_once "./model/messageModel.php";
// session_start();
// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre>";
// die;
$msgconseiller = MessageModel::getReponseConseiller();
?>




<body>
    <div>
        <table class="messages_sujets">
            <tr>
                <th>Date</th>
                <th>Message :</th>
            </tr>
            <?php foreach ($msgconseiller as $conseiller) { ?>
                <tr>
                    <td><?= $conseiller['date']; ?></td>
                    <td><?= $conseiller['contenu']; ?></td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>
<?php
include_once "./inc/footer.html.php";
?>