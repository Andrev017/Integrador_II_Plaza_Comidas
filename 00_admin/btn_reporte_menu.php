<!---------------------------------------REPORTES------------------------------------->
<?php
require '.././Reportes/fpdf.php';

//------------------------------------------------------------------------------
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Informe de la Tabla', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer() {
        // Pie de página
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}
// ---------------------------------------------------------------------------------- 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plaza_de_comidas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
//----------------------------------------------------------------------------------

ob_clean();
$pdf = new PDF();
$pdf->AddPage();
$pdf->Image('../img/logo_plaza.png', 10, 8, 33);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80);
$pdf->Cell(0, 10, 'Informe del Menú', 0, 1, 'C');
$pdf->Cell(80);
$pdf->Cell(0, 10, 'Fecha: ' . date('d-m-Y'), 0, 1, 'C');
$pdf->Ln(10);


$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, $row['id_menu'], 1);
        $pdf->Cell(40, 10, $row['precio_menu'], 1);
        $pdf->Cell(40, 10, $row['descripcion_menu'], 1);
        $pdf->Cell(40, 10, $row['stock_menu'], 1);
        $pdf->Ln();
    }

    $pdf->Output();
} else {
    echo "Error en la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
