<?php
/*---------------------------------------------------------------
* Aplicatiu Urgell Control  Fitxer: peticionari_imprimir.php
* Autor: Olga Schlüter   Data: Juliol 2005
* Descripció:
----------------------------------------------------------------*/
//per què no falli la generació del document pdf quan hi ha variables de sessió. Problema que apareix amb el Internet Explorer.
session_cache_limiter('private');

// Iniciem o recuperem la sessió
session_start() ;

include_once("adodb/adodb.inc.php");

// Fonts
define('FPDF_FONTPATH', 'font');

// Classe pdf
require('../model/BussinessLayer/PDFMCTable.php');

  function __autoload($nombre_clase) {
      include '../model/BussinessLayer/class_'.$nombre_clase.'.php';
  }

$empresa = unserialize($_SESSION['empresa']);
$projecte = $empresa->getProjecte(); 

// Estenem les possibilitats de la classe original (fpdf) en una de nova
class PDFTableMC extends PDF_MC_Table
{

function Header(){
	$this->SetTextColor(0,64,0);
	$this->SetLineWidth(0.25);
	$this->Rect(10,10,190, 15);
        $this-> SetY(15);
        $this-> SetX(15);
	$this->SetFont('Arial','B',16);
	$this->Cell(110,5,'Gestió de Projectes',0,0,'L');
	$this->SetFont('Arial','',10);
	$this->Cell(75,5,'Data i hora: '.date("d/m/Y G:i"),0,0,'R');
$this->Ln(15);
$this->SetFont('Arial','B',14);
$this->Cell(0,0,'Fitxa de Projectes');
$this->Ln(10);
}	

function Footer() {
        //Go to 1.5 cm from bottom
        $this->SetY(-15);
        //Select Arial italic 8
        $this->SetFont('Arial','I',8);
        //Print centered page number
        $this->Cell(0,10,'Pàgina '.$this->PageNo().'/{nb}',0,0,'R');
    }


} // Fi d'extensió de classe    
    
    
////////////////////////////////////////////////////////
// Creació del fitxer pdf
////////////////////////////////////////////////////////
$pdf=new PDFTableMC(); // creem el pdf
$pdf->AliasNbPages();
$pdf->Open();
$pdf->AddPage();
$pdf->SetTitle('FitxaP_'.$projecte[0]->getCodiProjecte());
$pdf->SetMargins(10,5,5);
$pdf->SetDisplayMode(93);
$pdf->Ln(5);

// Grup 1
  $text= 'Dades Projecte 1';
  $pdf->SetFont('Arial','',11);
  $pdf->SetTextColor(255,255,255);
  $pdf->SetFillColor(192,192,192);
  $pdf->Cell(190, 5, $text, 0, 1, 'L', '1');
  $pdf->Ln(3);
  $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial','',11);
  $pdf->SetWidths(array(60,120));            
  $pdf->SetAligns(array('L', 'L'));
  $pdf->Row(array('ID Projecte:', $projecte[0]->getCodiProjecte()));
  $pdf->Ln(2);	
  $pdf->Row(array('ID Entorn:', $projecte[0]->getEntorn()));	
  $pdf->Ln(2);
  $pdf->Row(array('Descripcio Llarga:', $projecte[0]->getDescripcioLlarga()));	
  $pdf->Ln(2);
  $pdf->Row(array('Descripcio Curta:', $projecte[0]->getDescripcioCurta()));	
  $pdf->Ln(2);          	  

$pdf->Ln(10);
  
$pdf->Output();

?>

