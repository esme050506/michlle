<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM ventas";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10,utf8_decode('N.venta'),1,0,'C',1);
$pdf->Cell(60,10,'N.factura',1,0,'C',1);
$pdf->Cell(60,10,'N.producto',1,0,'C',1);
$pdf->Cell(35,10,'cantidad',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(20,10,$row['id_venta'],1,0,'C');
	$pdf->Cell(60,10,utf8_decode($row['id_factura']),1,0,'C');
	$pdf->Cell(60,10,utf8_decode($row['id_producto']),1,0,'C');
	$pdf->Cell(35,10,utf8_decode($row['cantidad']),1,1,'C');

}


$pdf->Output();



?>