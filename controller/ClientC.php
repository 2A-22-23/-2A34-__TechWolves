<?php
include '../config.php';
include '../model/Client.php';

class equipementC

{
    public function listClients()
    {
        $sql = "SELECT * FROM equipement";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($i)
    {
        $sql = "DELETE FROM equipement WHERE matricule = :i";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':i', $i);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClient($equipement)
    {
        $sql = "INSERT INTO equipement  
        VALUES (NULL, :fn,:ln,:ad)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $equipement->getprix(),
                'ln' => $equipement->gettype(),
                'ad' => $equipement->getimg()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClient($equipement, $i)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE equipement SET 
                    prix = :prix, 
                    type = :type, 
                    img = :img
                WHERE matricule= :matricule'
            );
            $query->execute([
                'matricule' => $i,
                'prix' => $equipement->getprix(),
                'type' => $equipement->gettype(),
                'img' => $equipement->getimg()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showClient($i)
    {
        $sql = "SELECT * from equipement where matricule = $i";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $equipement;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
