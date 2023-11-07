<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/mini_projet/function/function.php';
class MessageModel
{

    public static function communication($idMaman, $idConseiller, $idSujet, $message)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO message (id_parent, id_conseiller, id_sujet , date , contenu) VALUES (?,?,?, Now(),?) ");

        // executer la requete
        try {
            $request->execute(array($idMaman, $idConseiller, $idSujet, $message));


            // rediriger vers la page login.php
            header("Location: http://mini_projet.com/list.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function message_maman($id_maman)
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM message JOIN sujet ON message.id_sujet = sujet.id_sujet where id_parent= ?  ");
        // executer la requete
        try {
            $request->execute(array($id_maman));
            $message_maman = $request->fetchAll();
            return $message_maman;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function reponse($id_maman, $id_conseillere, $idsujet, $reponse)
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("INSERT INTO message (id_parent, id_conseiller, id_sujet , date , contenu) VALUES (?,?,?, Now(),?)");

        // executer la requete
        try {
            $request->execute(array($id_maman, $id_conseillere, $idsujet, $reponse));
            $reponse_maman = $request->fetchAll();
            if ($_SESSION['role'] == 'ROLE_CONSEILLER') {
                $request = $db->prepare('UPDATE message SET type = "reponse"');
                try {
                    $request->execute(array($id_conseillere));
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            return $reponse_maman;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
