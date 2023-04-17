<?php

    require_once '..\..\config.php';
    require_once '..\..\Model\Client.php';

    class ClientC {

        function afficherClient()
        {
            $requete = "select * from client";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                //$result = $querry->fetchAll(PDO::FETCH_COLUMN, 1);
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function getClientById($id)
        {
            $requete = "select * from client where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

       

        function AjouterClient($client)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO client
                (nom,prenom,ddn ,tel, adresse,etat_civil,password )
                VALUES
                (:nom,:prenom,:ddn,:tel,:adresse,:etat_civil,:password)
                ');
                
               $rs=$querry->execute([
                    
                    'nom'=>$client->getNom(),
                    'prenom'=>$client->getPrenom(),
                    'ddn'=>$client->getDdn()->format('Y-m-d'),
                    'tel'=>$client->getTel(),
                    'adresse'=>$client->getAdresse(),
                    'etat_civil'=>$client->getEtat_civil(),
                    'password'=>$client->getPass()
                   
                    
                   
                ]);
                if ($rs) {
                    echo "Client Created";
                }
                else {
                    echo "ERROR";
                }
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ModifierClient($client)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE client SET
                nom=:nom,prenom=:prenom,ddn=:ddn,tel=:tel,adresse=:adresse,etat_civil=:etat_civil,password=:password
                where id=:id');
                
                $querry->execute([
                    'id'=>$client->getId(),
                    'nom'=>$client->getNom(),
                    'prenom'=>$client->getPrenom(),
                    'ddn'=>$client->getDdn()->format('Y-m-d'),
                    'tel'=>$client->getTel(),
                    'adresse'=>$client->getAdresse(),
                    'etat_civil'=>$client->getEtat_civil(),
                    'password'=>$client->getPass()
                    

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function SupprimerClient($id)
        {
            $sql="DELETE FROM client WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }

        function searchform($search)
        {
            $requete = "select * from client  WHERE nom LIKE '%$search%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
      

    }