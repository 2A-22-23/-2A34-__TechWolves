<?php
include_once('..\config.php');
include '..\Model\modele.php';
class livraisonsC {
    function afficherLivraison(){
        $sql="SELECT * FROM livraison";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerLivraison($id){
        $sql=" DELETE FROM livraison WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id' , $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterLivraison($livraisons){

       $sql = "INSERT INTO livraison (adresse,type,prix,id_livreur)
                 VALUES (:adresse, :type, :prix, :id_livreur)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'adresse'=> $livraisons->getadresse(),
            'type'=> $livraisons->gettype(),
            'prix'=> $livraisons->getprix(),
            'id_livreur'=> $livraisons->getid_livreur()

        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifierLivraison($id,$livraisons){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE livraison SET adresse = :adresse, type = :type, prix = :prix, id_livreur = :id_livreur WHERE id = :id');
$query->execute([
    'adresse'=> $livraisons->getadresse(),
    'type'=> $livraisons->gettype(),
    'prix'=> $livraisons->getprix(),
    'id_livreur'=> $livraisons->getid_livreur(),
    'id'=> $id
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererLivraison($id){
    $sql="SELECT * from livraison where id=$id";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$livraisons = $query->fetch();
return $livraisons;
}catch (Exception $e){
    $e->getMessage();}
}
function joinLivreur($id_livreur){
    $sql="SELECT * FROM livraison INNER JOIN livreur on livraison.id_livreur = livreur.id_livreur WHERE livreur.id_livreur = $id_livreur";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}

function afficherLivraisontri(){
			
    $sql="SELECT * FROM livraison ORDER BY prix";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function afficherLivraisonRecherche($rech){
			
    $sql="SELECT * FROM livraison where id like '%$rech%'";
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