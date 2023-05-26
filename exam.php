<?php
$insert = false;
//INSERT INTO `room` (`roomno`, `capacity`) VALUES ('4', '50');
    session_start();
    if(!isset($_SESSION['adminloginid']))
    {
        header("location: adminlogin.php");
    }
?>
<?php 
include "connection2.php";
if(isset($_GET['examid'])){
    $examid=$_GET['examid'];
    $delete=mysqli_query($connection,"DELETE FROM `exam` WHERE `examid`='$examid'");
}

$select="select * from exam";
$query=mysqli_query($connection,$select);

?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "esas";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("sorry we failed to connect: ". mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       $examid = $_POST['examid'];
       $examtype = $_POST['examtype'];
       $date = $_POST['date'];

       $sql = "INSERT INTO `exam` (`examid`, `examtype`, `date`) VALUES ('$examid', '$examtype', '$date')";
       $result = mysqli_query($conn, $sql);

        if($result){
            //echo "the record has been inserted successfully!<br>";
            $insert = true;
        }
        else{
            echo "the record was not inserted successfully because of this error-->". mysqli_error($conn);
        }
    }  
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--<link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>-->
    

    <title>exam data</title>
    
</head>

<body>
    <!-- Edit modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
  Edit modal
</button>-->

<!-- MEdit -->
<!--<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/esas/room.php" method="post">
            <input type="hidden" 
            <input class="form-input" type="text" name="roomnoedit" id="roomnoedit" placeholder="Room No">
            <input class="form-input" type="text" name="capacityedit" id="capacityedit" placeholder="Room Capacity">
            <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->
    <div class="header">

    </div><input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>administrative <span>panel</span></h3>
            <!--<h2>welcome to admin panel - <?php //echo $_SESSION['adminloginid']?></h2>-->
            <form method="POST">
                <button type="logout" id="logout" name="logout" class="logout_btn">LOG OUT</button>
            </form>
        </div>
    </header>

    <div class="sidebar">
        <center>
            <img src="11676.jpg" class="profile_image" alt="">
            <h4>Amarnath</h4>
        </center>
        <a href="adminpanel.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAH1JREFUSEvtlUsOgCAMRIeTqTfXk2lMxIUGfJnYbpRtB4bXDxQFrxJ8vtINZklDg2qPTUeM6m4E60PKKjHV/QbNhJ7Nc+0imluqs2vQ66JF0ljZXAI8n+kGFN0eNIpuFzncgKLbBHQj1dlz8GGDN+ag+1TQNsW69D8Z34wKN2WtKBmr5BH3AAAAAElFTkSuQmCC" /></i></i><span>Dashboard</span></a>
        <a href="studentdetails.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATFJREFUSEvtleFNAkEQhT8q0A60BDsgVoAdqBXYAiXQgVIB0IF2YAnYgVYg+cgtGTa77N6P+6WTbALs3HvzZt4cMyaO2cT4/A2CW2ABPAHXwBZ4Bz6A71aLay2KoHcXQCTy7IDPUl4k6AWt8alGMhWqbm9iJPhtyR15f8SOBLbCPj8ANyPBYvoaeBvUVG0qSTpXHWQ/A+gqtSY909oDXZOIdFIeX4CgVlx0VInA4WwApUZnaALJbKNggnpS+PsjcB+rKBHEYXu/HICOrshChS8DqQXkcy3OICdI31VjxXo+AuekZ0X3KBhr3yaB/U3OsWJ72xu6SXWnKCkQ8LUXMct7zgZf3QOXTvvNO4ms3MJ8TZxFaw+SNbWnn+OGuwMOXtBo11EEnQLqaS0F/wTT/+kfADkHNxk5tYswAAAAAElFTkSuQmCC" /></i></i><span>Student</span></a>
        <!--student-->
        <a href="seat.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJZJREFUSEvtldsNgCAMRQ8TOIKO4gg6oa7iBo6gG7iBpiYkQEgwWPiCPyDcR7lpDYWXKYxPVYIRWIDhp6sDmIFdcFwHctH/BLfPN0AEewS3EriFecW7DqoRhB9vibPOYw6ygJzyeoIaQRgU2SdLpJXWFlO/1i2myTh+KdEFdEoZjbZr6d+rwkw4gSk2cJTE+zBVZ3IRBw/wojYZ5nCNwwAAAABJRU5ErkJggg==" /></i></i><span>Seat</span></a>
        <!--seat-->
        <a href="exam.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC" /></i></i><span>Exam</span></a>
        <!--exam-->
        <a href="room.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAI9JREFUSEvtlsEJgDAQBCeV2IJWoCXYihXYkiVoB5ZgJ0oeAdEcXALrS59hs3O7gcSA+AtifyzACMxA6xzgACZgeeotQNzQOM2TbAc6L+AsNE/y18BWgk8B9yESOLcWU1QlkANKjqMqgRwgr0gOkFckB8grkgPkFf2AbAPy63oF+pLygQ0YvC9aobctl/9VXJNYJBlka7UnAAAAAElFTkSuQmCC" /></i></i><span>Room</span></a>
        <!--room-->
    </div>
    <!--<?php
        if($insert){
            echo "<div class='alert alert-succes alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your record has been inserted.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        }
    ?>-->
    <section class="container">
        <h2 class="text-center">Exam Data</h2>
        <div class="form">
            <form action="/esas/exam.php" method="post">
            <input class="form-input" type="text" name="examid" id="examid" placeholder="Exam ID">
            <input class="form-input" type="text" name="examtype" id="examtype" placeholder="Exam Type"><br>
            <input type="date" name="date" id="date"><br><br>
            <!--<input type="submit" value="save" onclick="save();">
            <input type="submit" value="insert" onclick="insert();">
            <input type="delete" value="delete" onclick="_delete();">-->
            <button type="submit" class="btn btn-primary">INSERT</button>
            </form>
        </div>
        <div class="table">
            <h1>Exam details</h1>
            <table border="1" cellpadding="0">
            <tr>
                <th scope="col">Exam ID</th>
                <th scope="col">Exam Type</th>
                <th scope="col">Exam Date</th>
                <th colspan="2" align="center">Actions</th>
            </tr>
        </div>
        <?php
        $sql = "SELECT * FROM `exam`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
            <td>". $row['examid'] . "</td>
            <td>". $row['examtype'] . "</td>
            <td>". $row['date'] . "</td>
            <td><a class='btn btn-secondary' href='examedit.php?examid= " .$row['examid'] ."'>edit</a>
            <a class='btn btn-danger' href='exam.php?examid= " .$row['examid'] ."'>delete</a>
            </tr>";
        }
        ?>
        
    </section>
    <section class="container">

    </section>
    <form>
        <!--<div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>-->

    </form>
    </div>
    
   <script>
    /*edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
            console.log("edit ", );
            tr = e.target.parentNode.parentNode;
            roomno = tr.getElementsByTagName("td")[0].innerText;
            capacity = tr.getElementsByTagName("td")[1].innerText;
            console.log(roomno, capacity);
            roomnoedit.value = roomno;
            capacityedit.value = capacity;
            $('#editModal').modal('toggle');
        })
    })*/
 </script>
 <script>/*
     function save() {
         table.rows[rIndex].cell[0].innerHTML = roomno.value;
         table.rows[rIndex].cell[1].innerHTML = capacity.value;
     }
     function insert(){
         var newData = table.insertRow(1);
         var cell0 = newData.insertcell(0);
         var cell1 = newData.insertcell(1);
         cell0.innerHTML = roomno.value;
         cell1.innerHTML = capacity.value;
     }
     function _delete(){
        table.deleteRow(rIndex);
        examid.value = "";
        examtype.value = "";
        date.value = "";
     }*/
 </script>
</body>

<?php 
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: adminlogin.php");
}
?>

</html>
<style>
    body {
        margin: 0;
        padding: 0;
        background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
        background-size: cover;
        background-blend-mode: darken;
    }

    /*.logout_btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }
    .logout_btn{
    padding: 8px 10px;
    margin: 7px 0;
    border: 2px solid white;
    border-radius: 25px;
    background: none;
    color: white;
    cursor: pointer;
    }
    .logout_btn:hover{
        background: #0DB8DE;
    }
    *{
        margin= 0;
        padding= 0;
        box-sizing: border-box;
    }*/
    .table{
        margin: 2px 522px;
        max-width: 250px;
        width: 75%;
        border-collapse: collapse;
        color: #fff;
    }
    table th{
        color: #fff;
        padding: 10px 33px;
    }
    table td{
        color: #fff;
        font-size: 1.2em;
        padding: 10px;
        text-align: center;
    }
    .btn{
        background: none;
        font-size: 1.2em;
        padding: 5px 30px;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }
    .btn:hover{
        background: #0DB8DE;
        color: #fff;
    }
    header {
        position: fixed;
        background: none;
        padding: 20px;
        width: 100%;
        height: 30px;
    }

    .left_area h3 {
        color: #fff;
        margin: 0;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 900;
    }

    .left_area span {
        color: #0DB8DE;
    }

    .logout_btn {
        padding: 11px;
        background: none;
        text-decoration: none;
        float: right;
        margin-top: -30px;
        margin-right: 40px;
        border-radius: 25px;
        border: 2px solid white;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .logout_btn:hover {
        background: #0DB8DE;
    }

    .sidebar {
        background: none;
        margin-top: 70px;
        padding-top: 30px;
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        transition: 0.5s;
        transition-property: left;
    }

    .sidebar .profile_image {
        width: 100px;
        height: 100px;
        border-radius: 100px;
        margin-bottom: 10px;
    }

    .sidebar h4 {
        color: skyblue;
        margin-top: 0;
        margin-bottom: 20px;
    }

    .sidebar a {
        color: #fff;
        display: block;
        width: 100%;
        line-height: 60px;
        text-decoration: none;
        padding-left: 40px;
        box-sizing: border-box;
        transition: 0.5s;
        transition-property: background;
    }

    .sidebar a:hover {
        background: #0DB8DE;
    }

    .sidebar i {
        padding-right: 10px;

    }

    label #sidebar_btn {
        z-index: 1;
        color: #fff;
        position: fixed;
        cursor: pointer;
        left: 300px;
        font-size: 20px;
        margin: 5px 0;
        transition: 0.5s;
        transition-property: color;
    }

    label #sidebar_btn:hover {
        color: #0DB8DE;
    }

    #check:checked~.sidebar {
        left: -190px;
    }

    #check:checked~.sidebar a span {
        display: none;
    }

    #check:checked~.sidebar a {
        font-size: 20px;
        margin-left: 170px;
        width: 80px;
    }

    .content {
        margin-left: 250px;
        background: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vh;
        transition: 0.5s;
    }

    #check:checked~.content {
        margin-left: 60px;
    }

    #check {
        display: none;
    }

    .contact {
        background: rgba(0, 0, 0, 0.7) url('https://media.gettyimages.com/photos/papers-on-desks-by-window-in-classroom-picture-id1171004759?k=20&m=1171004759&s=612x612&w=0&h=uo7jXF2LkDwfi_hla-x6CJp7avfjNmStkzZn-ZsXGmE=');
        background-size: cover;
        background-blend-mode: darken;
        height: 833px;
    }

    .text-center {
        padding-top: 30px;
        text-align: center;
        color: white;
    }

    .form {
        max-width: 250px;
        margin: 0px auto;

    }

    .form-input {
        margin: 9px 0px;
        width: 100%;
        padding: 5px 13px;
        font-size: 19px;
        border: 2px solid grey;
        border-radius: 6px;
    }

    .text-footer {
        padding-top: 30px 0;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }
    

</style>