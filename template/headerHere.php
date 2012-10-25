<?php
	/*****************************************
	Author: Christine Shields & Mike Northrop
	Date: 10/9/2012
	Description: This is the template for the navigation across the entire site.
	*****************************************/
	session_start();
	
	if( isset( $_SESSION['Logged In'] ) && $_SESSION['Logged In'] == 'Yes' ) {
		$logged = "<a href='http://cs.metrostate.edu/~ics325f1208/project1/scripts/logout.php'>LOG OUT</a>";
		$welcome = "Welcome, ".$_SESSION['WelcomeName'];
	} else {
		$logged = "<a href='http://cs.metrostate.edu/~ics325f1208/project1/login1.php'>LOG IN</a>";
		$welcome = "";
	}
?>


<!-- Logo -->
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="http://cs.metrostate.edu/~ics325f1208/project1/images/ablogo2.jpg" /> </a>
<div class="logoline">The <br />Art Bus<span class="registered">&reg;</span></div>

<div class="welcome"><?php echo $welcome; ?></div>



<!--TOP NAVIGATION-->

<div class="menu2">
<div class="a">WHO WE ARE
<ul class="drop"> 

<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/info/about.php">About Art Bus</a></li>
<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/info/contact.php">Contact</a></li>
<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy</a></li>

</ul>
</div>

</div>

<div class="menu3">
<div class="a">WHAT WE DO
<ul class="drop"> 

<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paint.php">Paint</a></li>
<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Decor.php">Decor</a></li>
<li><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paintings.php">Paintings</a></li>
</ul>
</div>
</div>

<div class="menu4">
<div class="a">OUR PHILOSOPHY
<ul class="drop">
<li><a style="text-decoration:none" target="_blank" href="http://jigsaw.w3.org/css-validator/">CSS Validation</a></li>
<li><a style="text-decoration:none" target="_blank" href="http://validator.w3.org/">HMTL Validation</a></li>

</ul>

</div>
</div>

<div class="menu5">
<div class="a"><a href="http://cs.metrostate.edu/~ics325f1208/project1/index.php">HOME</a>


</div>
</div>

<div class="menu6">
<div class="a"><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/info/contact.php">CONTACT</a>
</div>
</div>


<div class="menu7">
<div class="a"><a style="text-decoration:none" href="http://cs.metrostate.edu/~ics325f1208/project1/info/community.php">COMMUNITY</a>
</div>
</div>

<div class="menu8">
<div class="a"><?php echo $logged; ?>
</div>
</div>

<!-- END OF TOP NAVIGATION -->

