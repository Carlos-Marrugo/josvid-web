<?php
session_start();
require "./code128.php";

$pdf = new PDF_Code128('P','mm','Letter');
$pdf->SetMargins(17,17,17);
$pdf->AddPage();

// Logo de la empresa formato png
$pdf->Image('./img/logo.png',165,12,35,35,'PNG');

// Encabezado y datos de la empresa
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(32,100,210);
$pdf->Cell(150,10,iconv("UTF-8", "ISO-8859-1",strtoupper("Laviden Academy")),0,0,'L');
$pdf->Ln(9);

$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(39,39,51);
$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Teléfono: 3242076388"),0,0,'L');
$pdf->Ln(5);
$pdf->Cell(150,9,iconv("UTF-8", "ISO-8859-1","Email: elrprogramadortutoriales@gmail.com"),0,0,'L');
$pdf->Ln(10);

// Información de la orden
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,7,iconv("UTF-8", "ISO-8859-1","Fecha de emisión:"),0,0);
$pdf->SetTextColor(97,97,97);
$pdf->Cell(116,7,iconv("UTF-8", "ISO-8859-1",date("d/m/Y h:i A")),0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(39,39,51);
$pdf->Cell(35,7,iconv("UTF-8", "ISO-8859-1",strtoupper("Factura Nro.")),0,0,'C');
$pdf->Ln(7);

// Detalles del cliente
$pdf->SetFont('Arial','',10);
$pdf->Cell(12,7,iconv("UTF-8", "ISO-8859-1","CEO - CTO:"),0,0,'L');
$pdf->SetTextColor(97,97,97);
$pdf->Cell(134,7,iconv("UTF-8", "ISO-8859-1","Lauren Hernadez"),0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(97,97,97);
$pdf->Cell(35,7,iconv("UTF-8", "ISO-8859-1",strtoupper("1")),0,0,'C');
$pdf->Ln(10);


// Tabla de productos
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(23,83,201);
$pdf->SetDrawColor(23,83,201);
$pdf->SetTextColor(255,255,255);

// Ancho de las columnas
$col1_width = 110;
$col2_width = 50;

$pdf->Cell($col1_width,8,iconv("UTF-8", "ISO-8859-1","Descripción"),1,0,'C',true);
$pdf->Cell($col2_width,8,iconv("UTF-8", "ISO-8859-1","Precio"),1,0,'C',true);
$pdf->Ln(8);

// Total pagado
$total = 0;

// Detalles de la tabla obtenidos de los datos de la base de datos
$conn = new mysqli("localhost", "root", "", "test");
$sql = "SELECT `courseName`, `price` FROM `usercourses` WHERE `Id_user` = '" . $_SESSION['id'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sumar el precio actual al total
        $total += $row['price'];

        // Verificar si el texto es demasiado largo para caber en la celda
        if ($pdf->GetStringWidth($row['courseName']) > $col1_width) {
            // Reducir tamaño de fuente para ajustar el texto en la celda
            $pdf->SetFont('Arial','',8);
        } else {
            // Restaurar tamaño de fuente predeterminado
            $pdf->SetFont('Arial','',10);
        }

        $pdf->SetTextColor(39,39,51);
        $pdf->Cell($col1_width,7,iconv("UTF-8", "ISO-8859-1", $row['courseName']),'L',0,'C');
        $pdf->Cell($col2_width,7,iconv("UTF-8", "ISO-8859-1", $row['price']),'LR',0,'C');
        $pdf->Ln(7);
    }
} else {
    $pdf->Cell($col1_width + $col2_width,10,iconv("UTF-8", "ISO-8859-1","No hay productos para mostrar"),1,0,'C');
    $pdf->Ln(10);
}

$conn->close();

$pdf->SetTextColor(39,39,51);

// Mostrar el total pagado
$pdf->SetFont('Arial','B',10);
$pdf->Cell($col1_width,7,iconv("UTF-8", "ISO-8859-1","Total Pagado:"),'LTB',0,'R');
$pdf->Cell($col2_width,7,iconv("UTF-8", "ISO-8859-1",$total),'TRB',0,'C');
$pdf->Ln(7);


$pdf->Output("I","Factura_Nro_1.pdf",true);
?>
