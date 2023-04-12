<?php
include "../connection.php";
include "../Model/class_evenement.php";
class CrudEvenement
{
    public static function insert($Evenement)
    {
        $sql = "INSERT INTO evenement(id,nom,date,) 
        VALUES (:id,:nom,:date)";
        $db = connection::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(":id", $Evenement->getId());
            $req->bindValue(":nom", $Evenement->getNom());
            $req->bindValue(":date", $Evenement->getDate());
            $x = $req->execute();
            return $x == true ? null : "error";
        } catch (Exception $e) {
            return 'Erreur: ' . $e->getMessage();
        }
    }
    public static function Update($Evenement)
    {
        $sql = "UPDATE evenement
         SET `id`= :id, `nom`= :nom,`date`= :date where id=:id  ";
        $db = connection::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(":id", $Reclamation->getId());
            $req->bindValue(":nom", $Reclamation->getNom());
            $req->bindValue(":date", $Reclamation->getDate());
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public static function Delete($id)
    {
        $sql = "DELETE FROM reclamation where id=:id";
        $db = connection::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public static function Display_evenements()
    {
        $sql = "SELECT * FROM  evenement ";
        $db = connection::getConnexion();
        try {
            $result = $db->query($sql);
            return $result->fetchAll();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function searchByNom($arg1)
    {
        $sql = "SELECT * FROM evenement where nom like  '%" . $arg1 . "%'";
        $db = connection::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste->fetchAll()[0];
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }

    }
}

?>