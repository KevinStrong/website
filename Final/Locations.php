<?php
	require_once("Drapings/header.php");
?>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<script src="Assets/AccordionScript.js"></script>  
	<script src="Pagination.js"></script>
	<table>
		<tr>
		 <td>
			<div id="accordion" style="width:750px;">
				<div class ="group">
				<h3><a href="#">Submit a Kevin sighting!</a></h3>
<?php 
		if (isset($_SESSION['login']) && $_SESSION['login'] != ''){
			include('Assets/config.php');
		  	$query = "SELECT firstName, lastName, email, verified FROM approveduser WHERE username = '".$_SESSION['login']."'";
  			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			mysql_close();
			if($row['verified'] == '0'){//Account not yet activated
				echo "You need to verify your account!";
			}
			
			else if (isset($_SESSION['today'])){//Already gave user input
				echo "Thanks for the input!";
			}
		
			else if (isset($_SESSION['met']) && $_SESSION['met'] < 5){//Allowed to enter date
				echo "<form action=\"Assets/InsertMeeting.php\" method=\"post\">";
				echo "Location of Meeting: <input type=\"text\" name=\"location\"><br>";
				echo "Time of Meeting, use hh:mm:ss format: <input type=\"text\" name=\"time\"><br>";
				echo "Date of Meeting, use yyyy-mm-dd format: <input type=\"text\" name=\"date\"><br>";
				echo "<input type=\"Submit\">";
				echo "</form>";
			}
			
			else{//At max entries for the account
				echo "met: " . $_SESSION['met'] . "<br>";
				echo "Sorry You can only submit up to 5 meetings";
			}
		}
		else
		{
			echo '<h2>You must log in to submit a Kevin Sighting!</h2>';
		}
	?>
				</div>
				<div class ="group">
				<h3><a href="#">Click to See where I've been spotted!</a></h3>
				<?php
				$per_page = 3; //Change the value in pagination_date.php, InsertMeeting and StoryPage too!
				//getting number of rows and calculating number of pages
				include('Assets/config.php');
				$sql = "select * from meetings";
				$rsd = mysql_query($sql);
				$count = mysql_num_rows($rsd);
				$pages = ceil($count/$per_page);
				mysql_close();
				?>
				<div id="meetinglist"></div>
				<ul id="pagination">
				<?php
							//Show page links
							echo 'Pages <br>';
							for($i=1; $i<=$pages; $i++)
							{
								echo '<li id="'.$i.'">'.$i.'</li>';
							}
							?>
						</ul>	
				</div>
				</div>
		 </td>
		</tr>
	</table>
 <?php		require_once("Drapings/footer.php");
?>