<?php
require ('fpdf/fpdf.php');
class PDF extends FPDF
{
function Header()
{
  
$this ->SetFont('Arial','B',15);
$this ->Cell(30);

$this->Image('logo2.jpg',165, 5, 20 );
$this->Ln(20);
}
 function Footer()
{
$this ->SetY(-15);
$this->SetFont('Arial','I',8);
 $this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');
}
}?>
