<?php
include 'MiPlantilla.php'; 

$conex=mysqli_connect("localhost","root","","alamacen4");

$consulta="SELECT * FROM comentarios";

$resultado= mysqli_query($conex,$consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(28,10,'No.comntario',1,0,'C',1);
$pdf->Cell(25,10,'No.cliente',1,0,'C',1);
$pdf->Cell(30,10,'fecha',1,0,'C',1);
$pdf->Cell(30,10,'hora',1,0,'C',1);
$pdf->Cell(50,10,'comentario',1,0,'C',1);
$pdf->Cell(25,10,'respuesta',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc())
 {
 	$pdf->Cell(28,10,$row['num_comentaro'],1,0,'C');
 	$pdf->Cell(25,10,utf8_decode($row['id_usuario']),1,0,'C');
	$pdf->Cell(30,10,utf8_decode($row['fecha']),1,0,'C');
	$pdf->Cell(30,10,utf8_decode($row['hora']),1,0,'C');
    $pdf->Cell(50,10,utf8_decode($row['texto']),1,0,'C');
	$pdf->Cell(25,10,utf8_decode($row['respuesta']),1,1,'C');
}


$pdf->Output();



?>