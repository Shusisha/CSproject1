<?php
$email = $_POST['email'];
$password = $_POST['pass'];
mysql_connect('localhost','root','');
mysql_select_db("biet");
$query="select * from registerr where Email='$email' and Password='$password' ";
$res = mysql_query($query);
if($row = mysql_fetch_array($res,MYSQL_BOTH)){
  header("location:academic.html");
}else {
  header("location:index.html");
}
 ?>
