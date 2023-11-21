<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM clientes";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10,utf8_decode('N.clientes'),1,0,'C',1);
$pdf->Cell(60,10,'nombre',1,0,'C',1);
$pdf->Cell(60,10,'direccion',1,0,'C',1);
$pdf->Cell(35,10,'telefono',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(20,10,$row['id_cliente'],1,0,'C');
	$pdf->Cell(60,10,utf8_decode($row['nombre']),1,0,'C');
	$pdf->Cell(60,10,utf8_decode($row['direccion']),1,0,'C');
	$pdf->Cell(35,10,utf8_decode($row['telefono']),1,1,'C');

}


$pdf->Output();



?>