<?php

include_once 'conf.php';
include 'Controller/produitC.php';

$produitC= new produitC();
$list1 =$produitC->listproduit ();

if(isset($_POST['submit'])){

    $file = $_FILES['file'];

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

	

	foreach ($list1 as $produiti) {  
		$id_produitechange=($produiti['id_produit']+1);
	}

    $Type=$_POST['Type_article'];
    $Describtion=$_POST['Describtion'];
    $Statut=$_POST['Statut'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt)); 

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
             if($fileSize<100000000){

                $fileNameNew = uniqid('',true).".".$fileActualExt;
                 $fileDestination = 'uploads/'.$fileNameNew; 
                 move_uploaded_file($fileTmpName, $fileDestination);
              
                $conn = new mysqli ('localhost','root','','projet');
                if($conn->connect_error){
                die('Connection failed : '.$conn->connect_error);
                }else{
                    $stmt = $conn-> prepare("insert into produit(id_produitechange,Describtion, Type_article, image,Statut)
                     values(? ,?, ? ,? ,?) ");
                    $stmt->bind_param("issss",$id_produitechange,$Describtion, $Type, $fileDestination,$Statut);

                    $stmt->execute();
                    $stmt->close();
                    $conn->close();
					header('Location:views/listproduit.php');
                }
             }else{
                echo "Your file is too big !";
             }
        } else{
            echo "There was an error uploading your image "; 
        }
    } else {
        echo "You cannot upload files of this type !";
    }

}

?>