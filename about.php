<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
<nav class="navbar background">
      <ul class="nav-list">
      <div class="logo"><img src="img_logo.png" alt="EXAM SEATING ARRANGEMENT SYSYTEM"><b><h1>EXAM. SEATING ARRANGEMENT SYSYTEM</h1></b></div>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="User Login.html">User</a></li>
        <li><a href="stulogin.php">Student</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
      </ul>
      <div class="rightNav">
        <input type="text" name="search" id="search">
        <button class="btn btn-outline-primary">search</button>
      </div>
    </nav>
    <section class="background firstsection">
      <div class="box-main">
        <div class="firsthalf">
          <p class="text-big">
            <div class="loginscene"><div class="page-header">
              <h1><u>Our Team</u></h1>
          <h2><u>Exam Seating Arrangement</u></h2>
            </div>
          <div class="thespeech">Exam Hall Seating Arrangement Systems is developed for the college to simplify examination hall allotment and seating arrangemnt. The project keeps track of each room.
          <br><br>HOW TO USE? (QUICK GUIDE)<br><br>
          For making seating arrangement <br><br>
          <list>
          
          <u>A. ADMIN LOGIN</u><br>
          
          1.Signin yourself on clicking <a href="adminlogin.php">Sign in</a>.<br>
          2.Log In with registered user id and password.<br>
          3.Enter room details.<br>
          4.Chart would be prepared.<br><br><br>
          <u>B. UPDATE</u><br>
            You can change particular roll numbers with other roll number.<br><br><br>
            <u>C. VIEW</u><br>
             You can view seating arrangement of particular room.</br><br><br>
        For students.<br><br>
          1.Click on <a href="stulogin.php">Student</a>.<br>
          2.Enter your roll number.<br>
          3.Your alloted seat would be shown(if chart prepared).<br><br><br>
          For Invigilators.<br>
          (Invigilators can check their alloted room and timing.)<br><br>
          1.Click on <a href="faculty.php">Faculty</a>.<br>
          2.Enter your name.<br>
          3.Your alloted room will be shown.<br>
          <br>
          (Currently It is available for 8 columns room.)
          
        </div>
          </p>
        </div>
        <div class="secondhalf"></div>
      </div>
    </section>
</body>
<style>
*{
    margin: 0;
    padding: 0;
    }
    a:any-link{
    color: #0DB8DE;
    }
        .firsthalf{
          text-align: left;
          font-weight: bold;
          letter-spacing: 1px;
          color: white;
          padding-left: 40px;
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
          padding: 8px;
          font-size: 17px;
          border:2px white;
          border-radius: 20px;
          background-color: white;
          vertical-align: middle;
        }
        input[type=text] {
          color: #ECF0F5;
        }

        .background{
          background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
          background-size: cover ;
          background-blend-mode: darken;
        }

        .firstsection{
          height: 109vh;
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
.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}
</style>
</html>