<?php
//include pdf_mc_table.php, not fpdf17/fpdf.php
include('pdf_mc_table.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'editing_ezyclick');

//make new object
$pdf = new PDF_MC_Table();


//add page, set font
$pdf->AddPage();

$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,15);
$pdf->SetDrawColor(198, 49, 136);

//$pdf->SetFont('Arial','',14);
//set width for each column (6 columns)
//$pdf->SetWidths(Array(25,40,40,30,20,40));

//set alignment
//$pdf->SetAligns(Array('','R','C','','',''));

//set line height. This is the height of each lines, not rows.


//load json data
//$json = file_get_contents('generated.json');
//$data = json_decode($json,true);
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(25,5,"name",1,0);
//$pdf->Cell(40,5,"name",1,0);

//Headings and logo
$pdf->Image('cos.png',140,1,30);
$pdf->SetFont('Arial','',10);
$pdf->Cell(80,10,'Cosmetics List',1,0,'C');
$pdf->Ln(20);
$pdf->Cell(10,5,"P_ID",1,0);
$pdf->Cell(82,5,"P_Name",1,0);
$pdf->Cell(10,5,"Price",1,0);
$pdf->Cell(90,5,"Details",1,0);
$pdf->Ln();




$query=mysqli_query($con,"select product_id, product_name, details, price from products where product_type like '%cosmetic%'");
while($data=mysqli_fetch_array($query)){


   // $pdf->Cell(6,5,$data['product_id'],'LR',0);
  //  $pdf->Cell(15,5,$data['price'],'LR',0);

//foreach($data as $item){
    //write data using Row() method containing array of values.
  //  $pdf->Row(Array(
     //   $item['product_id'],
    //   $item['price'],
        //$item['name'],
        //$item['email'],
        //$item['address'],
        //$item['company'],
   // ));
  
//}
    if($pdf->GetStringWidth($data['details']) > 10){

       $pdf->SetFont('Arial','',7);
       $pdf->Cell(10,5,$data['product_id'],'LR',0);
        $pdf->SetFont('Arial','',9);

        $pdf->SetFont('Arial','',7);
       $pdf->Cell(82,5,$data['product_name'],'LR',0);
        $pdf->SetFont('Arial','',9);

        $pdf->SetFont('Arial','',7);
       $pdf->Cell(10,5,$data['price'],'LR',0);
        $pdf->SetFont('Arial','',9);

   }else{
        $pdf->Cell(10,5,$data['price'],'LR',0);
    }  
  $pdf->Cell(90,5,$data['details'],'LR',1);
}
//add table heading using standard cells
//set font to bold
//$pdf->SetFont('Arial','B',14);
//$pdf->Cell(25,5,"name",1,0);
//$pdf->Cell(40,5,"name",1,0);
//$pdf->Cell(30,5,"email",1,0);
//$pdf->Cell(20,5,"address",1,0);
//$pdf->Cell(40,5,"company",1,0);

//$pdf->Ln();

//reset font
//$pdf->SetFont('Arial','',14);
//loop the data
//foreach($data as $item){
    //write data using Row() method containing array of values.
  //  $pdf->Row(Array(
    //    $item['product_id'],
    //    $item['price'],
        //$item['name'],
        //$item['email'],
        //$item['address'],
        //$item['company'],
   // ));
  
//}

//output the pdf
$pdf->Output();