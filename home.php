<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
<nav class="navbar background">
      <ul class="nav-list">
      <div class="logo"><img src="img_logo.png" alt="EXAM SEATING ARRANGEMENT SYSYTEM"><b><h1>EXAM. SEATING ARRANGEMENT SYSYTEM</h1></b></div>
        <li><a href="home.php">Home</a></li>
        <li><a href="#contact">Contact</a></li>
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
      <div class="box-main">
        <div class="firsthalf">
          <p class="text-big">Examination hall allotment and seating arrangement is a web-based application.</p>
          <p class="text-small"> Main purpose of this application is to handle the operations in an educational institute during the time examinations. All the students and staff can make use of this application without facing any issues as they get the information of the allotted seat & room number.</p>
          <div class="buttons">
            <form method="POST">
            <button type="submit" name="login" class="btn btn-outline-primary"><a href="stulogin.php">LOGIN</a></button>
            <button type="submit" name="register" class="btn btn-outline-primary"><a href="index.php">REGISTER</a></button>
            </form>
          </div>
        </div>
        <div class="secondhalf"></div>
        <img src="download.jpg" alt="img">
      </div>
    </section>
    <section class="section">
      <div class="paras">
      <p class="sectiontag text-big">Abstract To simplify examination hall allotment</p> 
      <p class="sectionsubtag text-small">and seating arrangement for the student, an application for automatic seating arrangement is developed. Using the above application, the examination information of a particular student in a particular class can be accessed. Main aim of the project is to assign the student, exam hall which is hassle free. Because most of the students feel Augean to search their allotted seat, the concept of automatic exam hall seat generation has come up, where even the hall for invigilators, for the invigilation duty is generated. Exam Hall Seating Arrangement System is an online process developed for colleges to make the seat allocation simpler. In this project traditional approach of conduction of exams is turned to computerized way. The software helps in generation of report of seat arrangement made. The project is developed as a windows-based application.</p>
      </div>
      <div class="thumbnail">
        <img src="img12.jpg" alt="img" class="thumbnail">
      </div>
    </section>
    <section class="section section-left">
      <div class="paras">
      <p class="sectiontag text-big">Abstract To simplify examination hall allotment</p> 
      <p class="sectionsubtag text-small">and seating arrangement for the student, an application for automatic seating arrangement is developed. Using the above application, the examination information of a particular student in a particular class can be accessed. Main aim of the project is to assign the student, exam hall which is hassle free. Because most of the students feel Augean to search their allotted seat, the concept of automatic exam hall seat generation has come up, where even the hall for invigilators, for the invigilation duty is generated. Exam Hall Seating Arrangement System is an online process developed for colleges to make the seat allocation simpler. In this project traditional approach of conduction of exams is turned to computerized way. The software helps in generation of report of seat arrangement made. The project is developed as a windows-based application.</p>
      </div>
      <div class="thumbnail">
        <img src="img10.jpg" alt="img" class="thumbnail">
      </div>
    </section>
    <section class="section">
      <div class="paras">
      <p class="sectiontag text-big">Abstract To simplify examination hall allotment</p> 
      <p class="sectionsubtag text-small">and seating arrangement for the student, an application for automatic seating arrangement is developed. Using the above application, the examination information of a particular student in a particular class can be accessed. Main aim of the project is to assign the student, exam hall which is hassle free. Because most of the students feel Augean to search their allotted seat, the concept of automatic exam hall seat generation has come up, where even the hall for invigilators, for the invigilation duty is generated. Exam Hall Seating Arrangement System is an online process developed for colleges to make the seat allocation simpler. In this project traditional approach of conduction of exams is turned to computerized way. The software helps in generation of report of seat arrangement made. The project is developed as a windows-based application.</p>
    </div>
      <div class="thumbnail">
        <img src="img11.jpg" alt="img" class="thumbnail">
      </div>
    </section>
    <section class="contact">
      <h2 class="text-center">Contact Us</h2>
      <div class="form">
        <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name">
        <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter your phone">
        <input class="form-input" type="text" name="email" id="email" placeholder="Enter your email">
        <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Enter your concern"></textarea>
        <button class="btn btn-outline-primary">SUBMIT</button>
      </div>
    </section>
    <footer class="background">
      <p class="text-footer">
      <b>Copyright &copy; 7676 - Exam seating arrangement system - All rights reserved</b>
    </p>
    </footer> 
</body>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        /*a:any-link{
        color: white;
        }*/
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
          padding: 0 23px;
        }

        #search{
          padding: 8px;
          font-size: 17px;
          border:2px white;
          border-radius: 20px;
          background-color:white;
          vertical-align: middle;
        }
        input[type=text] {
          color: black;
        }

        .background{
          background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
          background-size: cover ;
          background-blend-mode: darken;
        }

        .firstsection{
          height: 100vh;
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
.btn a{
    color: white;
    text-decoration: none;
    }
.box-main{
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  max-width: 70%;
  margin: auto;
  height: 70%;
}
.firsthalf{
  width: 80%;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.secondhalf{
  width: 70%;
}
.secondhalf img{
  width: 70%;
  border: 4px solid white;
  border-radius: 150px;
  display: block;
  margin: auto;
}
.text-big{
  font-size: 19px;

}
.text-small{
  font-size: 12px;
}
.section{
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  max-width: 80%;
  margin: auto;
  font-family: 'Ubuntu', sans-serif;
}
.section-left{
  flex-direction: row-reverse;
}
.paras{
  padding: 0px 90px;
}
.sectiontag{
  padding: 16px 0;
}
.sectionsubtag{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.thumbnail img{
  width: 143%;
  border: 2px solid black;
  border-radius: 26px;
  margin-top: 19px;
}
.contact{
  background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
  background-size: cover ;
  background-blend-mode: darken;
  height: 833px;
}
.text-center{
  padding-top: 30px;
  text-align: center;
  color: white;
}
.form{
  max-width: 444px;
  margin: 25px auto;
  
}
.form-input{
  margin: 14px 0;
  width: 100%;
  padding: 5px 13px;
  font-size: 19px;
  border: 2px solid grey;
  border-radius: 6px;
}
.text-footer{
  padding-top: 30px 0;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
}
</style>
</html>