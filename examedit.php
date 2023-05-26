<?php
    session_start();
    if(!isset($_SESSION['adminloginid']))
    {
        header("location: adminlogin.php");
    }
?>
<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'esas');

if(isset($_POST['edit'])){
    $examid=$_POST['examid'];
    $query="UPDATE `exam` SET examid='$_POST[examid]',examtype='$_POST[examtype]',date='$_POST[date]' where examid='$_POST[examid]'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo'<script>alert("data updated")</script>';
    }
    else{
        echo'<script>alert("data not updated")</script>';
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
</head>
<body>
    <div class="header">
        
    </div> <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>administrative <span>panel</span></h3>
            <!--<h2>welcome to admin panel - <?php echo $_SESSION['adminloginid']?></h2>-->
        <form method="POST">
        <button type="logout" name="logout" class="logout_btn">LOG OUT</button>
        </form>
        </div>
    </header>

    <div class="sidebar">
        <center>
            <img src="11676.jpg" class="profile_image" alt="">
            <h4>Amarnath</h4>
        </center>
        <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAH1JREFUSEvtlUsOgCAMRIeTqTfXk2lMxIUGfJnYbpRtB4bXDxQFrxJ8vtINZklDg2qPTUeM6m4E60PKKjHV/QbNhJ7Nc+0imluqs2vQ66JF0ljZXAI8n+kGFN0eNIpuFzncgKLbBHQj1dlz8GGDN+ag+1TQNsW69D8Z34wKN2WtKBmr5BH3AAAAAElFTkSuQmCC"/></i></i><span>Dashboard</span></a>
        <a href="studentdetails.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATFJREFUSEvtleFNAkEQhT8q0A60BDsgVoAdqBXYAiXQgVIB0IF2YAnYgVYg+cgtGTa77N6P+6WTbALs3HvzZt4cMyaO2cT4/A2CW2ABPAHXwBZ4Bz6A71aLay2KoHcXQCTy7IDPUl4k6AWt8alGMhWqbm9iJPhtyR15f8SOBLbCPj8ANyPBYvoaeBvUVG0qSTpXHWQ/A+gqtSY909oDXZOIdFIeX4CgVlx0VInA4WwApUZnaALJbKNggnpS+PsjcB+rKBHEYXu/HICOrshChS8DqQXkcy3OICdI31VjxXo+AuekZ0X3KBhr3yaB/U3OsWJ72xu6SXWnKCkQ8LUXMct7zgZf3QOXTvvNO4ms3MJ8TZxFaw+SNbWnn+OGuwMOXtBo11EEnQLqaS0F/wTT/+kfADkHNxk5tYswAAAAAElFTkSuQmCC"/></i></i><span>Student</span></a><!--student-->
        <a href="seat.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJZJREFUSEvtldsNgCAMRQ8TOIKO4gg6oa7iBo6gG7iBpiYkQEgwWPiCPyDcR7lpDYWXKYxPVYIRWIDhp6sDmIFdcFwHctH/BLfPN0AEewS3EriFecW7DqoRhB9vibPOYw6ygJzyeoIaQRgU2SdLpJXWFlO/1i2myTh+KdEFdEoZjbZr6d+rwkw4gSk2cJTE+zBVZ3IRBw/wojYZ5nCNwwAAAABJRU5ErkJggg=="/></i></i><span>Seat</span></a><!--seat-->
        <a href="exam.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvFlO0NwjAMBa8bwCQwAkzCKjACE8EIsAkbgJ6USKEkdj5a0T+V2vQufnY6sfI1rcxnRLABToDuV+CV22yvQNAbsA/QB3DMSXoEKfwZBDsgK2kVzOGHILgDklyAcxpVi6AUi3gxrm6BFYsE6oXiUkVfza6pwItFgixcLzxBDq4dlp7/TKolGIZbFSwCLwkWg5cEOjCa6bRx1ZnPm5DrwTss2oaR64aXKogCyYfgniCttjjn3u/eiih+2w2vOWjeBt333kl2Ad6Cmog8hjmZfxG07thcv3oPPg35Shmq75wnAAAAAElFTkSuQmCC"/></i></i><span>Exam</span></a><!--exam-->
        <a href="room.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAI9JREFUSEvtlsEJgDAQBCeV2IJWoCXYihXYkiVoB5ZgJ0oeAdEcXALrS59hs3O7gcSA+AtifyzACMxA6xzgACZgeeotQNzQOM2TbAc6L+AsNE/y18BWgk8B9yESOLcWU1QlkANKjqMqgRwgr0gOkFckB8grkgPkFf2AbAPy63oF+pLygQ0YvC9aobctl/9VXJNYJBlka7UnAAAAAElFTkSuQmCC"/></i></i><span>Room</span></a><!--room-->
    </div>
    
    <div class="content">
        <div class="form">
        <form action="" method="POST"><h1>Update exam data</h1>
            <input class="form-input" type="text" name="examid" placeholder="examid"><br>
            <input class="form-input" type="text" name="examtype" placeholder="examtype"><br>
            <input type="date" name="date" id="date"><br><br>
            <input type="submit" name="edit" value="Edit Data">
        </form>
        </div>  
    </div>
    
</body>

<?php 
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: adminlogin.php");
}
?>
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
    
    header{
        position: fixed;
        background: none;
        padding: 20px;
        width: 100%;
        height: 30px;
    }
    .left_area h3{
        color: #fff;
        margin: 0;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 900;
    }
    .left_area span{
        color: #0DB8DE;
    }
    .logout_btn{
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
    .logout_btn:hover{
        background: #0DB8DE;
    }
    .sidebar{
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
    .sidebar .profile_image{
        width:100px;
        height: 100px;
        border-radius: 100px;
        margin-bottom: 10px;
    }
    .sidebar h4{
        color: skyblue;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .sidebar a{
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
    .sidebar a:hover{
        background: #0DB8DE;
    }
    .sidebar i{
        padding-right: 10px;

    }
    label #sidebar_btn{
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
    label #sidebar_btn:hover{
        color: #0DB8DE;
    }
    #check:checked ~ .sidebar{
        left: -190px;
    }
    #check:checked ~ .sidebar a span{
        display: none;
    }
    #check:checked ~ .sidebar a{
        font-size: 20px;
        margin-left: 170px;
        width: 80px;
    }
    .content{
        margin-left: 250px;
        background: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vh;
        transition: 0.5s;
        margin: 18px 477px;
    }
    #check:checked ~ .content{
        margin-left: 60px;
    }
    #check{
        display: none;
    }
    .form-input {
    margin: 9px 0px;
    width: 100%;
    padding: 5px 13px;
    font-size: 19px;
    border: 2px solid grey;
    border-radius: 6px;
    }
    .form {
    max-width: 250px;
    margin: 0px auto;
    color: #fff;
    }
</style>
</body>
</html>