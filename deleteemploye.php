 <?php
  

 require_once '../Controller/employeC.php';
    require_once '../Model/employe.php';
    session_start();
    $employeC = new employeC();
    if (isset ($_SESSION["idemploye"])&&!empty($_SESSION["idemploye"])){
        $list = $employeC->deleteemploye($_SESSION["idemploye"]);
        header('location:listemploye.php');
    }
    else {
        echo "undefined id";
        
    
   
    ?>