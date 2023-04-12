<?php
    require_once '../Controller/employeC.php';
    require_once '../Model/employe.php';
    session_start();
    $employeC = new employeC();
    $list = $employeC->findemploye($_SESSION['idemploye']);
   if(isset($_POST['save'])){
          $lastname=$_POST['lastname'];
          $firstname=$_POST['firstname'];
          $email=$_POST['email'];
          $gender=$_POST['gender'];
            $employe = new employe(NULL,$lastname,$firstname,$email,$gender);
            $employeC = new employeC();
            employeC::UpdateEmploye($employe,$_SESSION['idemploye']);
            header('Location: listemploye.php');
     
        }
        else{
            echo "champ invalid";
        }
        
    
    if(isset($_POST['cancel']))
    {
      header('location:listemploye.php');
    }
?>
















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h3> Edite employee information</h3>
        <p class="text-muted" >click update after changing ani information</p>
       </div> 



       <div class="contrainer d-flex justify-content-center">
        <form method="post" style="width:50vw;min-width:
        300px;">
        <div class="row mb-3" >
           
              <div class="col"  >
                 <label class="form-label" > First name:</label>
                 <input type="txt" class="form-control" name="firstname" value=" <?php echo($list['firstname']);?>" >
              </div>
            <div class="col">
                  <label class="form-label" > Last name :</label>
                 <input type="txt" class="form-control" name="lastname" value="<?php echo($list['lastname']);?>">

            </div>
          
            <div class="mb-3">
              <label class="form-label" > E-mail :</label>
             <input type="txt" class="form-control" name="email"value="<?php echo $list['email']?>">
            </div>
         <div class="form-group nb-3">
            <label>Gender :</label>
            <input type="radio"class="form-check-input"name="gender" id="female" value="female" <?php echo($list['gender']=='female')?"checked":"";?>>
             <label for="female" class="form-input-label">Female</label>
             
             <input type="radio"class="form-check-input"name="gender" id="male" value="male"<?php echo($list['gender']=='male')?"checked":"";?>>
             <label for="male"class="form-input-label">male</label>

             <div> 
             
            <div>
            <div>    
            <img src="changement.png"alt="photo" width="600" height="300">
            </div>
           
            
            <button  name="save" class="btn btn-success">update</button>
            <button  name="cancel" class="btn btn-danger">cancel</button>


            
        </form>
        </div>
 





 