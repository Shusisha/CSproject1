<?php
$email = $_POST['email'];
$password = $_POST['pass'];
$username = $_POST['user'];
$mobile = $_POST['mobile'];
mysql_connect('localhost','root','');
mysql_select_db("biet");
$query = "insert into registerr(Email,Password,Username,Mobile)
         values ('$email','$password','$username','$mobile')";
mysql_query($query);
header("location:index.html");
 ?>
