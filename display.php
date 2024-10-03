<?php include("./connection.php");


   



   $display = "SELECT * FROM display";
    

$data=mysqli_query($conn, $display);

$total=mysqli_num_rows($data);


if( $total!=0){

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Total Students</title>
    <link rel="shortcut icon" href="path/to/your/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FEF9D9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }

        tr {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #e8e8e8;
        }

        tr:hover {
            background-color: #ddd;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        tr {
            transition: all 0.2s ease-in-out;
        }

        th, td {
            text-align: left;
        }

        td {
            color: #333;
        }
           .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        .count {
            font-size: 48px;
            color: #ff5733;
        }
        .sbmt{
            padding: 10px;
            background-color: #1a73e8;
            border: none;
            color: #ddd;

        }
        .sbmt:hover{
           background-color: #ff5733;
           cursor: pointer;
        }
      
.x {
    text-align: center;
}
th{
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
    <h1>Total Number of Students</h1>
    <p class="count"><?php echo $total; ?></p>
</div>
</body>



<table border="3">
    <tr>
 <th>Serial No.</th>
<th>Registration</th>
<th>Roll</th>
<th>Student Name</th>
<th>Admission Date</th>
<th>Batch</th>
<th>Admission Unit</th>
<th>Student Phone No.</th>
<th>Guardian Phone No.</th>
<th>Address</th>
<th>Form Download</th>
<th>Payslip Download</th>
</tr>


    <?php
    $serial = 1;
while($result=mysqli_fetch_assoc($data) ){
    ?>
    <tr>
    <td><?php echo $serial; ?></td>
    <td><?php echo $result['reg']; ?></td>
    <td><?php echo $result['roll']; ?></td>
    <td><?php echo $result['name']; ?></td>
    <td><?php echo $result['adate']; ?></td>
    <td><?php echo $result['batch']; ?></td>
    <td><?php echo $result['admission']; ?></td>
    <td><?php echo $result['sphone']; ?></td>
    <td><?php echo $result['gphone']; ?></td>
    <td><?php echo $result['address']; ?></td>
    <td class="x"><form action="formdownload.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['reg']; ?>">
        <button type="submit" class="sbmt"><i class="fa fa-download"></i></button>
    </form></td>
    <td class="x"><form action="payslip.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['reg']; ?>">
        <button type="submit" class="sbmt"><i class="fa fa-download"></i></button>
    </form></td>
</tr>
<?php
        $serial++;
}

}
else{
    echo "no records";
}


?>

</table>

<h4 style="font-family: Arial; font-size: 16px; color: #333; text-align: center;">
  Back to Home page : 
  <a href="http://localhost/EPC/form.php" style="color: #1a73e8; text-decoration: none;">
    Home
  </a>
</h4>
