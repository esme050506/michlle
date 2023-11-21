<?php

include 'MiPlantilla.php'; 



$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$total=0;
$textypos = 5;

$pdf->setY(12);
$pdf->setX(10);


// Agregamos los datos de la empresa
$pdf->Cell(25,$textypos,"persona a cobrar:esmeralda michel torres espiridon");
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(10);
$pdf->Cell(5,$textypos,"DIRECCION:morelos N° 25");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(10);
$pdf->Cell(5,$textypos,"TELEFONO:5517112257");
$pdf->setY(40);$pdf->setX(10);
$pdf->Cell(5,$textypos,"EMAIL:esme@gmail.com");


// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(135);
$pdf->Cell(5,$textypos,"FACTURA #12345");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Fecha: 15/NOV/2023");
$pdf->setY(40);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Vencimiento: 25/ENE/2040");
$pdf->setY(45);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");
$pdf->setY(50);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");

$pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
/////////////////////////////
//// Array de Cabecera
$header = array("ID_Producto", "Descripcion","Cant.","Precio","Total");
//// Arrar de Productos
$products = array(
    array("1", "grande",4,4,0),
    array("2", "alato",2,217,0),
    array("3", "poco ",3,44,0),
    array("4", "mucho",1,125,0),
    array("5", "feo",8,38,0),
    array("6", "lindo",9,623,0),
);
    // Column widths
    $w = array(20, 95, 20, 25, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    foreach($products as $row)
    {
        $pdf->Cell($w[0],6,$row[0],1);
        $pdf->Cell($w[1],6,$row[1],1);
        $pdf->Cell($w[2],6,number_format($row[2]),'1',0,'R');
        $pdf->Cell($w[3],6,"$ ".number_format($row[3],2,".",","),'1',0,'R');
        $pdf->Cell($w[4],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');

        $pdf->Ln();
        $total+=$row[3]*$row[2];

    }
/////////////////////////////
//// Apartir de aqui esta la tabla con los subtotales y totales
$yposdinamic = 60 + (count($products)*10);

$pdf->setY($yposdinamic);
$pdf->setX(235);
    $pdf->Ln();
/////////////////////////////
$header = array("", "");

$data2 = array(
    array("Subtotal",$total),
    array("Descuento",100),
);
$data3 = array(

    array("Iva",16),
);
$data4=array(
array("Total",$total-100*1.16),
);
    // Column widths
    $w2 = array(40, 40);
    // Header

    $pdf->Ln();
    // Data
    foreach($data2 as $row)
    {
$pdf->setX(115);
        $pdf->Cell($w2[0],6,$row[0],1);

        $pdf->Cell($w2[1],6," $".number_format($row[1], 2, ".",","),'1',0,'R');


        $pdf->Ln();
    }
    foreach($data3 as $row)
    {
$pdf->setX(115);
        $pdf->Cell($w2[0],6,$row[0],1);

        $pdf->Cell($w2[1],6," %".number_format($row[1], 2, ".",","),'1',0,'R');


        $pdf->Ln();
    }
    foreach($data4 as $row);
    {
$pdf->setX(115);
        $pdf->Cell($w2[0],6,$row[0],1);

        $pdf->Cell($w2[1],6," $".number_format($row[1], 2, ".",","),'1',0,'R');


        $pdf->Ln();
    }
/////////////////////////////

$yposdinamic += (count($data2)*10);
$pdf->SetFont('Arial','B',10);    

$pdf->setY($yposdinamic);
$pdf->setX(10);
$pdf->Cell(5,$textypos,"TERMINOS Y CONDICIONES");
$pdf->SetFont('Arial','',10);    

$pdf->setY($yposdinamic+10);
$pdf->setX(10);
$pdf->Cell(5,$textypos,"El cliente se compromete a pagar la factura.");
$pdf->setY($yposdinamic+20);
$pdf->setX(10);
$pdf->Cell(5,$textypos,"patrocinado :3");





$pdf->output();
