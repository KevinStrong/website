<?php 
	require_once("Drapings/header.php");
?>
	<table style="width:750px;">
	 <tr>
	  <td>
	<h4>Registration please!</h4>
	<br>
	<form action="Assets/insertUser.php" method="post">
		First Name:<input type="text" name="firstName"><br><br>
		Last Name: <input type="text" name="lastName"><br><br>
		Email: <input type="text" name="email"><br><br>
		Username: <input type="text" name="username" maxlength="50"><br><br>
		Password: <input type="password" name="password" maxlength="16"><br><br>
	<input type="submit">
	</form>
	  </td>
	 </tr>
	</table>
</div>
<?php
	require_once("drapings/footer.php");
	?>