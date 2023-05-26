<?php
include "connect.php";
$roomno = $_GET['roomno'];
mysqli_query($link,"delete from room where roomno = $roomno");
?>
<script>
window.location="room.php";
</script>