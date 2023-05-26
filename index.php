<?php
$insert = false;
if(isset($_POST['name'])){
     //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    //create a database connection
    $con = mysqli_connect($server, $username, $password);
    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "success connecting to the db";
    
    //collect post variables
    $name = $_POST ['name'];
    $password = $_POST ['password'];
    $cnfpw = $_POST ['cnfpw'];
    $email = $_POST ['email'];
    $rollno = $_POST ['rollno'];
    $phoneno = $_POST ['phoneno'];
    $gender = $_POST ['gender'];
    $dob = $_POST ['dob'];
    $stream = $_POST['stream'];
    $year = $_POST['year'];
    $examtype = $_POST['examtype'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `esas`.`student` (`name`, `password`, `cnfpw`, `email`, `rollno`, `phoneno`, `gender`, `dob`, `stream`, `year`, `examtype`, `address`) VALUES ('$name', '$password', '$cnfpw', '$email', '$rollno', '$phoneno', '$gender', '$dob', '$stream', '$year', '$examtype', '$address');";

    //echo $sql;

    //execute the query
    if($con->query($sql) == true){
        //echo "successfully inserted";

        //flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    //close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
        <div class="logo"><img src="img_logo.png" alt="EXAM SEATING ARRANGEMENT SYSYTEM"><b><h1>EXAM. SEATING ARRANGEMENT SYSYTEM</h1></b></div>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="stulogin.php">Student</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
      </ul>
      <div class="rightNav">
        <input type="text" name="search" id="search">
        <button class="btn btn-outline-primary">search</button>
      </div>
    </nav>
    <section class="background firstsection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-key">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title">
                        REGISTER HERE
                    </div>
                    <?php
                    if($insert == true){
                    echo "<p class='submitMsg'>THANKS FOR SUBMITTING</p>";
                     }
                    ?>
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label class="form-control-label">NAME</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" name="password" id="password" class="form-control" i>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">CONFIRM PASSWORD</label>
                                    <input type="password" name="cnfpw" id="cnfpw" class="form-control" i>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">E-MAIL</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label">ROLL NO</label>
                                  <input type="text" name="rollno" id="rollno" class="form-control">
                              </div>
                                <div class="form-group">
                                    <label class="form-control-label">PHONE NO.</label>
                                    <input type="text" name="phoneno" id="phoneno" class="form-control">
                                </div>
                                <div class="rdo-btn">
                                  <p><b>GENDER:</b>
                                        <input type="radio" name="gender" id="gender" value="male">
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" id="gender" value="female">
                                        <label for="female">Female</label>
                                        <input type="radio" name="gender" id="gender" value="other">
                                        <label for="other">Other</label>
                                      </label>
                                    </p>
                                      <br> <br>
                                  </div>
                                    <div class="DOB">
                                        <p><b>DATE OF BIRTH:</b>
                                        <input type="date" name="dob" id="dob">
                                       </p><br><br>
                                    </div>
                                    <div class="rdo-btn">
                                    <p><b>YOUR STREAM:</b>
                                      <input type="radio" name="stream" id="stream" value="bca">
                                        <label for="bca">BCA</label>
                                        <input type="radio" name="stream" id="stream" value="bba">
                                        <label for="bba">BBA</label>
                                        <input type="radio" name="stream" id="stream" value="mba">
                                        <label for="mba">MBA</label>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="form-control-label">ACADEMIC YEAR:</label>
                                    <input type="text" class="form-control" name="year" id="year" placeholder="1st year/2nd year/3rd year">
                                </div>
                                <div class="rdo-btn">
                                  <p><b>EXAM TYPE:</b>
                                        <input type="radio" name="examtype" id="examtype" value="Internal">
                                        <label for="Internal">Internal</label>
                                        <input type="radio" name="examtype" id="examtype" value="Annual">
                                        <label for="Annual">Annual</label></p>
                                      <br> <br>
                                  </div>
                                    <div class="form-group">
                                        <label class="form-control-label">ADDRESS</label>
                                        <textarea name="address" name="address" id="address" style="width: 244px; height: 56px;"></textarea>
                                    </div>
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                        <!-- Error Message -->
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-outline-primary">SUBMIT</button><br><br>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 resetbttm">
                                    <div class="col-lg-6 reset-btm reset-text">
                                        <!-- Error Message -->
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="reset" class="btn btn-outline-primary">RESET</button>
                                    </div>
                                    
                                </div>
                                <div class="container signin">
                                    <p1>Already registrated<a href="stulogin.php">sign in</a>.</p1>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
      </section>
      <!--INSERT INTO `seat` (`name`, `password`, `cnfpw`, `email`, `rollno`, `phoneno`, `gender`) VALUES ('$name', '$password', '$cnfpw', '$email', '$rollno', '$phoneno', '$gender');-->
      <style>
          *{
    margin: 0;
    padding: 0;
}

            body {
background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
background-size: cover;
background-blend-mode: darken;
}
a:any-link{
color: #0DB8DE;
}
p{
display: block;
color: white;
cursor: pointer;
font-size: 10px;
letter-spacing: 2px;
}
textarea{
background-color: black;
border-color: #0DB8DE;
color: white;
}

.navbar{
      display: flex;
      align-items: center;
      justify-content: center;
      position: inherit;
      top: 0;
      cursor: pointer;
    }
    .nav-list{
      display: flex;
      justify-content: center;
      align-items: center;
      }

    .nav-list li{
      list-style: none;
    }
    .nav-list li a{
      text-decoration: none;
      color: white;
      padding: 23px 12px;
    }

    .nav-list li a:hover{
      text-decoration: none;
      color: #0DB8DE;
      padding: 23px 12px;
    }
    .rightnav{
      width: 50%;
      text-align: right;
    }

    #search{
      padding: 8px ;
      font-size: 17px;
      border:2px white;
      border-radius: 20px;
      background-color: white;
    }

.logo{
      width:50%;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      background-color: none;
    }

    .logo img{
      width: 15%;
      
    }

.login-box {
margin-top: 75px;
height: auto;
background: transparent;
text-align: center;
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
height: 6px;
font-size: 80px;
line-height: 100px;
background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

.login-title {
margin-top: 15px;
text-align: center;
font-size: 30px;
letter-spacing: 2px;
margin-top: 15px;
font-weight: bold;
color: #ECF0F5;
}

.login-form {
margin-top: 25px;
text-align: center;
}

input[type=text] {
background-color: transparent;
border: none;
border-bottom: 2px solid #0DB8DE;
border-top: 0px;
border-radius: 0px;
font-weight: bold;
outline: 0;
margin-bottom: 20px;
padding-left: 0px;
color: #ECF0F5;
}

input[type=password] {
background-color: transparent;
border: none;
border-bottom: 2px solid #0DB8DE;
border-top: 0px;
border-radius: 0px;
font-weight: bold;
outline: 0;
padding-left: 0px;
margin-bottom: 20px;
color: #ECF0F5;
}

.form-group {
margin-bottom: 40px;
outline: 0px;
}

.form-control:focus {
border-color: inherit;
-webkit-box-shadow: none;
box-shadow: none;
border-bottom: 2px solid #0DB8DE;
outline: 0;
background-color: #1A2226;
color: #ECF0F5;
}

input:focus {
outline: none;
box-shadow: 0 0 0;
}

label {
margin-bottom: 0px;
}

.form-control-label {
font-size: 10px;
color: #ffffff;
font-weight: bold;
letter-spacing: 1px;
}

.btn-outline-primary {
border-color: #0DB8DE;
color: #0DB8DE;
border-radius: 0px;
font-weight: bold;
letter-spacing: 1px;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
background-color: #0DB8DE;
right: 0px;
}

.login-btm {
float: left;
}

.login-button {
padding-right: 0px;
text-align: right;
margin-bottom: 25px;
}

.login-text {
text-align: left;
padding-left: 0px;
color: #A2A4A4;
}

.loginbttm {
padding: 0px;
}


.btn {
padding: 8px 10px;
margin: 7px 0;
border: 2px solid white;
border-radius: 25px;
background: none;
color: white;
cursor: pointer;
}
p1{
color: white;
}

      </style>
</body>
</html>