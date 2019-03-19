<?php
	session_start();
    if(empty($_POST['activation']))
    {
        die("The activation key field was empty. Please try again.");
    }
         
    $userkey = trim($_POST['activation']);
          	
include('config.php');

  	$username = $_SESSION['login'];
  	// Verify Users
  	$query = "SELECT ActivationKey FROM approveduser WHERE username = '$username'";
  	$result = mysql_query($query);  	
  	$row = mysql_fetch_array($result);
  	$dbkey = $row['ActivationKey'];
	if ($userkey == $dbkey) 
	{
   		$query = "UPDATE approveduser SET verified = '1' WHERE username = '$username'";
   		mysql_query($query);
   		mysql_close();
   		header("Location: ../LoginPage.php");
   	}
	else
	{
		die("The activation key you entered was not correct.  Please try again.");
	}
?>