<?php
require('fpdf.php');
include ("connect.php");

	class PDF extends FPDF
	{
		function Header()
{
		//Logo
		$this->Image('Assets/pdflogo.jpg',10,-10,60,60);
		//Arial bold 15
		$this->SetFont('Arial','B',15);
		//Move to the right
		$this->Cell(80);
		//Title
		$this->Cell(250,10,'Converge Logistics',0,0,'C');
		$this->Ln(10);
		$this->Cell(450,10,'Pending Packages',0,0,'C');
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
		$this->Cell(0,10,'Page '.$this->PageNo().' '.' Pending Packages',0,0,'C');
	}
	
	
		function LoadData()
		{
			$result=mysql_query("SELECT ID,TrackNo,Consignor,ConsignorNo,ConsignorCity,ConsignorProvince,ConsignorEmail,Consignee,ConsigneeNo,ConsigneeCity,ConsigneeProvince,ConsigneeEmail,Size,Amount,DeclaredValue,Insurance,DateDelivered,DateReceived,NotifyToday,NotifyTmr,Status,DeliveryStatus,Branch from tblpackage_delivery where DeliveryStatus = 'Pending'");
			while($row=mysql_fetch_row($result)) 
			{ 
				$data[] = $row;
			}
			return $data;
		}
	
		//Colored table
		function FancyTable($header,$data)
		{
			//Colors, line width and bold font
			$this->SetFillColor(66,155,244);
			$this->SetTextColor(255);
			$this->SetDrawColor(128,128,128);
			$this->SetLineWidth(.3);
			$this->SetFont('','B');
			//Header
			//$w=array(10,40,50,30);
			$w=array(10,35,35,35,20,25,73,30,35,25,25,73,30,25,35,25,35,35,30,30,25,40,25);
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
				$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
				$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
				$this->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
				$this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
				$this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
				$this->Cell($w[5],6,$row[5],'LR',0,'L',$fill);
				$this->Cell($w[6],6,$row[6],'LR',0,'L',$fill);
				$this->Cell($w[7],6,$row[7],'LR',0,'L',$fill);
				$this->Cell($w[8],6,$row[8],'LR',0,'L',$fill);
				$this->Cell($w[9],6,$row[9],'LR',0,'L',$fill);
				$this->Cell($w[10],6,$row[10],'LR',0,'L',$fill);
				$this->Cell($w[11],6,$row[11],'LR',0,'L',$fill);
				$this->Cell($w[12],6,$row[12],'LR',0,'L',$fill);
				$this->Cell($w[13],6,$row[13],'LR',0,'L',$fill);
				$this->Cell($w[14],6,$row[14],'LR',0,'L',$fill);
				$this->Cell($w[15],6,$row[15],'LR',0,'L',$fill);
				$this->Cell($w[16],6,$row[16],'LR',0,'L',$fill);
				$this->Cell($w[17],6,$row[17],'LR',0,'L',$fill);
				$this->Cell($w[18],6,$row[18],'LR',0,'L',$fill);
				$this->Cell($w[19],6,$row[19],'LR',0,'L',$fill);
				$this->Cell($w[20],6,$row[20],'LR',0,'L',$fill);
				$this->Cell($w[21],6,$row[21],'LR',0,'L',$fill);
				$this->Cell($w[22],6,$row[22],'LR',0,'L',$fill);
				$this->Ln();
				$fill=!$fill;
			}
			$this->Cell(array_sum($w),0,'','T');
		}				
	}
	

$pdf=new PDF();
//Column titles
$header=array('ID','TrackNo','Consignor','ConsignorNo','City','Province','Email','Consignee','ConsigneeNo','City','Province','Email','Size','Amount','DeclaredValue','Insurance','DateDelivered','DateReceived','NotifyToday','NotifyTmr','Status','DeliveryStatus','Branch');
//Data loading
$data=$pdf->LoadData();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>