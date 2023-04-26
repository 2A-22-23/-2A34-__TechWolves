<?php
session_start();
include "../../Controller/ClientC.php";
include_once '../../Model/Client.php';



  $clientC = new ClientC();
  $message="";
if (isset($_POST["email"])&&isset($_POST["pswd"]))
   { 
    if (!empty($_POST["email"])&&
    !empty($_POST["pswd"])
       )
       { 
           $message=$clientC->connexionUser($_POST["email"],$_POST["pswd"]);
          
          
           echo $message;
           if ($message!='pseudo ou le mot de passe est incorrect')
           {
            if($_SESSION['role']=="Admin")
            header('Location:../Backend/index_Client.php');
            else 
              header('Location:index.php');
          
           }
               else
                 {
               $message='pseudo ou le mot de passe est incorrect';
               echo $message;
               
               
                 }


       }
       else
      { 
        $message="Missing information";
       echo $message;}
}
?>