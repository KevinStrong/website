<?php

session_start();

$location= mysql_real_escape_string($_POST['location']);
$time=$_POST['time'];
$date=$_POST['date'];

preg_match("/^([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $time) or die("Please follow the hh:mm:ss format");
preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date,$parts) or die("Please follow the yyyy-mm-dd format");
 checkdate($parts[2], $parts[3], $parts[1]) or die("Invalid date, please try again");

include('config.php');

//Setting the name of the entry based off the user account.
	$username = $_SESSION['login'];
	$query = "SELECT LastName FROM approveduser WHERE username = '$username'";
	$name = mysql_fetch_row(mysql_query($query));
	$fullname = $name[0];
	$query = "SELECT FIRSTNAME FROM approveduser WHERE username = '$username'";
	$name = mysql_fetch_row(mysql_query($query));
	$fullname .= " ";
	$fullname .= $name[0];
	

$query = "INSERT INTO meetings VALUES (NULL, '$location', '$time', '$date', '$fullname')";
mysql_query($query);


//increment total user entries.
$metnumber = $_SESSION["met"]+1;
$_SESSION["met"] = $metnumber;


$query = "UPDATE approveduser SET Hasmet='$metnumber' WHERE username='$username'";
mysql_query($query);

mysql_close(); 

//Flag this session as recording a meeting.
$_SESSION['today']=1;

header("Location: ../Locations.php");
?>