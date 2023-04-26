
<?php
    require_once '../Controller/congeC.php';
    require_once '../Model/conge.php';
    session_start();
    $congeC = new congeC();
    $list = $congeC->findconge($_SESSION['idconge']);
   if(isset($_POST['save'])){
          $date_debut=$_POST['date_debut'];
          $date_fin=$_POST['date_fin'];
            
        
            $conge = new conge(NULL,$date_debut,$date_fin,$_SESSION['idEmployeConge']);
            $congeC = new congeC();
            congeC::Updateconge($conge,$_SESSION['idconge']);
            header('Location: listconge.php');
     
        }
       
        
    
    if(isset($_POST['cancel']))
    {
      header('location:listconge.php');
    }
?>






















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h3> Edite congeinformation</h3>
        <p class="text-muted" >click update after changing ani information</p>
       </div> 



       <div class="contrainer d-flex justify-content-center">
        <form method="post" style="width:50vw;min-width:
        300px;">
        <div class="row mb-3" >
           
              <div class="col"  >
              </div>
            <div class="col">
                  <label class="form-label" > date_début:</label>
                 <input type=date class="form-control" name="date_debut" placeholder="<?php echo $list['date_debut'];?>" value="<?php echo $list['date_debut']?> "required>

            </div>
          
            <div class="mb-3">
              <label class="form-label" >date_fin :</label>
             <input type=date class="form-control" name="date_fin"  placeholder="<?php echo $list['date_fin'] ;?>" value="<?php echo $list['date_fin']?>"required>
            </div>
         
            
            <button  name="save" class="btn btn-success">update</button>
            <button  name="cancel" class="btn btn-danger">cancel</button>


            
        </form>
        </div>
 





 