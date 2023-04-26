<?php
include '..\Model\livreur.php';

class livreursC {
    function afficherLivreur(){
        $sql="SELECT * FROM livreur";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function returnEmail($id_livreur){
        $db = config::getConnexion();
        $stmt = $db->prepare("SELECT email FROM livreur WHERE id_livreur = :id_livreur");
        
        try{
            $stmt->execute(['id_livreur' => $id_livreur]);
        $row = $stmt->fetch();
        $email = $row['email'];
            return $email;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerLivreur($id_livreur){
        $sql=" DELETE FROM livreur WHERE id_livreur=:id_livreur";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_livreur' , $id_livreur);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterlivreur($livreurs){

       $sql = "INSERT INTO livreur (nom,heure,tarif,email)
                 VALUES (:nom, :heure, :tarif,:email)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom'=> $livreurs->getnom(),
            'heure'=> $livreurs->getheure(),
            'tarif'=> $livreurs->gettarif(),
            'email'=> $livreurs->getemail()
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifierlivreur($id_livreur,$livreurs){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE livreur SET nom = :nom, heure = :heure, tarif = :tarif, email = :email WHERE id_livreur = :id_livreur');
$query->execute([
    'nom'=> $livreurs->getnom(),
    'heure'=> $livreurs->getheure(),
    'tarif'=> $livreurs->gettarif(),
    'email'=> $livreurs->getemail(),
    'id_livreur'=> $id_livreur
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererlivreur($id_livreur){
    $sql="SELECT * from livreur where id_livreur=$id_livreur";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$livreurs = $query->fetch();
return $livreurs;
}catch (Exception $e){
    $e->getMessage();}
}

function afficherLivreurtri(){
			
    $sql="SELECT * FROM livreur ORDER BY tarif";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function afficherLivreurRecherche($rech){
			
    $sql="SELECT * FROM livreur where id_livreur like '%$rech%'";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
        
}
?>