<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM administrador";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(35,10,utf8_decode('N.administrador'),1,0,'C',1);
$pdf->Cell(85,10,'nombre',1,0,'C',1);
$pdf->Cell(40,10,'contraseña',1,0,'C',1);
$pdf->Cell(30,10,'nivel',1,1,'C',1);


$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(35,10,$row['id'],1,0,'C');
	$pdf->Cell(85,10,utf8_decode($row['nombre']),1,0,'C');
	$pdf->Cell(40,10,utf8_decode($row['contraseña']),1,0,'C');
	$pdf->Cell(30,10,utf8_decode($row['nivel']),1,1,'C');


}


$pdf->Output();



?>