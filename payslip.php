<?php include("connection.php");

$reg = $_POST['id'];
$query1 = "SELECT * FROM office WHERE reg = '$reg'";
$query2 = "SELECT * FROM student_academic_info WHERE reg = '$reg'";
$query3 = "SELECT * FROM student_info WHERE reg = '$reg'";

$data1 = mysqli_query($conn, $query1);
$data2 = mysqli_query($conn, $query2);
$data3 = mysqli_query($conn, $query3);

$result1 = mysqli_fetch_assoc($data1);
$result2 = mysqli_fetch_assoc($data2);
$result3 = mysqli_fetch_assoc($data3);

$roll=$result1['roll'];
$sgroup = $result2['sgroup'];
$name = $result3['name'];
echo $roll;
echo $sgroup;
echo $name;

// require('fpdf/fpdf.php');

// // Create a new PDF document
// $pdf = new FPDF();
// $pdf->AddPage();

// // Add a header
// $pdf->SetFont('Arial', 'B', 12);
// $pdf->Cell(0, 10, 'Student Information', 0, 1, 'C');

// // Add the extracted data
// $pdf->SetFont('Arial', '', 10);
// $pdf->Cell(40, 10, 'Roll:', 0, 0);
// $pdf->Cell(0, 10, $roll, 0, 1);
// $pdf->Cell(40, 10, 'Sgroup:', 0, 0);
// $pdf->Cell(0, 10, $sgroup, 0, 1);
// $pdf->Cell(40, 10, 'Name:', 0, 0);
// $pdf->Cell(0, 10, $name, 0, 1);

// // Output the PDF
// $pdf->Output('student_info.pdf', 'D'); // 'D' for download

?>