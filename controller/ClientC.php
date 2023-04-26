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
                (nom,prenom,ddn ,tel, adresse,etat_civil,password,role )
                VALUES
                (:nom,:prenom,:ddn,:tel,:adresse,:etat_civil,:password,:role)
                ');
                
               $rs=$querry->execute([
                    
                    'nom'=>$client->getNom(),
                    'prenom'=>$client->getPrenom(),
                    'ddn'=>$client->getDdn()->format('Y-m-d'),
                    'tel'=>$client->getTel(),
                    'adresse'=>$client->getAdresse(),
                    'etat_civil'=>$client->getEtat_civil(),
                    'password'=>$client->getPass(),
                    'role'=>$client->getRole()
                   
                    
                   
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
                nom=:nom,prenom=:prenom,ddn=:ddn,tel=:tel,adresse=:adresse,etat_civil=:etat_civil,password=:password,role=:role
                where id=:id');
                
                $querry->execute([
                    'id'=>$client->getId(),
                    'nom'=>$client->getNom(),
                    'prenom'=>$client->getPrenom(),
                    'ddn'=>$client->getDdn()->format('Y-m-d'),
                    'tel'=>$client->getTel(),
                    'adresse'=>$client->getAdresse(),
                    'etat_civil'=>$client->getEtat_civil(),
                    'password'=>$client->getPass(),
                    'role'=>$client->getRole()
                    

                  
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

        function connexionUser($email,$password)
        {
    
            $db=config::getConnexion();
            $sql="SELECT * FROM client WHERE adresse='". $email ."' AND password='". $password. "'";
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                $result = $query->fetch(PDO::FETCH_OBJ);
                if($count==0)
                {
                    $message="verifier donnees login";
                }
                else{
                    
                    
                    $x=$query->fetch();
                    $message=$x['adresse'];
                    $_SESSION['id'] = $result->id ;
                    $_SESSION['nom'] = $result->nom ;
                    $_SESSION['prenom'] = $result->prenom ;
                    $_SESSION['ddn'] = $result->ddn ;
                    $_SESSION['password'] = $result->password ;
                    $_SESSION['adresse'] = $result->adresse ;
                    $_SESSION['role']=$result->role;
                        echo "$message";
    
                }
    
    
            }
            catch (Exception $e)
                    {
                        $message= " ".$e->getMessage();
                    }
    
                return $message;
    
    
        }
        function Recherche($search)
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