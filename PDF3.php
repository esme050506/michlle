<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM productos";




$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,utf8_decode('N.productos'),1,0,'C',1);
$pdf->Cell(30,10,'descripcion',1,0,'C',1);
$pdf->Cell(40,10,'precio',1,0,'C',1);
$pdf->Cell(40,10,'id_categoria',1,0,'C',1);
$pdf->Cell(40,10,'id_proveedor',1,1,'C',1);


$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(30,10,$row['id_productos'],1,0,'C')
	$pdf->Cell(30,10,utf8_decode($row['descripcion']),1,0,'C');
	$pdf->Cell(40,10,utf8_decode($row['precio']),1,0,'C');
	$pdf->Cell(40,10,utf8_decode($row['id_categoria']),1,0,'C');
	$pdf->Cell(40,10,utf8_decode($row['id_proveedor']),1,1,'C');


}


z


?>