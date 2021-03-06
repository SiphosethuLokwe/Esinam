<?php

include ('models/DAL/connection.php');
include ('models/DAL/command.php');
include ('models/DAL/ArticleDataMapper.php');
// require ('fpdf17/fpdf.php');
require_once('tcpdf_6_2_13/tcpdf/tcpdf.php');

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

<?php 

$obj_pdf = new TCPDF('p',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
$obj_pdf->SetCreateColor(PDF_CREATOR);
$obj_pdff->SetTitle($title);
$obj_pdf->setHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->setFooterMargin(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(true,10);
$obj_pdf->SetAutoPageBreak(true,10);
$obj_pdf->SetFont('helvetica','',11);
$obj_pdf->AddPage();
$content ='';
$content= '<h4 align=center">'.$title.'</h4>
<br>
<div class ="container">

<img class="card-img-top img-size" src="data:image/jpeg;base64,'.base64_encode($row->image).'"; alt="Card image cap">


</div>






';


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