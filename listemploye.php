<?php
    session_start();
    require '../Controller/employeC.php';
    $employeC = new employeC();
    $list = $employeC->listemploye();
  // var_dump($list);
  if (isset($_POST['edit']))
{
  header('Location: updateemploye.php');
  $_SESSION['idemploye']=$_POST['edit'];
 
}
if(isset($_POST['delete']))
{
  employeC::deleteemploye($_SESSION['idemploye']);
  header('Location: listemploye.php');
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
    <title>employee management</title>
</head>
<body>


<nav class="navbar navbar-light justify-content-center fs-3 nb-5 "
   style="background-color:#00ff5573";>  employee management</nav>

   <a href="createemploye.php" class="btn btn-dark nb-5">Add new</a>
<div>
    <table class="table">
  <thead class="table-dark">
    <br><br><br>
  
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">action</th>
      <table class="table">

      </tr>
</thead>

<tbody>
 

    
<?php foreach($list as $row){ ?>
    <tr>
      
      <th  scope="row"> <?php echo ($row['id']);?></th>
     <td> <?php echo ($row['firstname']);?> </td>
     <td><?php echo ($row['lastname']);?></td>
     <td><?php echo ($row['email']);?></td>
     <td><?php echo ($row['gender']);?></td>
    
     <td>
      <form method="post" action="">
      <button style="border:none; background:transparent;" value="<?php echo $row['id'];?>"  name="edit" class="link-dark"><i class=" fa-solid fa-pen-to-square fs-7 me-3"></i> </button>
      <button style="border:none; background:transparent;" value="<?php echo $row['id'];?>" name="delete" class="link-dark"><i class="fa-solid fa-trash  fs-7 "></i> </button>
      </form>  
    </td>
      </tr>
      <?php }?> 

      

     
    
     
     






</tbody>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>

    
</html>