<?php
	function register_user($id, $LastName, $FirstName, $email, $Password, $activationKey,$Verified) {
	  $email = strtoupper($email);
      preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email) or display_input_error("Email is invalid");        
      preg_match("/^[A-Za-z]+$/", $firstname) or display_input_error("First name is invalid");
      preg_match("/^[A-Za-z]+$/", $lastname) or display_input_error("Last name is invalid");
	  $result = mysql_query("SELECT COUNT(*) from approveduser WHERE approveduser.email = '". $email . "'");
    if (mysql_result($result, 0) > 0) display_input_error("Student account " . $email . " already exists!");
	
	$activationkey = sha1(mt_rand(10000,99999).time().$email);
	mysql_query("INSERT INTO approveduser(id, LastName, FirstName, email. Password, ActivationKey, Verified) VALUES ('" .$id . "','".$LastName."','".$FirstName."','".sha1($email.$password)."','".$ActivationKey."',FALSE)");
	
	$result = mysql_query("SELECT * from approveduser WHERE approveduser.email = '".$email."'");
	$row = mysql_fetch_array($result);
	return $row;
	}
?>