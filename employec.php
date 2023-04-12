



<?php 
 require_once '../config.php';
 require_once '../Model/employe.php';

class employeC{
        public function listemploye(){
            $sql = 'SELECT * FROM `management`';
            $pdo = config::getConnexion();
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                $result = $list->fetchAll();
                return $result;
            }
            catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
        
        public function createemploye($employe){
            try {
                $pdo = config::getConnexion();
                $sql = 'INSERT INTO `management` ( `firstname`,`lastname`, `email`, `gender`) VALUES (?, ?, ?, ?)';
                $list = $pdo->prepare($sql);
                $ln=$employe->getLastName();
                $list->bindParam(1,$ln);
                $fn=$employe->getFirstName();
                $list->bindParam(2,$fn);
                $em = $employe->getemail();
                $list->bindParam(3,$em);
                $ge = $employe->getgender();
                $list->bindParam(4,$ge);
                $list->execute();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        public static function deleteemploye(int $id){
            $sql = 'DELETE FROM `management` WHERE id = '.$id.'';
            $pdo = config::getConnexion();
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                echo $list->rowCount() ."records deleted successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        
        public static function UpdateEmploye($Employe,$id)
        {
            $sql = "UPDATE management
             SET lastname=:lastname,firstname=:firstname,email=:email,gender=:gender where id=".$id ;
             $db = config::getConnexion();
            try
            {
                $req=$db->prepare($sql);
                
                $req->bindValue(":lastname",$Employe->getLastName());
                $req->bindValue(":firstname",$Employe->getFirstName());
                $req->bindValue(":email",$Employe->getemail());
                $req->bindValue(":gender",$Employe->getgender());
                $req->execute();
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }





        public function findemploye($id){
            
            $sql = 'SELECT * FROM `management` WHERE id = '.$id.'';
            $pdo = config::getConnexion();
            $list = $pdo->prepare($sql);
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                return $list->fetch();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

       
    
    
    
    
    }
        ?>
