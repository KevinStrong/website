<?php 
	require_once("Drapings/header.php");
?>
	 <script src="Assets/MainPageScript.js"></script>
	<table>
	  <tr>
		<th colspan="2">
			<h2>The exciting sequal to <text id = "title">Kevin Strong is Awesome</text>   IS BACK</h2>
		</th>
	  </tr>
	  <tr>
		<th><a href="javascript:gotoshow()"><img src="" name="slide" border=0 width=300 height=375></a>	
			<script>
			//configure the paths of the images, plus corresponding target links
			slideshowimages("Images/IMG_1.JPG","Images/IMG_2.JPG","Images/IMG_3.JPG","Images/IMG_4.JPG","Images/IMG_5.JPG")

			//configure the speed of the slideshow, in miliseconds
			var slideshowspeed=2000

			var whichimage=0 //Selects starting image from 0.
			function slideit(){
			if (!document.images)
			return
			document.images.slide.src=slideimages[whichimage].src
			if (whichimage<slideimages.length-1)
			whichimage++
			else
			whichimage=0
			setTimeout("slideit()",slideshowspeed)
			}
			slideit()
			</script>	
		<td>
			<div>
			<h2>Cool Things I do</h2>
			<ul>
			<li>Eat</li>
			<li>Breath</li>
			<li>Show up to class, usually</li>
			<li>Be nice to people</li>
			</ul>
			<br/>
			<h2>Places I've been</h2>
			<p>Look at some of the exciting pictures I've taken during my travels!</p>
			<br/>
			<h2>Things I've Made</h2>
			<p>Just Kidding I haven't made anything</p>
			<br/>
			<h2>Indepth Reasons I'm Awesome</h2>
			<p>Were you expecting anything here?  Sorry there aren't any reasons, I just am.</p>
			<br/>
			<h2>About Me</h2>
			<p>I'm just a dude bro who is trying to get by in the world.  I like food, women, rock climbing <br> and playing video games.  I like to think I'm pretty cool, I hope you think so too.</p>
			</div>
		</td>
	  </tr>
	  <tr>
		<th colspan = "2">
		 <h2>I decided to put some dummy text in here to better show off the style of the table.</h2>  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt rhoncus enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas sem velit, interdum ac tristique in, dapibus et leo. Praesent convallis, ante eget commodo volutpat, dui ipsum fermentum mi, a viverra odio erat id magna. Mauris vel urna nibh. Fusce id nulla a elit placerat dignissim ut id tortor. Nulla facilisi. Maecenas sollicitudin, nulla nec fermentum tincidunt, turpis urna cursus orci, euismod porta quam dui quis tortor. Duis nec neque nulla, pharetra convallis ante. Phasellus quis fringilla dui. Aliquam id lacus sit amet lorem condimentum rhoncus non sed erat. Duis nisi diam, dapibus quis elementum eget, auctor et dui.

Mauris suscipit, risus et luctus pretium, libero tellus pharetra ligula, eget lobortis arcu libero eu odio. Aliquam erat volutpat. Etiam hendrerit nisl lacus. Pellentesque ut malesuada erat. Nunc egestas sollicitudin vulputate. Vivamus vitae dolor pretium nunc vehicula hendrerit in vitae massa. Mauris quis leo orci. Vivamus non neque quis lectus porttitor vestibulum. Duis cursus dignissim ultrices. In eget leo felis.

Duis ut purus est. Nunc vitae quam diam. Quisque vel arcu ac velit dignissim aliquam et sed sem. Nullam sollicitudin ornare ligula, eu ultricies est lacinia vitae. In ac nulla id dolor condimentum venenatis a at odio. In posuere magna vitae ipsum sagittis dapibus. Proin congue laoreet ipsum, vitae dignissim enim malesuada a.

Vivamus lobortis pulvinar eleifend. Cras feugiat condimentum elit. Curabitur vitae arcu vitae tellus gravida suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc et ipsum augue, et mattis turpis. Fusce quis nibh hendrerit diam semper malesuada quis in lacus. Aliquam aliquet, odio ut elementum dignissim, lorem orci fermentum sem, viverra euismod nibh nulla dapibus ligula. Aenean at commodo elit. Donec sed nisl eget dui viverra consectetur. In id leo ipsum. Etiam sed diam libero, vitae suscipit odio. Aenean tincidunt lorem at metus semper sollicitudin. Nulla adipiscing malesuada quam vel porta. Nullam dignissim sem eu odio suscipit eleifend.

Nullam suscipit tincidunt mi vel aliquet. Pellentesque sapien nisi, porta vitae aliquam ut, dictum rhoncus velit. Sed malesuada pretium nulla, nec tincidunt enim vulputate at. Duis sollicitudin libero vitae est hendrerit ut euismod nunc imperdiet. Nam euismod, lorem eget gravida sodales, diam massa blandit dui, vitae elementum enim dui ac metus. Quisque id lorem orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla purus, rhoncus id faucibus vel, sollicitudin id arcu. Curabitur mollis massa vel turpis gravida lobortis. Nulla vitae felis augue. Vivamus sed mauris sit amet mi lobortis scelerisque rutrum at erat. Quisque quis sem vitae tellus dapibus volutpat. Nunc posuere turpis scelerisque turpis euismod sit amet elementum metus convallis.
		</p>
		</th>
	  </tr>
	</table>
	  <div id="citation">
	   <a href="http://javascriptkit.com">JavaScript Kit</a>	
	  </div>
    </div>
<?php		require_once("Drapings/footer.php");
?>