
<?php
/*****************************************
Author: Christine Shields
Date: 9/24/2012
Description: This is the Home page. It uses the PHP require function to pull in the navigation. It also links to the category pages and other administrative pages.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>The Art Bus</title>
<link rel="stylesheet" href="css/CSSonIndex.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="images/ablogo2.jpg" /></a> 

<?php
require("template/headerHere.php");
?>     

<img class="room" alt="conference room" src="images/room.jpg"/>


<!--BLOCKS-->
<div class="leftblock">Hello</div>

<div class="block1">
    <span class="labels"><a class="leftBlockLinks" href="galleryPages/Decor.php">Decor</a></span><br />
	The decor in an office environment has the ability to inspire and improve productivity. 

</div>

<div class="block2">
	<span class="labels"><a class="leftBlockLinks" href="galleryPages/Paint.php">Custom Paint</a></span><br />
	Choose from our custom paint choices in order to set the tone of your office and inspire creativity.

	<!--  <input type="button" value="Explore" onclick="parent.location='About/servicesoffered.html'"/>  -->
</div>

<div class="block3">
	<span class="labels"><a class="leftBlockLinks" href="galleryPages/Paintings.php">Art Collections</a></span><br />
	We provide a full selection of paintings to set the tone of business in your office.

</div>



<!--END OF BLOCKS-->

<div class="statement1">

"The Art Bus&reg; sells modern art which inspires creativity in the office." <span class="name">- Christine Shields, CEO</span></div>



<!--FOOTER-->
<br /><br />
<div class="footer">&copy;2012 The Art Bus | <a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a></div>

<!-- <form> -->
</form>
</body>

</html>


