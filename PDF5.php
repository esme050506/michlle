<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM facturas";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,utf8_decode('N.factura'),1,0,'C',1);
$pdf->Cell(80,10,'fecha',1,0,'C',1);
$pdf->Cell(80,10,'N.Cliente',1,1,'C',1);


$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(30,10,$row['id_factura'],1,0,'C');
	$pdf->Cell(80,10,utf8_decode($row['fecha']),1,0,'C');
	$pdf->Cell(80,10,utf8_decode($row['id_cliente']),1,1,'C');


}


$pdf->Output();



?>