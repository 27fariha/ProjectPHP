<?php
//include connection file 
include_once("pdfconnection.php");
include('pdf_mc_table.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Jewellery List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('product_id'=>'ID', 'product_name'=> 'Name', 'details'=> 'Details','price'=> 'Price',);
 
$result = mysqli_query($connString, "SELECT product_id,product_name,details, price  FROM products where product_type like '%dress%' order by rand()") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM products");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);



$pdf->Cell(40,12,'ProductID');
$pdf->Cell(40,12,'ProductName');
$pdf->Cell(40,12,'Details');
$pdf->Cell(40,12,'Price');

foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>