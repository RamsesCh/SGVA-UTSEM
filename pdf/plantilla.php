<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/utsem.png', 10, 5, 25 );
			$this->Image('../plantilla/logo-blanco-lineal1.png', 150, 10, 60 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(140,30,utf8_decode('Universidad Tecnológica del Sur de Estado de Morelos'),0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>

<!--  $pdf->Cell(63.3,40,'<img class="img-thumbnail rounded" src="sgvaprueba/SGVA-UTSEM/imagenesVisitas/<?php // $row[imgenes];?>" width="50" alt="" srcset=""> ',1,1,'C');
    $pdf->Image($row['imagenesDos'],60,30,90,0,'PNG'); -->