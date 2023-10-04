<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/mini_projet/model/userModel.php';
// pour l'inscri

if (isset($_POST['inscription'])){
    $role=htmlspecialchars($_POST['genre']);
    $name=htmlspecialchars($_POST['name']);
    $phone_number = htmlspecialchars($_POST['num_tel']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    // hasher le mot de passe

    $passwordHash=password_hash($password, PASSWORD_DEFAULT);

    // appeler la methode inscription de la class User
    // la methode inscription etant static donc on utilise 
    User::inscription($role,$name,$phone_number,$email,$passwordHash);



}
if (isset($_POST['login'])) {
   
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // appeler la methode connexion de la class User
    // la methode connexion etant static donc on utilise 
    User::connexion($email, $password);



}


// pour l'ajout d'un livre
// if (isset($_POST ['add'])){
//     $title=htmlspecialchars($_POST['title']);
//     $author=htmlspecialchars($_POST['author']);
//     $publication=htmlspecialchars($_POST['publication']);

//     Book::addBook($title,$author,$publication);
// }
// // pour l'emprunt d'un livre
// if (isset($_GET['book'])){
//     // identifiant du livre à emprunter
//     $book=$_GET['book'];
//     // on recupere l'identifiant de l'utilisateur connécté
//     $id_user=$_COOKIE['id_user'];
//     // appel de la methode borrowBook
//     Book::borrowBook($id_user,$book);

// }

// // pour rendre un livre
// if (isset($_GET['borrow'])) {
//     // identifiant de l'emprunt
//     $borrow = $_GET['borrow'];
//     $bookId=$_GET['bookid'];
//     // appel de la methode returnBook
   
//     Book::returnBook($borrow ,$bookId);

// }