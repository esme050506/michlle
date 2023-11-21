<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM categoria";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,10,utf8_decode('N.categoria'),1,0,'C',1);
$pdf->Cell(90,10,'descripcion',1,1,'C',1);
$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(100,10,$row['id_categoria'],1,0,'C');
	$pdf->Cell(90,10,utf8_decode($row['descripcion']),1,1,'C');

}


$pdf->Output();



?>