<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/function/function.php';
class MessageModel
{
    // methode pour s'inscrire
    public static function communication($idMaman, $idConseiller, $message = null)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO message (id_parent, id_conseiller, date) VALUES (?,?, Now()) ");

        // executer la requete
        try {
            $request->execute(array($idMaman, $idConseiller, $message));


            // rediriger vers la page login.php
            header("Location:http://localhost/mini_projet/message.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
