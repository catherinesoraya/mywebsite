<?php
	include("header.php");
	session_start();
?>
	<div id="navigation">
                        <ul>
                                <li><a href="index.php" style="background-color:#d8d804">Home</a></li>
                                <hr>
                                <li><a href="gallery.php">Gallery</a></li>
                                <hr>                                
				<li><a href="about.php">About</a></li> 
                                <hr>                                
				<li><a href="forum.php" id="nav4">Forum</a></li>                        
			</ul>                
	</div>

	<div id="content">
                <h2>Home</h2>
                <h3>Recent News</h3>
        <span id="recentText1">  <h4>Coming Soon: A Podcast! 04/01/17</h4>
		<p>Hello friends, the staff here ManucherYazdanpour.com have decided to start working on making a podcast together. We are hoping to secure some amazing guest spots by relatives of other artists like Manucher. We want to know their stories and share ours with them. There is something so mysterious about artists who pass over at such a young age and leave their beautiful work for us to discover and marvel over. Keep checking in for more details. -MGMT</p>

        <span id="recentText">  <h4>New Pieces from Baltimore 12/12/2016</h4>
        <p> Hello dear members, we have received two new beautiful pieces of Manucher's work from a fellow lover of the arts who hails from Baltimore, Maryland. Its always so fun for us to secure new pieces of art and the stories that come along with them. These pieces in particular demonstrate Manucher's use of vivid colors to paint the scenes of Iranian vistas. If you are enjoying these pieces, feel free to make a tread in the forum. 
	-MGMT </p>
	</span>
        <span id="recentPics">
          <img id="recentPic" src="pics/recent1.jpg"/>
                <img id="recentPic" src="pics/recent2.jpg"/>
        </span>

        </div>

<?php
	include("footer.php");

?>
