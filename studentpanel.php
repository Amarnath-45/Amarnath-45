<?php
session_start();
if(!isset($_SESSION['rollno']))
    {
        header("location: stulogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentpanel</title>
</head>
<body>
    <div class="header">
    <!--<h1>YOUR ROLL NO - <?php echo $_SESSION['rollno']?></h1>-->
    <form method="POST">
        <button type="logout" name="logout" class="logout_btn">LOG OUT</button>
    </form>
    </div>
</body>
<?php 
if(isset($_POST['logout']))
{
    session_destroy();
    header("location: stulogin.php");
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
    h1{
        text-align: center;
        color: white;
        display: flex;
        justify-content: space-between;
        padding: 0px 60px;
    }
    .logout_btn{
     padding: 11px;
     background: none;
     text-decoration: none;
     float: right;
     margin-top: 28px;
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
</html>