<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <form action="./traitement/traitement.php" method="post">
            <div>
                <label for="">Nom Complet:</label>
                <div><input type="text" name="name" id=""></div>
            </div>

            <div>
                <label for="">Numéro de téléphone</label>
                <div><input type="number" name="num_tel" id=""></div>
            </div>

            <div>
                <label for="">Email:</label>
                <div><input type="email" name="email" id=""></div>
            </div>

            <div>
                <label for="">Password:</label>
                <div> <input type="password" name="password" id=""></div>
            </div>


            <button name="inscription">S'incrire</button>
        </form>
    </div>

</body>

</html>