<?php



$dbhost = 'localhost';     
  $dblogin = 'root';
  $dbpass = '';
  $dbselect = 'projekt';
  
  
  $con=mysqli_connect($dbhost,$dblogin,$dbpass);
  $db= mysqli_select_db( $con, $dbselect) or die("error");
  
  $pas=mysqli_query($con, "DELETE FROM user WHERE ID_logowanie =".$_COOKIE['ID']) or die(mysql_error($pas));
  header("Location: LogOut.php");


















