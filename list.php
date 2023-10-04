<?php
require_once "./model/userModel.php";
$list = User::list();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Liste of players:</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nickname</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $user) { ?>
                <tr>
                    <td><?= $user['id_user']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['phone_number']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['password']; ?></td>
                    



                </tr>
            <?php } ?>
        </tbody>
    </table>