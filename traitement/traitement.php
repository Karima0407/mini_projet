<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/model/userModel.php';
// pour l'inscri

if (isset($_POST['inscription'])) {

    $name = htmlspecialchars($_POST['name']);
    $phone_number = htmlspecialchars($_POST['num_tel']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // hasher le mot de passe

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // appeler la methode inscription de la class User
    // la methode inscription etant static donc on utilise 
    User::inscription($name, $phone_number, $email, $passwordHash);
}
if (isset($_POST['login'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // appeler la methode connexion de la class User
    // la methode connexion etant static donc on utilise 
    User::connexion($email, $password);
}



// pour la deconnexion
if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: http://localhost/mini_projet/deconnexion.php");
}
