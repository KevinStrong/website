
$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	
   //Default Starting Page Results
	Display_Load();
	$("#meetinglist").load("pagination_data.php?page=1pages=");
	


	
	
	//Pagination Click
	$("#pagination li").click(function(){
	
//CSS Styles
$("#pagination li")
.css({'color' : '#0063DC'});

$(this)
.css({'color' : '#FF0000'})

		//Loading Data
		var pageNum = this.id;
		$("#meetinglist").load("pagination_data.php?page=" + pageNum);
	});
	
	
});