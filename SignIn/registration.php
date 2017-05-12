<?php

  
  $dbhost = 'localhost';     
  $dblogin = 'root';
  $dbpass = '';
  $dbselect = 'projekt';
  
  
  $con=mysqli_connect($dbhost,$dblogin,$dbpass);
  $db= mysqli_select_db( $con, $dbselect) or die("error");
  

  if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  
  
        if(!empty($_POST['Email'])) 
        {
	$query = mysqli_query($con, "SELECT * FROM user WHERE Email = '$_POST[Email]' AND Password = '$_POST[Password]'") or die(mysql_error($query));

	if(!$row = mysqli_fetch_array($query) or die(mysqli_error($row)))
	{
            $firstname = $_POST['FirstName'];
            $lastname = $_POST['LastName'];
            $email = $_POST['Email'];
            $password =  $_POST['Password'];
            $query = "INSERT INTO user (FirstName,LastName,Email,Password) VALUES ('$firstname','$lastname','$email','$password')";
            $data = mysqli_query ($con, $query)or die(mysql_error($data));
            if($data)
                {
                header("Location: register.html");
                }
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
  }



  
