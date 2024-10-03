<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to EPC</title>
    <style>
        /* Centering content using Flexbox */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light background color */
        }

        h2 {
            font-size: 2rem;
            color: #333; /* Text color */
            text-align: center;
            animation: fadeIn 2s ease-in-out; /* Apply the animation */
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Shadow effect */
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.5rem;
            color: #444; /* Text color for h3 */
            text-align: center;
            animation: fadeIn 3s ease-in-out; /* Delayed fade-in */
        }

        h3 a {
            color: #007bff; /* Link color */
            text-decoration: none; /* Remove underline */
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease; /* Smooth hover effect */
        }

        h3 a:hover {
            color: #0056b3; /* Darker color on hover */
            border-bottom: 2px solid #0056b3; /* Add bottom border on hover */
        }

        /* Animation for fade-in effect */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <h2>WELCOME TO EPC, FOR ADDING STUDENT GO BACK TO THE <a href="http://localhost/EPC/form.php" style="color: #1a73e8; text-decoration: none;">HOME PAGE</a></h2>
    
    <h3>FOR STUDENTS INFO : <a href="http://localhost/EPC/display.php">STUDENT</a></h3>
</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epc";
error_reporting(0);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $roll = $_POST['roll'];
    $reg = $_POST['reg'];
    $adate = $_POST['adate'];
    $batch = $_POST['batch'];
    $admission = $_POST['admission'];
    $class = $_POST['class'];
    $subj = $_POST['subj'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender = $_POST['gender'];
    $bg = $_POST['bg'];
    $address = $_POST['address'];
    $paddress = $_POST['paddress'];
    $sphone = $_POST['sphone'];
    $gphone = $_POST['gphone'];
    $sinst = $_POST['sinst'];
    $sroll = $_POST['sroll'];
    $sreg = $_POST['sreg'];
    $sboard = $_POST['sboard'];
    $sgroup = $_POST['sgroup'];
    $syear = $_POST['syear'];
    $sgpa = $_POST['sgpa'];
    $hinst = $_POST['hinst'];
    $hroll = $_POST['hroll'];
    $hreg = $_POST['hreg'];
    $hboard = $_POST['hboard'];
    $hgroup = $_POST['hgroup'];
    $hyear = $_POST['hyear'];
    $hgpa = $_POST['hgpa'];

    // Flag to track if all inserts are successful
    $all_success = true;

    // Insert into office table
    $sql_office = "INSERT INTO office (roll, reg, adate, batch, admission, class, subj) 
                   VALUES ('$roll', '$reg', '$adate', '$batch', '$admission', '$class', '$subj')";
    if ($conn->query($sql_office) !== TRUE) {
        $all_success = false;
    }

    // Insert into student_info table
    $sql_student_info = "INSERT INTO student_info (name, dob, fname, mname, gender, bg, address, paddress, sphone, gphone, reg) 
                         VALUES ('$name', '$dob', '$fname', '$mname', '$gender', '$bg', '$address', '$paddress', '$sphone', '$gphone', '$reg')";
    if ($conn->query($sql_student_info) !== TRUE) {
        $all_success = false;
    }

    // Insert into student_academic_info table
    $sql_student_academic_info = "INSERT INTO student_academic_info (sinst, sroll, sreg, sboard, sgroup, syear, sgpa, hinst, hroll, hreg, hboard, hgroup, hyear, hgpa, reg) 
                                  VALUES ('$sinst', '$sroll', '$sreg', '$sboard', '$sgroup', '$syear', '$sgpa', '$hinst', '$hroll', '$hreg', '$hboard', '$hgroup', '$hyear', '$hgpa', '$reg')";
    if ($conn->query($sql_student_academic_info) !== TRUE) {
        $all_success = false;
    }

    // Insert into display table
    $sql_display = "INSERT INTO display (reg, roll, adate, batch, admission, name, sphone, gphone, address) 
                    VALUES ('$reg', '$roll', '$adate', '$batch', '$admission', '$name', '$sphone', '$gphone', '$address')";
    if ($conn->query($sql_display) !== TRUE) {
        $all_success = false;
    }

    // Check if all queries were successful
    if ($all_success) {
        // Get the total number of students in the display table
        $display_count = "SELECT COUNT(*) as total FROM display";
        $result = $conn->query($display_count);
        $row = $result->fetch_assoc();
        $total_students = $row['total'];

        echo "<script>alert('Data inserted successfully. Total students Added: $total_students');</script>";
    } else {
        echo "<script>alert('Error inserting data. Please try again.');</script>";
    }

    $conn->close();
}

// Optionally, you can display the total number of students outside the form submission process too


?>

