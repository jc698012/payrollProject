<?php


$pdf = new FPDF();
$pdf->AddPage('L');
//$pdf->SetFont('Arial','B',16);

//foreach($header as $heading) {
//	foreach($heading as $column_heading)
//		$pdf->Cell(50,12,$column_heading,1);
//}
//foreach($employees as $row) {
//	$pdf->Ln();
//	foreach($row as $column)
//		$pdf->Cell(95,12,$column,1);
//}
$width_cell=array(30,30,30,40,40,40,50,10,10);
$pdf->SetFont('Arial','B',14);




//Background color of header//
$pdf->SetFillColor(193,229,252);


// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'First Name',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'Last Name',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Position',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Phone Number',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Hourly Wage',1,0,'C',true); 
$pdf->Cell($width_cell[5],10,'Payment Type',1,0,'C',true); 
$pdf->Cell($width_cell[6],10,'Payment Type',1,0,'C',true);
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///

/// end of records /// 
//var_dump($pdf);
//var_dump($employees);
$pdf->Output();
?>