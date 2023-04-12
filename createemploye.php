<?php
require_once '../Model/employe.php';
require_once '../Controller/employeC.php';
if (isset ($_POST ["submit"])){
    if (!empty ($_POST ["lastname"])&& !empty($_POST ["firstname"]) && !empty($_POST ["email"]) && !empty($_POST ["gender"])){
        /*echo $_POST ["lastName"];
        echo $_POST ["firstName"];
        echo $_POST ["email"];
        echo $_POST ["gender"];*/
       /* $firstname = $_POST["firstname"];

        if (preg_match('/\d/', $firstname)) {
            echo "Le nom ne doit pas contenir des chiffres.";
        } else {
            echo "Le nom a été saisi correctement.";
        }*/
        if($_POST ["gender"]=="female")
        {
        $employe1 = new employe(NULL, $_POST ["lastname"], $_POST ["firstname"], $_POST ["email"],"female");
        }
        else{
            $employe1 = new employe(NULL, $_POST ["lastname"], $_POST ["firstname"], $_POST ["email"],"Male");
        }
        $employeC = new employeC();
        $employeC->createemploye($employe1);
        header('location:listemploye.php');
    }
    else{
        echo "Attention : champ invalid !";
    }
   
    if(isset($_POST['cancel']))
    {
        header('location:listemploye.php');
    }
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createemploye</title>
    <title>employee management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>employee management</title>


</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 nb-5 "
   style="background-color:#00ff5573";
   >  employee management</nav>



   <div class="container">
       <div class="text-center nb-4"> 
        <br>
        <h3> Add new employee</h3>
        <p class="text-muted" >complete the form below to add a new employee</p>
       </div> 
       <div class="contrainer d-flex justify-content-center">
        <form action=""method="post" style="width:50vw;min-width:300px;">
        <div class="row mb-3">
              <div class="col">

              
                 <label class="form-label" > First name :</label>
                 <input type="txt" class="form-control" name="firstname"placeholder="first">
              </div>
            <div class="col">
                  <label class="form-label" > Last name :</label>
                 <input type="txt" class="form-control" name="lastname"placeholder="lastname">

            </div>
            
            <div class="mb-3">
              <label class="form-label" > E-mail :</label>
             <input type="txt" class="form-control" name="email"placeholder="name@gmail.com">
            </div>
         <div class="form-group nb-3">
            <label>Gender :</label>
            <input type="radio"class="form-check-input"name="gender" id="female" value="female">
             <label for="female"class="form-input-label">Female</label>
             
             <input type="radio"class="form-check-input"name="gender" id="male" value="male">
             <label for="male"class="form-input-label">male</label>

         </div> 
         <div class="d-flex align-items-center justify-content-between mb-3">
         <button type="submit" class="btn  btn-sm btn-success"style='width:20%;' name="submit">save</button>
         <button href="listemploye.php" style='width:20%;' name="cancel"class="btn btn-danger">cancel</button>
         </div>
          </form>
<br><br>
<div>       
    


          
            <!-- <a href="listemploye.php" name="cancel"class="btn btn-danger">cancel</a> -->

        </div>
        <br><br>
        <div>    
            <img src="imagepeo.png">
            </div>

</div>



            
</body>
</html>