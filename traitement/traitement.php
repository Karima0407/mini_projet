<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '/model/userModel.php';
require_once __DIR__ . '/../model/userModel.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/model/sujetModel.php';
require_once __DIR__ . '/../model/sujetModel.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/model/messageModel.php';
require_once __DIR__ . '/../model/messageModel.php';

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
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header("Location: http://localhost/mini_projet/deconnexion.php");
}
// pour ajouter un sujet

if (isset($_POST['ajouter'])) {
    $sujet = htmlspecialchars($_POST['sujet']);
    $date = htmlspecialchars($_POST['jour']);


    Sujet::ajout($sujet, $date);
}
// pour faire le lien avec le message et le sujet
if (isset($_POST['envoi_message'])) {
    $message = htmlspecialchars($_POST['messages']);
    $id_conseillere = htmlspecialchars($_POST["id_conseillere"]);
    $id_maman = htmlspecialchars($_POST["id_maman"]);
    $sujet = htmlspecialchars($_POST['selectSujet']);

    MessageModel::communication($id_maman, $id_conseillere, $sujet, $message);
}
// pour envoyer la réoponse à la mère:
if (isset($_POST['envoi_reponse'])) { 
    $id_maman = htmlspecialchars($_POST["maman"]);
    $id_conseillere = htmlspecialchars($_POST["conseillere"]);
   
    $idsujet = htmlspecialchars($_POST['id_sujet']);
   $reponse=htmlspecialchars($_POST['answer']);

   MessageModel::reponse($id_maman,$id_conseillere, $idsujet, $reponse);
}
