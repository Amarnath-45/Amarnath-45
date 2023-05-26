<?php
    require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    STUDENT LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post">
                            <div class="form-group">
                                <label class="form-control-label">ROLLNO</label>
                                <input type="text" name="rollno" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" name="login" class="btn btn-outline-primary">LOGIN</button><br><br>
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
                            <p>If not registrated<a href="index.php">Click here</a>.</p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
            <?php
                if(isset($_POST['login']))
                {
                $query="SELECT * FROM `student` WHERE `rollno`='$_POST[rollno]' AND `password`='$_POST[password]'";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)==1)
                {
                    session_start();
                    $_SESSION['rollno']=$_POST['rollno'];
                    header("location: studentpanel.php");
                }
                else
                {
                    echo"<script>alert('Incorrect Password')</script>";
                }
                }
            ?>

            <style type="text/css">
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
}
.navbar{
          display: flex;
          align-items: center;
          justify-content: center;
          position: sticky;
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
    height: 100px;
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

.btn{
    padding: 8px 10px;
    margin: 7px 0;
    border: 2px solid white;
    border-radius: 25px;
    background: none;
    color: white;
    cursor: pointer;
}

            </style>
        </div>
</body>
</html>