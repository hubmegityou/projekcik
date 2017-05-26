<?php


  $dbhost = 'localhost';     
  $dblogin = 'root';
  $dbpass = '';
  $dbselect = 'projekt';
  
  
  $con=mysqli_connect($dbhost,$dblogin,$dbpass);
  $db= mysqli_select_db( $con, $dbselect) or die("error");


$login=$_POST['Email'];
$pass= $_POST['Password'];

if (isset ($login) &&  isset ($pass)) {
    
    
    if ($login=="ola.stolorz@gmail.com"||$login=="magdalena.ignacok@gmail.com"){
        
        
        $pas = mysqli_query($con, "SELECT * FROM user WHERE Email = '$login'") or die(mysql_error($pas));
        $row = mysqli_fetch_assoc($pas);
 

    if ($pass == $row['Password']) {    
 
            setcookie('admin_name', $login, time()+60*60*24*365, '/');
            setcookie('password', $pass, time()+60*60*24*365, '/');
            setcookie('firstname', $row['FirstName'],time()+60*60*24*365, '/' );
            setcookie('lastname', $row['LastName'],time()+60*60*24*365, '/' );
            setcookie('ID', $row['ID_logowanie'],time()+60*60*24*365, '/' );
            
            header("Location: ../index.php");
    } else {header("Location: index.php");}


        
        
    } else {
    
    
  $pas = mysqli_query($con, "SELECT * FROM user WHERE Email = '$login'") or die(mysql_error($pas));
  $row = mysqli_fetch_assoc($pas);
 

    if ($pass == $row['Password']) {    
 
            setcookie('username', $login, time()+60*60*24*365, '/');
            setcookie('password', $pass, time()+60*60*24*365, '/');
            setcookie('firstname', $row['FirstName'],time()+60*60*24*365, '/' );
            setcookie('lastname', $row['LastName'],time()+60*60*24*365, '/' );
            setcookie('ID', $row['ID_logowanie'],time()+60*60*24*365, '/' );
            
            header("Location: ../index.php");
    } else {header("Location: index.php");}


}}
?>
