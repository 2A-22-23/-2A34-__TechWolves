<?php
include '../config.php';
include '../model/stock.php';

class stockC

{
    public function liststock()
    {
        $sql = "SELECT * FROM stock";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletestock($i)
    {
        $sql = "DELETE FROM stock WHERE id_stock = :i";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':i', $i);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addstock($stock)
    {
        $sql = "INSERT INTO stock  
        VALUES (NULL, :fn,:ln,:ad)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $stock->getnb_casque(),
                'ln' => $stock->getnb_sac(),
                'ad' => $stock->getnb_velo()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatestock($stock, $i)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE stock SET 
                    nb_sac = :nb_sac, 
                    nb_casque = :nb_casque, 
                    nb_velo = :nb_velo
                WHERE id_stock= :id_stock'
            );
            $query->execute([
                'id_stock' => $i,
                'nb_sac' => $stock->getnb_sac(),
                'nb_casque' => $stock->getnb_casque(),
                'nb_velo' => $stock->getnb_velo()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showstock($i)
    {
        $sql = "SELECT * from stock where id-stock = $i";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $stock = $query->fetch();
            return $stock;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
