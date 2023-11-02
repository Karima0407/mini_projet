<?php
// session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/function/function.php';
class Sujet
{

    // methode pour s'inscrire
    public static function ajout($sujet,$date)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO sujet (text,date) VALUES (?,?) ");

        // executer la requete
        try {
            $request->execute(array($sujet,$date));


            // rediriger vers la page login.php
            // header("Location:http://localhost/biblio_poo/views/login");



        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function listSujet()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM sujet");
        // executer la requete
        try {
            $request->execute();

            $listSujet = $request->fetchAll();
            return $listSujet;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



}