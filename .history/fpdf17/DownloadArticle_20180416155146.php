<?php

include ('models/DAL/connection.php');
include ('models/DAL/command.php');
include ('models/DAL/ArticleDataMapper.php');
// require ('fpdf17/fpdf.php');
require_once('tcpdf/tcpdf.php');

$Conn = new Connection();
$Comm = new Command();
$article_datamapper = new ArticleDataMapper();
$result = $article_datamapper->GetArticles($Conn,$Comm);
 
foreach($result as $row)
{
    $title = $row->article_title;
    $description =$row->$description;
    $image = $row->image;

}




?>
<!-- <?php 

class PDF extends FPDF {

    function header(){
    $this->SetFont('Arial','B' ,15);
    $this->Cell(12);

    $this->image('assets/images/esinam.logo.PNG',10,10,10);
    $this->Cell(100,10,"Article Title",0,1);
    $this->Ln(5);
    $this->SetFont('Arial','8',11);
    $this->SetDrawColor(50,50,100);
    $this->SetFillColor(180,180,255);
    $this->Cell(40,5,'article_title',1,0,'true');
    $this->Cell(25,5,'description',1,0,'true');
    $this->Cell(60,5,'image',1,0,'true');




    }
function footer(){

    $this->SetY(-5);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'page',$this->PageNo()."/{pages}",0,0,'C');

    }

}


$pdf = new PDF('p','mm','A4');
$pdf->AliasNbPages('{pages}');
$pdf->AddPage();
// $pdf->image('watermark.png',10,10,189);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,10,'description',1,0);


?> -->