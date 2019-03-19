<?php

	session_start();
	
  	$firstName = $_POST['firstName'];
  	$lastName = $_POST['lastName'];
  	$email = $_POST['email'];
  	$username = trim($_POST['username']);
  	$password = trim($_POST['password']);
    $hashword = hash("md5", $password); 
  	
	
  	preg_match("/^[a-zA-Z ]+$/", $firstName) or die ("Invalid character(s) in first name.  Press back to try again.");
  	preg_match("/^[a-zA-Z ]+$/", $lastName) or die ("Invalid character(s) in last name.  Press back to try again.");
  	preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email) or die ("Invalid email.  Press back to try again.");
  	preg_match("/^[0-9A-Za-z]+$/", $username) or die("Username can only contain letters and numbers.  Press back to try again.");
  	preg_match("/^[0-9A-Za-z]+$/", $password) or die("Password can only contain letters and numbers.  Press back to try again.");

  	//$activationkey = sha1(mt_rand(10000,99999) . time());
	//The workaroudn activation key
	$activationkey = 'I love Kevin!';
  		
	include('config.php');

		//Check to make sure Username and email address is unique
	$query = "SELECT username FROM approveduser WHERE username = '".$username."'";
	$result = mysql_query($query);
		if(mysql_num_rows($result) > 0 )
    {
        die("That Username already exists.  Please try again.");
    }	
	
	$query = "SELECT username FROM approveduser WHERE email = '".$email."'";
	$result = mysql_query($query);
		if(mysql_num_rows($result) > 0 )
    {
        die("That email address already exists.  Please try again.");
    }	

  	$query = "INSERT INTO approveduser (ID, LastName, FirstName, email, username, Password, ActivationKey, Verified,Hasmet) 
	VALUES('','$firstName','$lastName','$email','$username','$hashword','$activationkey','false','0')";
  	mysql_query($query);
  	mysql_close();
  		
	$_SESSION['met']=0;
  	$_SESSION['login']=$username;
	/*
		$to = "$email";
		$subject = "Welcome to the Kevin's Website";
		$message = "Hello $firstName!  This is your activation key: $activationkey";
		$from = "Kevin@Strong.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		die($to .$subject .$message .$headers);
	//Email turned off for submission.
	*/
  	header("Location: ../LoginPage.php");	 
?>