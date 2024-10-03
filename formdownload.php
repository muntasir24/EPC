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

$roll = $result1['roll'];
$reg = $result1['reg'];
$adate = $result1['adate'];
$batch = $result1['batch'];
$admission = $result1['admission'];
$class = $result1['class'];
$subj = $result1['subj'];
//___________________________

$sinst = $result2['sinst'];
$sroll = $result2['sroll'];
$sreg = $result2['sreg'];
$sboard = $result2['sboard'];
$sgroup = $result2['sgroup'];
$syear = $result2['syear'];
$sgpa = $result2['sgpa'];
$hinst = $result2['hinst'];
$hroll = $result2['hroll'];
$hreg = $result2['hreg'];
$hboard = $result2['hboard'];
$hgroup = $result2['hgroup'];
$hyear = $result2['hyear'];
$hgpa = $result2['hgpa'];
//_________________________________

$name = $result3['name'];
$dob = $result3['dob'];
$fname = $result3['fname'];
$mname = $result3['mname'];
$gender = $result3['gender'];
$bg = $result3['bg']; // Assuming 'bg' is for blood group
$address = $result3['address'];
$paddress = $result3['paddress'];
$sphone = $result3['sphone'];
$gphone = $result3['gphone'];



// echo $roll . "<br>" . $reg . "<br>" . $adate . "<br>" . $batch . "<br>" . $admission . "<br>" . $class . "<br>" . $subj;
// echo $sinst . "<br>" . $sroll . "<br>" . $sreg . "<br>" . $sboard . "<br>" . $sgroup . "<br>" . $syear . "<br>" . $sgpa . "<br>" . $hinst . "<br>" . $hroll . "<br>" . $hreg . "<br>" . $hboard . "<br>" . $hgroup . "<br>" . $hyear . "<br>" . $hgpa;
// echo $name . "<br>" . $dob . "<br>" . $fname . "<br>" . $mname . "<br>" . $gender . "<br>" . $bg . "<br>" . $address . "<br>" . $paddress . "<br>" . $sphone . "<br>" . $gphone;




include('./fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$boxWidth = 190;
$boxHeight = 1;
$pdf->SetFillColor(50, 50, 50); 
// Set the X and Y positions where you want to place the box
$x = 0; // Adjust X position (distance from left edge)
$y = 5; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell($boxWidth, $boxHeight, "", 0, 0, 'L', true);


//_____________________________________________________________
$pageWidth = $pdf->GetPageWidth();
// Define the width of your cell (35mm in this case)
$cellWidth = 35;
// Set the X position to start the cell from the right (subtract cell width from total page width)
$pdf->SetX($pageWidth - $cellWidth);
$pdf->SetFont("Arial", "B", 10);
// Set background color (e.g., dark grey) for the cell
$pdf->SetFillColor(50, 50, 50); // RGB values for a light dark background
// Set text color to white
$pdf->SetTextColor(255, 255, 255); // RGB values for white
$pdf->Cell(35, 10, "ADMISSION FORM", 1, 1, "L", true);

//_____________________________________________________________

$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);

// Define the width and height of the "EPC" box
$boxWidth = 50;
$boxHeight = 15;

// Set the X and Y positions where you want to place the box
$x = 85; // Adjust X position (distance from left edge)
$y = 15; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFont("Helvetica", "B", 45);
// Create the sky blue box with "EPC" text
$pdf->Cell($boxWidth, $boxHeight, "EPC", 0, 0, 'L', true);
//___________________________________________________________________
$boxWidth = 15;
$boxHeight = 15;
$pdf->SetFillColor(50, 50, 50);
// Set the X and Y positions where you want to place the box
$x = 130; // Adjust X position (distance from left edge)
$y = 15;
$pdf->SetXY($x, $y);
$pdf->Cell($boxWidth, $boxHeight, "", 0, 0, 'L', true);


//_____________________________________________

$x = 87; // Adjust X position (distance from left edge)
$y = 34; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Success With A Difference", 0, 0, 'L', false);
//_____________________________________________

$x = 112; // Adjust X position (distance from left edge)
$y = 38; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "I", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Founder : Asim Roy", 0, 1, 'L', false);
//_____________________________________________

$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 85; // Adjust X position (distance from left edge)
$y = 40; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(22, 5, "Directed By: ", 0, 0, 'L', true);

//_______________________________________________

 // RGB values for sky blue

// Set text color to white for "EPC"

$x = 85; // Adjust X position (distance from left edge)
$y = 45; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(46, 10, "ANIK | NASIM | NILOY", 1, 0, 'L', false);

//__________________________________________________________________


$x = 157; // Adjust X position (distance from left edge)
$y = 20; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(128, 128, 128);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(50, 50, "PHOTO", 1, 0, 'C', false);
//_________________________________________________________________________

$x = 0; // Adjust X position (distance from left edge)
$y = 60; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(25, 5, "For office ", 1, 0, 'L', true);

//_________________________________________________
$pdf->SetFillColor(0, 0, 0); 
// Set the X and Y positions where you want to place the box
$x = 25; // Adjust X position (distance from left edge)
$y = 60; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(132, 1, "", 0, 0, 'L', true);

//_________________________________________________
$pdf->SetFillColor(0, 0, 0); 
// Set the X and Y positions where you want to place the box
$x = 1; // Adjust X position (distance from left edge)
$y = 65; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(1, 35, "", 0, 0, 'L', true);
//_________________________________________________
$pdf->SetFillColor(0, 0, 0); 
// Set the X and Y positions where you want to place the box
$x = 1; // Adjust X position (distance from left edge)
$y = 100; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(205, 1, "", 0, 0, 'L', true);
//_____________________________________________

$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 0; // Adjust X position (distance from left edge)
$y = 103; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 5, "Necessary Information: ", 0, 0, 'R', true);

//_______________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 0; // Adjust X position (distance from left edge)
$y = 195; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 5, "Academic Information: ", 0, 0, 'R', true);

//_______________________________________________



//_____________________________________________

$x =8; // Adjust X position (distance from left edge)
$y = 255; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "I", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "I'm...............................................Promise that i will compulsorily obey all the education plans set by the authorities. ", 0, 0, 'L', false);
//_____________________________________________


//_____________________________________________

$x = 10; // Adjust X position (distance from left edge)
$y = 276; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Student's Signature", 0, 0, 'L', false);
//_____________________________________________
$x = 80; // Adjust X position (distance from left edge)
$y = 276; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Guardian's Signature", 0, 0, 'L', false);
//_____________________________________________
$x = 150; // Adjust X position (distance from left edge)
$y = 276; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, " Signature of Authority", 0, 0, 'L', false);
//_____________________________________________

$x = 5; // Adjust X position (distance from left edge)
$y = 272; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "_______________________", 0, 0, 'L', false);
//_____________________________________________
$x = 72; // Adjust X position (distance from left edge)
$y = 272; 
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "___________________________", 0, 0, 'L', false);
//_____________________________________________
$x = 143; // Adjust X position (distance from left edge)
$y = 272; 
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 9);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "___________________________", 0, 0, 'L', false);
//_____________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 5; // Adjust X position (distance from left edge)
$y = 70; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 5, "Roll No : ", 0, 0, 'L', true);

//_______________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 65; // Adjust X position (distance from left edge)
$y = 70; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 5, "Reg. No : ", 0, 0, 'L', true);

//_______________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 5; // Adjust X position (distance from left edge)
$y = 82; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 5, "Batch : ", 0, 0, 'L', true);

//_______________________________________________

$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 65; // Adjust X position (distance from left edge)
$y = 82; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(22, 5, "Adm. Date : ", 0, 0, 'L', true);

//_______________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 5; // Adjust X position (distance from left edge)
$y = 92; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(82, 5, "UNIVERSITY ADMISSION PROGRAME UNIT : ", 0, 0, 'L', true);

//____roll___________________________________________

$x = 24; // Adjust X position (distance from left edge)
$y = 68; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(38, 8, $roll, 1, 0, 'c', false);

//____reg___________________________________________

$x = 84; // Adjust X position (distance from left edge)
$y = 68; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(65, 8, $reg, 1, 0, 'c', false);

//_____batch__________________________________________

$x = 24; // Adjust X position (distance from left edge)
$y = 80; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(38, 8, $batch, 1, 0, 'c', false);

//_________adm date______________________________________

$x = 88; // Adjust X position (distance from left edge)
$y = 80; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(61, 8, $adate, 1, 0, 'c', false);

//_______unit________________________________________
$x = 90; // Adjust X position (distance from left edge)
$y = 90; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(8, 8, $admission, 1, 0, 'C', false);

//_______________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 115; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Name of the Student  :", 0, 0, 'L', false);
//_____________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 125; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Date of Birth                :", 0, 0, 'L', false);
//_____________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 135; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Father's Name             :", 0, 0, 'L', false);
//_____________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 145; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Mother's Name            :", 0, 0, 'L', false);
//_____________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 155; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Present Address         :", 0, 0, 'L', false);
//_____________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 165; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Permenent Address    :", 0, 0, 'L', false);
//_____________________________________________
$x = 2; // Adjust X position (distance from left edge)
$y = 175; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Student's M. Number   :", 0, 0, 'L', false);
//_____________________________________________
$x = 105; // Adjust X position (distance from left edge)
$y = 175; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Guardian's M. Number   :", 0, 0, 'L', false);
//_____________________________________________
$x = 2; // Adjust X position (distance from left edge)
$y = 185; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Gender                          :", 0, 0, 'L', false);
//_____________________________________________

$x = 150; // Adjust X position (distance from left edge)
$y = 125; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(0, 0, "Blood Group :", 0, 0, 'L', false);

//_______________Name of the Student______________________________

$x = 46; // Adjust X position (distance from left edge)
$y = 111; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 8, $name, 1, 0, 'L', false);
//______________DOB______________________________
$x = 46; // Adjust X position (distance from left edge)
$y = 121; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(100, 8, $dob, 1, 0, 'L', false);
//__________blood group__________________________________
$x = 180; // Adjust X position (distance from left edge)
$y = 121; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(20, 8, $bg, 1, 0, 'L', false);
//________________Father name_____________________________

$x = 46; // Adjust X position (distance from left edge)
$y = 131; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 8, $fname, 1, 0, 'L', false);
//__________mother name__________________________________

$x = 46; // Adjust X position (distance from left edge)
$y = 141; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 8, $mname , 1, 0, 'L', false);
//__________present address__________________________________
$x = 46; // Adjust X position (distance from left edge)
$y = 151; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 8, $address , 1, 0, 'L', false);
//__________permenenent address__________________________________
$x = 46; // Adjust X position (distance from left edge)
$y = 161; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(150, 8, $paddress, 1, 0, 'L', false);
//__________student phone__________________________________

$x = 47; // Adjust X position (distance from left edge)
$y = 171; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(45, 8, $sphone, 1, 0, 'L', false);
//__________gaurdian mobile__________________________________

$x = 152; // Adjust X position (distance from left edge)
$y = 171; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(45, 8, $gphone, 1, 0, 'L', false);
//__________gender__________________________________
$x = 47; // Adjust X position (distance from left edge)
$y = 181; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(45, 8, $gender, 1, 0, 'L', false);
//____________________________________________
$x = 2; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(13, 8, "Exam", 1, 0, 'L', true);

//_________________________________________________
$x = 16; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(47, 8, "Name Of Institution ", 1, 0, 'C', true);

//_________________________________________________
$x = 64; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(17, 8, "Roll No. ", 1, 0, 'C', true);

//_________________________________________________
$x = 82; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 8, "Reg No. ", 1, 0, 'C', true);

//_________________________________________________
$x = 113; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 8, "Board ", 1, 0, 'C', true);

//_________________________________________________
$x = 132; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 8, "Group ", 1, 0, 'C', true);

//_________________________________________________
$x = 151; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 8, "Passing Year ", 1, 0, 'C', true);

//_________________________________________________
$x = 182; // Adjust X position (distance from left edge)
$y = 202; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(25, 8, "GPA ", 1, 0, 'C', true);

//_________________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(13, 12, "SSC ", 1, 0, 'C', false);

//_________________________________________________

$x = 2; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(13, 12, "HSC ", 1, 0, 'C', false);

//_______________ssc instituion_________________________________
$x = 16; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 7);
// Create the sky blue box with "EPC" text
$pdf->Cell(47, 12, $sinst, 1, 0, 'C', false);



//_______________ssc roll_________________________________
$x = 64; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(17, 12, $sroll, 1, 0, 'C', false);

//_______________ssc reg_________________________________
$x = 82; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 12, $sreg, 1, 0, 'C', false);

//_______________ssc board_________________________________
$x = 113; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 8);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 12, $sboard , 1, 0, 'C', false);


//_______________ssc group_________________________________
$x = 132; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 12, $sgroup, 1, 0, 'C', false);

//_______________ssc passing year_________________________________
$x = 151; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 12, $syear, 1, 0, 'C', false);

//_______________GPA_________________________________
$x = 182; // Adjust X position (distance from left edge)
$y = 210; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(25, 12, $sgpa , 1, 0, 'C', false);

//_______________hsc instituion_________________________________
$x = 16; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B",7);
// Create the sky blue box with "EPC" text
$pdf->Cell(47, 12, $hinst, 1, 0, 'C', false);


//_______________hsc roll_________________________________
$x = 64; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(17, 12, $hroll, 1, 0, 'C', false);



//_______________hsc reg_________________________________
$x = 82; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 11);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 12, $hreg, 1, 0, 'C', false);


//_______________hsc board_________________________________
$x = 113; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 8);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 12, $hboard, 1, 0, 'C', false);


//_______________hsc group_________________________________
$x = 132; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(18, 12, $hgroup, 1, 0, 'C', false);

//_______________hsc passing year_________________________________
$x = 151; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(30, 12, $hyear, 1, 0, 'C', false);

//_______________ hsc GPA_________________________________
$x = 182; // Adjust X position (distance from left edge)
$y = 222; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetTextColor(0,0, 0);
$pdf->SetFont("Helvetica", "B", 12);
// Create the sky blue box with "EPC" text
$pdf->Cell(25, 12, $hgpa , 1, 0, 'C', false);

//________________________________________________________
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);

// Set text color to white for "EPC"

$x = 171; // Adjust X position (distance from left edge)
$y = 73; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);

$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(20, 5, "Academic : ", 0, 0, 'L', true);

//_______________________________________________

$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 157; // Adjust X position (distance from left edge)
$y = 83; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(20, 5, "Class: ", 0, 0, 'L', true);

//_______________________________________________
$pdf->SetFillColor(135, 206, 235); // RGB values for sky blue

// Set text color to white for "EPC"
$pdf->SetTextColor(255, 255, 255);
$x = 157; // Adjust X position (distance from left edge)
$y = 93; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(20, 5, "Subject: ", 0, 0, 'L', true);

//_______________________________________________


//__________class_____________________________________


$x = 178; // Adjust X position (distance from left edge)
$y = 80; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(28, 10, $class, 1, 0, 'L', false);

//________________subject_______________________________

$x = 178; // Adjust X position (distance from left edge)
$y = 90; // Adjust Y position (distance from top edge)

// Set the X and Y position
$pdf->SetXY($x, $y);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Helvetica", "B", 10);
// Create the sky blue box with "EPC" text
$pdf->Cell(28, 10, $subj, 1, 0, 'L', false);

//_______________________________________________



$pdf->Image('epc.jpg', 10, 18, 50, 30);

$boxWidth = 20;
$boxHeight = 13;
$pdf->SetFillColor(128, 128, 128);
// Set the X and Y positions where you want to place the box
$x = 25; // Adjust X position (distance from left edge)
$y = 5;
$pdf->SetXY($x, $y);
$pdf->Cell($boxWidth, $boxHeight, "", 0, 0, 'L', true);


$boxWidth = 20;
$boxHeight = 13;
$pdf->SetFillColor(128, 128, 128);
// Set the X and Y positions where you want to place the box
$x = 25; // Adjust X position (distance from left edge)
$y = 48;
$pdf->SetXY($x, $y);
$pdf->Cell($boxWidth, $boxHeight, "", 0, 0, 'L', true);





$pdf->Output($name . '.pdf', 'I');

?>






?>