<?php
extract($_REQUEST);
$del=$_REQUEST['del'];
$conn=mysqli_connect("localhost","id4089733_multilogin","qwerty786","id4089733_multi_login");
$sql=mysqli_query($conn,"select * from upload where id='$del'");
$row=mysqli_fetch_array($sql);
unlink("files/$row[name]");
mysqli_query($conn,"delete from upload where id='$del'");
header("Location:index45.php");
?>