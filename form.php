
<?php include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPC</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        
        <div class="title"> EPC ADMISSION FORM </div>
<form action="show.php" method="POST">
        <div class="form">
            <div class="office-use">

                <div class="input_field">
                    <label> Roll No.</label>
                    <input type="text" class="input" name="roll">
                </div>

                <div class="input_field">
                    <label>Reg. No.</label>
                    <input type="text" class="input" name="reg">
                </div>

                <div class="input_field">
                    <label>Admission Date</label>
                    <input type="date" class="input" name="adate">
                </div>

                <div class="input_field">
                    <label>Batch</label>
                    <input type="text" class="input" name="batch">
                </div>

                <div class="input_field">
    <label>Admission</label>
   <div style="display: flex; gap: 50px;">
    <div>
        <input type="radio" id="a_unit" name="admission" value="A">
        <label for="a_unit">A Unit</label>
    </div>
    <div>
        <input type="radio" id="b_unit" name="admission" value="B">
        <label for="b_unit">B Unit</label>
    </div>
    <div>
        <input type="radio" id="c_unit" name="admission" value="C">
        <label for="c_unit">C Unit</label>
    </div>
    <div>
        <input type="radio" id="d_unit" name="admission" value="D">
        <label for="d_unit">D Unit</label>
    </div>
    <div>
        <input type="radio" id="na_unit" name="admission" value="N/A">
        <label for="na_unit">N/A</label>
    </div>
</div>
</div>


                <div class="input_field">
                    <label>Academic</label>
                    <div style="display: flex;gap: 50px;padding-top: 10px;">


                        <div class="input_field">
    <label for="class">Class</label>
    <select id="class" class="input" name="class">
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">XI</option>
        <option value="XII">XII</option>
        <option value="N/A">N/A</option>
    </select>
</div>

                        <div class="input_field">
                            <label>Subject</label>
                            <input type="text" class="inputx" name="subj">
                        </div>
                    </div>
                </div>




            </div>

            <div class="necessary-information">

                <div class="input_field">
                    <label>Name Of Student</label>
                    <input type="text" class="input" name="name">
                </div>
                <div class="input_field">
                    <label>Date of Birth</label>
                    <input type="date" class="input" name="dob">
                </div>

                <div class="input_field">
                    <label>Father's Name</label>
                    <input type="text" class="input" name="fname">
                </div>

                <div class="input_field">
                    <label>Mother's Name</label>
                    <input type="text" class="input" name="mname">
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <select class="input" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="input_field">
                    <label>Blood Group</label>
                    <select class="input" name="bg">
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="input_field">
                    <label>Present Address</label>
                    <input type="text" class="input" id="tx"  name="address">
                    
                </div>

                <div class="input_field">
                    <label>Permanent Address</label>
                    <input type="text" class="input"   name="paddress">
                    
                </div>

                <div class="input_field">
                    <label>Student's Mobile Number</label>
                    <input type="text" class="input" name="sphone">
                </div>

                <div class="input_field">
                    <label>Guardian's Mobile Number</label>
                    <input type="text" class="input" name="gphone">
                </div>


            </div>







            <div class="academic-info">
                <div class="titlessc"> SSC INFO </div>
                <div class="ssc">

                    <div class="input_field">
                        <label>Name of Institution</label>
                        <input type="text" class="input" name="sinst">
                    </div>

                    <div class="input_field">
                        <label>Roll No.</label>
                        <input type="text" class="input" name="sroll">
                    </div>

                    <div class="input_field">
                        <label>Reg. No.</label>
                        <input type="text" class="input" name="sreg">
                    </div>

                    <div class="input_field">
                        <label>Board</label>
                        <select class="input" name="sboard">
                            <option value="">Select Board</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chattogram">Chattogram</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna">Khulna</option>
                            <option value="barisal">Barisal</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="mymensingh">Mymensingh</option>
                        </select>
                    </div>

                    <div class="input_field">
                        <label>Group</label>
                        <select class="input" name="sgroup">
                            <option value="">Select Group</option>
                            <option value="science">Science</option>
                            <option value="arts">Arts</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>

                    <div class="input_field">
                        <label>Passing Year</label>
                        <input type="text" class="input" name="syear">
                    </div>

                    <div class="input_field">
                        <label>Obtained GPA</label>
                        <input type="text" class="input" name="sgpa">
                    </div>

                </div>
                <div class="titlehsc"> HSC INFO </div>
                <div class="hsc">

                    <div class="input_field">
                        <label>Name of Institution</label>
                        <input type="text" class="input" name="hinst">
                    </div>

                    <div class="input_field">
                        <label>Roll No.</label>
                        <input type="text" class="input" name="hroll">
                    </div>

                    <div class="input_field">
                        <label>Reg. No.</label>
                        <input type="text" class="input" name="hreg">
                    </div>

                    <div class="input_field">
                        <label>Board</label>
                        <select class="input" name="hboard">
                            <option value="">Select Board</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chattogram">Chattogram</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna">Khulna</option>
                            <option value="barisal">Barisal</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="mymensingh">Mymensingh</option>
                        </select>
                    </div>

                    <div class="input_field">
                        <label>Group</label>
                        <select class="input" name="hgroup">
                            <option value="">Select Group</option>
                            <option value="science">Science</option>
                            <option value="arts">Arts</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>

                    <div class="input_field">
                        <label>Passing Year</label>
                        <input type="text" class="input" name="hyear">
                    </div>

                    <div class="input_field">
                        <label>Obtained GPA</label>
                        <input type="text" class="input" name="hgpa">
                    </div>



                </div>
            </div>


            <div class="button">
                <button type="submit" value="register" class="btn" name="register">Submit</button>
            </div>

        </div>
</form>
    </div>
</body>

</html>


