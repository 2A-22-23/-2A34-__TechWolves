<?php
require_once '../Model/conge.php';
require_once '../Controller/congeC.php';
session_start();
    $congeC = new congeC();
    $list = $congeC->findconge($_SESSION['idemploye']);
if (isset ($_POST ["submit"])){
        $conge1 = new conge(NULL,$_POST["date_debut"],$_POST["date_fin"], $_SESSION['idEmployeConge']);
        
        $congeC->createconge($conge1);
        header('location:listconge.php');
    

if(isset($_POST['cancel']))
    {
        header('location:listconge.php');
    }


   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createconge</title>
    <title>congee management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>congee management</title>


</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 nb-5 "
   style="background-color:#00ff5573";
   >  congee management</nav>



   <div class="container">
       <div class="text-center nb-4"> 
        <br>
        <h3> Add new conge</h3>
        <p class="text-muted" >complete the form below to add a new conge</p>
       </div> 
       <div class="contrainer d-flex justify-content-center">
        <form action=""method="post" style="width:50vw;min-width:300px;">
        <div class="row mb-3">
              <div class="col">
              
                

              
                 <label class="form-label" >date_debut :</label>
                 <input type="date" class="form-control" name="date_debut"placeholder="00/00/0000" required>
              </div>
              
            </div>
            
           
            <label class="form-label" >date_fin:</label>
                 <input type="date" class="form-control" name="date_fin"placeholder="00/00/0000" required>
        

         </div> 
         <div class="d-flex align-items-center justify-content-between mb-3">
         <button type="submit" class="btn  btn-sm btn-success"style='width:20%;' name="submit">save</button>
      
          </form>
<br><br>
<div>       
    


          
           <a href="listemploye.php" name="cancel"class="btn btn-danger">cancel</a>

        </div>
        <br><br>
       

</div>



            
</body>
</html>