<?php
session_start();
	
    if(empty($_POST['username']))
    {
        die("The username field was empty.  Please try again.");
    }
    if(empty($_POST['password']))
    {
        die("The password field was empty.  Please try again.");
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashword = hash("md5", $password); 

	
	  preg_match("/^[0-9A-Za-z]+$/", $username) or die("Username can only contain letters and numbers.  Please press back and try again.");
    preg_match("/^[0-9A-Za-z]+$/", $password) or die("Password can only contain letters and numbers.  Please press back and try again.");
      	
	include('config.php');
	
  	// Verify Users
  	$query = "SELECT password FROM approveduser WHERE username = '$username'";
  	$result = mysql_query($query);
  	
  	if(mysql_num_rows($result) > 0)
  	{
  		$row = mysql_fetch_array($result);
  		$dbhashword = $row['password'];
		if ($hashword != $dbhashword) 
		{
   			die("The username and password do not match.  Please try again.");
		}
	}
	else
	{
		die("The username was not found in the system.");
	}
	
	//retrieving the # of times the user previously entered information.
  	$query = "SELECT Hasmet FROM approveduser WHERE username = '$username'";
	$hasmet = mysql_fetch_row(mysql_query($query));


	
	
  	mysql_close();
  		

  	$_SESSION['login'] = $username;
	$_SESSION['met'] = $hasmet[0];
	
  	header("Location: ../LoginPage.php");
?>