<?php
session_start();
require('recptpdf.php');
include ("connect.php");
class PDF extends FPDF
{
function Header()
{
//Logo
$this->Image('Assets/pdflogo.jpg',5,0,50,50);
//Arial bold 15
$this->SetFont('Arial','B',15);
//Move to the right
$this->Cell(80);
//Title
$this->Cell(-20,15,'Converge Logistics',0,0,'C');
$this->Cell(25,30,'Income Computation',0,0,'C');
//Line break
$this->Ln(20);
}
//Page footer
function Footer()
{
//Position at 1.5 cm from bottom
$this->SetY(-15);
//Arial italic 8
$this->SetFont('Arial','I',8);
//Page number
$this->Cell(0,10,'Page '.$this->PageNo().' Income ',0,0,'C');
}
function LoadData()
{
//$remID=$_SESSION['recptsession'];
$result = mysql_query("select avg(M.Fee) + avg(P.Amount),avg(M.Fee) + avg(P.Amount)*7,avg(M.Fee) + avg(P.Amount)*30,avg(M.Fee) + avg(P.Amount)*90,avg(M.Fee) + avg(P.Amount)*365 from tblmoney_remit M inner join tblpackage_delivery P 
	where M.RemitStatus='Pending' or M.RemitStatus='Delivered' and P.DeliveryStatus='Pending' or P.DeliveryStatus='Delivered'");

while($row=mysql_fetch_row($result))
{
$data[] = $row;
}
return $data;
}
//Colored table
function FancyTable($header,$data)
{
$result = mysql_query("select avg(M.Fee) + avg(P.Amount),avg(M.Fee) + avg(P.Amount)*7,avg(M.Fee) + avg(P.Amount)*30,avg(M.Fee) + avg(P.Amount)*90,avg(M.Fee) + avg(P.Amount)*365 from tblmoney_remit M inner join tblpackage_delivery P 
	where M.RemitStatus='Pending' or M.RemitStatus='Delivered' and P.DeliveryStatus='Pending' or P.DeliveryStatus='Delivered'");

while($row = mysql_fetch_array($result)){
$daily = $row['avg(M.Fee) + avg(P.Amount)'];
$weekly = $row['avg(M.Fee) + avg(P.Amount)*7'];
$monthly = $row['avg(M.Fee) + avg(P.Amount)*30'];
$quarterly = $row['avg(M.Fee) + avg(P.Amount)*90'];
$annualy = $row['avg(M.Fee) + avg(P.Amount)*365'];
}
//Colors, line width and bold font
$this->SetFillColor(66,155,244);
$this->SetTextColor(255);
//$this->SetDrawColor(128,0,0);
$this->SetLineWidth(.3);
$this->SetFont('','B');
$this->SetY(50);
$this->SetX(20);

//Header
$w=array(120);
for($i=0;$i<count($header);$i++)
$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
$this->Ln();
//Color and font restoration
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Data
$fill=false;
foreach($data as $row)
{
//$this->Cell($w[0],6,"",'LR',0,'C',$fill);
$this->Ln();
$this->Cell($w[0],6,"Daily Income : ".$daily);
$this->Ln();
$this->Cell($w[0],6,"Weekly Income : ".$weekly);
$this->Ln();
$this->Cell($w[0],6,"Monthly Income : ".$monthly);
$this->Ln();
$this->Cell($w[0],6,"Quarterly Income : ".$quarterly);
$this->Ln();
$this->Cell($w[0],6,"Annualy Income : ".$annualy);
$this->Ln();
$fill=!$fill;
}
//$this->Cell(array_sum($w),0,'','T');
}
}
$pdf=new PDF();
//Column titles
$header=array(' INCOME');
//Data loading
$data=$pdf->LoadData();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
$_SESSION['recptsession']=null;
?>