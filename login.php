<?php session_start(); ?>
<?php
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
                <label for="">Password:</label>
                <div> <input type="password" name="password" id=""></div>
                <?php if (isset($_SESSION["error_message"])) { ?>
                    <p> <?= $_SESSION["error_message"] ?></p>
                <?php unset($_SESSION["error_message"]);
                } ?>
            </div>


            <button name="login">Se Connecter</button>
        </form>
    </div>

</body>

</html>