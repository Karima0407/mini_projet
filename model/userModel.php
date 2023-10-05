<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/function/function.php';
class User
{

    // methode pour s'inscrire
    public static function inscription( $name, $phone_number, $email, $password)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO users (name,phone_number,email,password) VALUES (?,?,?,?) ");

        // executer la requete
        try {
            $request->execute(array($name, $phone_number, $email, $password));


            // rediriger vers la page login.php
            // header("Location:http://localhost/biblio_poo/views/login");



        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // methode pour se connecter 
    public static function connexion($email, $password)
    {
        // se connecter a la bd
        $db = Database::dbConnect();
        // preparer la requete 
        $request = $db->prepare("SELECT * FROM users WHERE email=? ");
        try {
            $request->execute(array($email));
            $user = $request->fetch();
            // verifier si le mot de passe existe
            if (empty($user)) {
                $_SESSION['error_message'] = "cet email n'existe pas";
                header("Location:" . $_SERVER['HTTP_REFERER']);
            } else if (password_verify($password, $user['password'])) {

                $_SESSION['error_message'] = "Bienvenue!!";
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                header("Location: http://localhost/mini_projet/list.php");
            } else {

                $_SESSION['error_message'] = "Mot de passe incorrect";
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function list()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM users");
        // executer la requete
        try {
            $request->execute();
            // recuperer le resultat de la requete dans un tableau listPlayer

            $list = $request->fetchAll();
            return $list;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
