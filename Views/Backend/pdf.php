<!DOCTYPE html>
<html>
    <head>
        <title>Pdf Client</title>
</head>
<body>
<?php

require ("fpdf.php");
include "../../Controller/ClientC.php";

include_once "../../config.php";
$ClientC=new ClientC();
$listuser = $ClientC->afficherClient();

$db = config::getConnexion();

$display_heading = array( 'nom'=> 'nom', 'prenom'=> 'prenom','adresse'=> 'adresse','ddn'=> 'ddn',);
$sql = "SELECT nom, prenom, adresse, ddn FROM client";
$result= $db->query($sql);
$header = "SHOW COLUMNS(nom,prenom,adresse,ddn) FROM client";
$pdf = new  FPDF();



$pdf->AddPage();
$pdf->SetFont("Arial","B",19);


$pdf->Cell(210,10,"liste des Clients",1,1,'C');

$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(55,12,"Nom","1","0","C");
$pdf->Cell(55,12,"Prenom","1","0","C");
$pdf->Cell(55,12,"Email","1","0","C");
$pdf->Cell(55,12,"Date de naissance","1","0","C");
foreach($header as $heading) {
$pdf->Cell(50,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(55,12,$column,1);
}
$pdf->Output('client','D','false');


// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}







?>


</body>
</html>