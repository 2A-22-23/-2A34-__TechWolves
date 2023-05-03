<?php
	include '../config.php';
	include_once '../Model/reservation.php';
	class reservationC {
		function afficherreservation(){
			$sql="SELECT * FROM reservation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerreservation($id){
			$sql="DELETE FROM reservation WHERE id=:id";
			$db = config::getConnexion();
			
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterreservation($reservation){
	        
			$sql="INSERT INTO reservation (id, nom_c, date_reserv,numero,id_evn) 
			VALUES (:id,:nom_c, :date_reserv,:numero,:id_evn)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $reservation->getid(),
					'nom_c' => $reservation->getnom_c(),
					'date_reserv' =>  $reservation->getdate_reserv(),
					'numero' => $reservation->getnumero(),
					'id_evn' => $reservation->getid_evn(),

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreservation($id){
			$sql="SELECT * from reservation where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reservation=$query->fetch();
				return $reservation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifier_reservation($reservation, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET 
					    nom_c= :nom_c,
						date_reserv= :date_reserv, 
						numero= :numero,
						id_evn= :id_evn 
					WHERE id=:id'
				);
				$query->execute([
					'nom_c' => $reservation->getnom_c(),
					'date_reserv' => $reservation->getdate_reserv(),
					'numero' => $reservation->getnumero(),
					'id_evn' => $reservation->getid_evn(),
					'id' => intval($id,10)
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage(); // afficher l'erreur pour déboguer
			}
		}

		function afficherTri(){
			
			$sql="SELECT * FROM reservation ORDER BY date_reserv";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function afficherRecherche($rech){
					
			$sql="SELECT * FROM reservation where id like '%$rech%' OR nom_c like '%$rech%'";
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