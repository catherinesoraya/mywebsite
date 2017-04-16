<?php
	include("header.php");
?>

        <div id= "content">
                <h2>Gallery</h2>
	<div class ="gallery">		
		
		<img id="gallery" src="pics/woman.JPG"/>
	
		<img id="gallery" src="pics/blueMosque.png"/>
		<img id="gallery" src="pics/oldman.JPG"/>
		<img id="gallery" src="pics/whitemosque.png"/>
		<img id="gallery" src="pics/readingman.png"/>
		<img id="gallery" src="pics/pipe.png"/>
		<img id="gallery" src="pics/bluemosquebazzar.png"/>
		<img id="gallery" src="pics/motherchild.png"/>
		 <img id="gallery" src="pics/soldier.png"/>
		<img id="gallery" src="pics/village.png"/>
	</div>
	</div>
	<script>
	$('.gallery').slick({
	infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
});
	</script>    



<?php
	include('footer.php');

?>        

