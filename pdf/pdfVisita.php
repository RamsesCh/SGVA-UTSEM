<?php

	require 'conexion.php';
    require 'fpdf/fpdf.php'; 


    $idVisita = $_GET['idVisita'];

    $fecha_actual = date('D-M-Y');
	
	$query = "SELECT * FROM visitas V INNER JOIN actividades A ON V.idActividad = A.idActividad WHERE idVisita = '$idVisita'";
	$resultado = $mysqli->query($query);
	
   $pdf = new FPDF();

    class PDF extends FPDF
    {
        function Header()
        {
            $this->Image('images/utsem.png', 10, 5, 25 );
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

	$pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
while($row = $resultado->fetch_assoc())
    {
    
    $imagen="../".$row['imagenes'];
    $imagen1="../".$row['imagenesTres'];
    $imagen2="../".$row['imagenesDos'];
    $pdf->Cell(150,6,utf8_decode('MES AL QUE CORRESPONDE EL INFORME'),1,0,'R');
    $pdf->Cell(40,6,utf8_decode($row['fechaCreacion']),1,1,'C');
    $pdf->Cell(50,6,utf8_decode('Actividad o visita:'),1,0,'R');
    $pdf->Cell(140,6,utf8_decode($row['nombreActividad']),1,1,'C');
    $pdf->Cell(50,6,utf8_decode('Área responsable:'),1,0,'R');
    $pdf->Cell(140,6,utf8_decode($row['areaResponsable']),1,1,'C');
    $pdf->Cell(50,5,utf8_decode('Objetivo de la actividad o visita:'),1,0,'R');
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(140,5,utf8_decode($row['objetivoVisita']),1,1,'C');
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(75,6,utf8_decode('Fecha en la que se llevó a cabo la actividad o visita:'),1,0,'R');
    $pdf->Cell(115,6,utf8_decode($row['fechaVisita']),1,1,'C');
    $pdf->Cell(190,10,utf8_decode('EVIDENCIA FOTOGRÁFICA'),1,1,'C',1);
    $pdf->Cell(63.3,40, $pdf->Image($imagen, $pdf->GetX()+2, $pdf->GetY()+5, 60), 1, 0, 'C', false);
    $pdf->Cell(63.3,40, $pdf->Image($imagen1, $pdf->GetX()+2, $pdf->GetY()+5, 60), 1, 0, 'C', false );
    $pdf->Cell(63.3,40, $pdf->Image($imagen2, $pdf->GetX()+2, $pdf->GetY()+5, 60), 1, 1, 'C', false );
    // $pdf->MultiCell(190,40, $pdf->Image($imagen, $pdf->GetX()+40, $pdf->GetY()+3, 100) ,0,"C");
    $pdf->Cell(190,6,utf8_decode('VISITA ACADÉMICA'),1,1,'C',1);
    $pdf->Cell(47.5,10,utf8_decode('Lugar'),1,0,'C');
    $pdf->Cell(142.5,10,utf8_decode($row['lugar']),1,1,'C');
    $pdf->Cell(47.5,10,utf8_decode('Cuatrimestre, grupo y Carrera:'),1,0,'C');
    $pdf->Cell(142.5,10,utf8_decode($row['cuatrimestre'].' '.$row['grupo'].' '.$row['carrera']),1,1,'C');
    $pdf->Cell(47.5,10,utf8_decode('Materia(s)'),1,0,'C');
    $pdf->Cell(142.5,10,utf8_decode($row['Materia']),1,1,'C');
    $pdf->Cell(47.5,10,utf8_decode('Docente a cargo:'),1,0,'C');
    $pdf->Cell(142.5,10,utf8_decode($row['docenteAcargo']),1,1,'C');
    $pdf->Cell(190,6,utf8_decode('DESCRIPCIÓN DE ACTIVIDADES'),1,1,'C',1);
    $pdf->SetFillColor(255,255,255);
    $pdf->Cell(190,5,utf8_decode($row['descripcionActividad']),1,1,'C');
    $pdf->Cell(95,5,utf8_decode($row['docenteAcargo']),1,0,'C');
    $pdf->Cell(95,5,utf8_decode($row['areaResponsable']),1,1,'C');
    $pdf->Line(10,200, 100,200);
    $pdf->Cell(95,5,utf8_decode('Nombre y Firma de la persona responsable de la actividad'),1,0,'C');
    $pdf->Cell(95,5,utf8_decode('Nombre y Firma del Jefe Inmediato'),1,1,'C');
	

	//$pdf->SetFont('Arial','',10);
	
		// $pdf->Cell(70,6,utf8_decode($row['estado']),1,0,'C');
		// $pdf->Cell(20,6,$row['id_municipio'],1,0,'C');
		// $pdf->Cell(70,6,utf8_decode($row['municipio']),1,1,'C');
	}
	$pdf->Output();
?>