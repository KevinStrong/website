<?php 
	require_once("Drapings/header.php");
?>
	<table style="width:750px;">
		<tr>
		 <td>
	<?php 
		if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))
		{//Login
			echo '<h4>Please login below:</h4>';
			echo '<br><form action="Assets/verifyLogin.php" method="post">';
			echo 'Username: <input type="text" name="username" maxlength="50"><br><br>';
			echo 'Password: <input type="password" name="password" maxlength="16"><br><br>';
			echo '<input type="submit">';
			echo '</form>';
			echo '<br><a href="signup.php">If you do not have account click here  to sign up.</a>';
		}
		else
		{//Already Logged in
			include('Assets/config.php');
		  	$query = "SELECT firstName, lastName, email, verified FROM approveduser WHERE username = '".$_SESSION['login']."'";
  			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			if($row['verified'] == '0')
			{//Not yet verified
				echo '<p>You still need to activate your account!</p>';
				echo '<p>Enter you the activation key "I love Kevin!" below:</p>';
				echo '<p>The email function seems to be very computer specific so I put this workaround in</p>';
				echo '<br><form action="Assets/activateAccount.php" method="post">';
				echo '<input type="text" name="activation" maxlength="256"> ';
				echo '<input type="submit">';
			}
			else {//Welcome
				echo '<h4>Welcome '.$_SESSION['login'].'! Explore the website by clicking on the links above. <br>  You have met Kevin ' . $_SESSION['met'].' times.  
					<br>DON\'T FORGET TO LOG OUT</h4>';
			}
			//Logout
			echo '<br><a href="Assets/logout.php">Click here to logout!</a><br>';
		}
	?>
		 </td>
		</tr>
	</table>	
 <?php		require_once("Drapings/footer.php");
?>