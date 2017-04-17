<?php
	include("header.php");
?>
	<div id="navigation">
                        <ul>
                                <li><a href="index.php" id="nav1">Home</a></li>
                                <hr>
                                <li><a href="gallery.php" style="background-color:#d8d804" >Gallery</a></li>
                                <hr>
                                <li><a href="about.php" id="nav3">About</a></li>
                                <hr>
                                <li><a href="forum.php" id="nav4">Forum</a></li>
                        </ul>
                </div>
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

