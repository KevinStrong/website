<?php

include('Assets/config.php');

$per_page = 3; //change the value in StoryPage.php and InsertMeeting.php too

if($_GET)
{
$page=$_GET['page'];
}

//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from meetings order by id limit $start,$per_page";
$rsd = mysql_query($sql);
?>
		
		<?php
		//Print the contents
		while($row = mysql_fetch_array($rsd))
		{			
			echo $row['name']." saw Kevin Strong at ".$row['location']." on ".$row['date']." at ".$row['time']; echo '<br>';

		} //while
		mysql_close();
		?>

