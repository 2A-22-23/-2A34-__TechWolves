<?php 
include '../../Controller/ClientC.php';

require_once '../../model/Client.php';
session_start();
if(isset($_GET['id']))
{
    $clientC = new ClientC();
    $clientC->SupprimerClient($_GET['id']);
    header('Location:Index_client.php');
}
?>