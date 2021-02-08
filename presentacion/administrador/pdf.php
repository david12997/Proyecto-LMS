<?php

session_start();

require_once 'fpdf/fpdf.php';



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../assets/img/logo-tutorias-final.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(50,10,'Tutorias Online',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Ln(10);

if($_GET['data']==="estudiante"){

    $contador=0;
    $pdf->Cell(0,10,utf8_decode('Estudiantes'),1,1);
}
if($_GET['data']==="maestro"){

    $contador=1;
    $pdf->Cell(0,10,utf8_decode('Maestros'),1,1);
}
if($_GET['data']==="administrador"){

    $contador=2;
    $pdf->Cell(0,10,utf8_decode('Administradores'),1,1);
}
$pdf->Ln(10);
for($i=0;$i<count($_SESSION['data-usuarios'][$contador]);$i++){


    $pdf->Cell(0,10,utf8_decode('Nombre : '.$_SESSION['data-usuarios'][$contador][$i]['nombre']),1,1);
    $pdf->Cell(0,10,utf8_decode('Correo : '.$_SESSION['data-usuarios'][$contador][$i]['email']),1,1);
    
    $pdf->Ln(15);
}

 
$pdf->Output();


?>