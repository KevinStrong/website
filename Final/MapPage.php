<?php 
	require_once("Drapings/header.php");
?>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="https://raw.github.com/jbdemonte/gmap3/master/gmap3.js"></script>
	  <script src="Assets/MapPageScript.js"></script>  
	<table>
	  <tr>
		<td colspan="2">
			<h2>This is where I'm from!</h2>
		</td>
	  </tr>
	  <tr>
		<td>
		<div id="my_map">$().gmap3();
		</div>
		</td>
		<td>
			<p>This is my hometown of Richardson Texas!  Its a pretty cool place to be!</p>
		</td>
	  </tr>
	</table>
<?php		require_once("Drapings/footer.php");
?>