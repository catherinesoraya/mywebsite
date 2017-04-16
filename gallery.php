<?php
	include("header.php");
?>

        <div id= "content">
                <h2>Gallery</h2>
	</div>
	<div id ="slider">
	<div class ="gallery">		
		
		<img id="gallery" src="pics/woman.JPG"/>
		<img id="gallery" src="pics/oldman.JPG"/>
	
		<img id="gallery" src="pics/out2.JPG"/>
		<img id="gallery" src="pics/out1.JPG"/>

		<img id="gallery" src="pics/ou3.JPG"/>
	</div>
	</div>
	<script>
	
	$('.gallery').slick({
 		 infinite: true,
 		 slidesToShow: 3,
 		 slidesToScroll: 6

	});	
	</script>    



<?php
	include('footer.php');

?>        

