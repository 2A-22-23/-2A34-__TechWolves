<?php
    session_start();
    require '../Controller/congeC.php';
    $congeC = new congeC();
    if(isset($_POST['id']) && !empty($_POST['id']))
    {
     
   $id=intval($_POST['id']);

    $list=$congeC->afficherConge_2($id);
  // var_dump($list);
    }
    else
    {
     
      $list=$congeC->afficherConge();
    }
  if (isset($_POST['edit']))
{
  $_SESSION['idconge']=$_POST['edit'];
  header('Location: updateconge.php');
  
 
}
if(isset($_POST['delete']))
{
  congeC::deleteconge($_SESSION['idconge']);
  header('Location: listconge.php');
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>congee management</title>
</head>
<body>
<form method="post">
<label for="search">Search:</label>
<input type="text" id="id" name="id">
<input type="submit" value="Search">
</form>
<nav class="navbar navbar-light justify-content-center fs-3 nb-5 "
   style="background-color:#00ff5573";>  congee management</nav>


   
   
<div>
    <table class="table">
  <thead class="table-dark">
    <br><br><br>
  
    <tr>
      <th scope="col">Id_conge</th>
      <th scope="col">Firstname </th>
      <th scope="col">LastName </th>
      <th scope="col">date_debut</th>
      <th scope="col">date_fin</th>
      <th scope="col">Action</th>
      

      </tr>
</thead>

<tbody>
 

    


      
<?php foreach($list as $row){ ?>
    <tr>
      
      <th  scope="row"> <?php echo ($row['id_conge']);?></th>
     <td> <?php echo ($row['firstname']);?> </td>
     <td> <?php echo ($row['lastname']);?> </td>
     <td><?php echo ($row['date_debut']);?></td>
     <td><?php echo ($row['date_fin']);?></td>
     <td><form method="post" action="">
      <button style="border:none; background:transparent;" value="<?php echo $row['id_conge'];?>"  name="edit" class="link-dark"><i class=" fa-solid fa-pen-to-square fs-7 me-3"></i> </button>
      <button style="border:none; background:transparent;" value="<?php echo $row['id_conge'];?>" name="delete" class="link-dark"><i class="fa-solid fa-trash  fs-7 "></i> </button>
      
    
    </form></td>  
     
    
     <td>
      
    </td>
      </tr>
      <?php }
      
      ?> 






</tbody>


</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>

    
</html>