<?php 
include '../../Controller/ReclamationC.php';

require_once '../../model/Reclamation.php';

if(isset($_GET['id']))
{
    $recC = new ReclamationC();
    $recC->SupprimerRec($_GET['id']);
    header('Location:Index_rec.php');
}
?>