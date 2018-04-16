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

<!DOCTYPE HTML>
<html>
    <title></title>

    <header>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Newpost</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/v.js"></script>

    <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="icon" href="assets/images/esinam.logo.png" type="image/x-icon" sizes="56x56" />
    <!--font-Google-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800" rel="stylesheet">
    <!-- Font-awesome css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Magnific css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--readmore jquery-->
    <script src="/node_modules/readmore-js/readmore.min.js"></script>

    <script src="js/validation.js"></script>

    <script src="js/ValidateDelete.js"></script>



    </header>
    <body>



    </body>




</html>

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
$content = fatch_data();
$obj_pdf->Output('file.pdf','I');
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