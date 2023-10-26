<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="ajouter">Ajoutez votre Sujet:</h1>
    <form action="./traitement/traitement.php" method="POST" class="add">
        <input type="text" name="sujet" class="subject">
        <div><label for="">Ajoutez une date:</label></div>
        <div><input type="date" name="jour"></div>
        <button name="ajouter" class="add">Ajoutez</button>
    </form>

</body>

</html>