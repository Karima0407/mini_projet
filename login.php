<?php

session_start();
include_once "./inc/header.html.php";

?>



<body>
    <div class="container">
        <form action="./traitement/traitement.php" method="post">


            <div>
                <label for="">Email:</label>
                <div><input type="email" name="email" id=""></div>
            </div>

            <div>
                <label for="">Mot de passe:</label>
                <div> <input type="password" name="password" id=""></div>
                <?php if (isset($_SESSION["error_message"])) { ?>
                    <p><?= $_SESSION["error_message"] ?></p>

                <?php } else if (isset($_SESSION['success_message'])) { ?>
                    <p><?= $_SESSION['success_message'] ?></p>
                <?php } ?>
            </div>


            <button name="login">Se Connecter</button>
        </form>
    </div>

</body>

</html>
<?php
include_once "./inc/footer.html.php";
?>