<?php
session_start();
require_once "../function/function.php";
class User
{

    // methode pour s'inscrire
    public static function inscription($role, $name, $phone_number, $email, $password)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO users (name,phone_number,email,password,role) VALUES (?,?,?,?,?) ");

        // executer la requete
        try {
            $request->execute(array($name, $phone_number, $email, $password, $role));


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
        $request = $db->prepare("SELECT *FROM users WHERE email=? ");
        try {
            $request->execute(array($email));
            $user = $request->fetch();
            // verifier si le mot de passe existe
            if (empty($user)) {
                $_SESSION['error_message'] = "cet email n'existe pas";
            } else if (password_verify($password, $user['password'])) {

                $_SESSION['error_message'] = "Bienvenue!!";
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
