<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="./traitement/traitement.php" method="post">

        <select name="genre" id="">
            <option value="maman">Maman</option>
            <option value="conseillere">Conseillère</option>
        </select>
        <div>
            <label for="">Nom Complet:</label>
            <input type="text" name="name" id="">
        </div>

        <div>
            <label for="">Numéro de téléphone</label>
            <input type="number" name="num_tel" id="">
        </div>

        <div>
            <label for="">Email:</label>
            <input type="email" name="email" id="">
        </div>

        <div>
            <label for="">Password:</label>
            <input type="password" name="password" id="">
        </div>


        <button name="inscription">S'incrire</button>
    </form>
</body>

</html>