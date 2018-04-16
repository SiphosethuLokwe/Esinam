<?php

include ('models/DAL/connection.php');
include ('models/DAL/command.php');
include ('models/DAL/ArticleDataMapper.php');
require ('fpdf17/fpdf.php');



// $con=mysqli_connection('localhost','root','');
// mysqli_select_db($con,'esinam');


?>
<?php 

class PDF extends FPDF {

    function header(){
    $this->SetFont('Arial','B' ,15);
    $this->Cell(12);

    $this->image('assets/images/esinam.logo.PNG',10,10,10);
    $this->Cell(100,10,"Article Title",0,1);
    $this->Ln(5);
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


?>