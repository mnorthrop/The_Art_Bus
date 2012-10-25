 <?php
/*****************************************
Author:Christine Shields 
Date: 9/24/2012
Description: This is the Store Front. Shows the available categories and links to each category page.
*****************************************/
?>  

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

	
	<title>Categories</title>
	
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="../css/CSSonGalleryPages.css" type="text/css" media="screen, print" />
	
	
</head>
<body>

<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /></a> 

<?php
require('../template/headerHere.php');
?>  

<!--BLOCKS-->

<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paintings.php"><img  alt="Painting Image" class="block1Image" src="../images/paintingCatImg.jpg"/></a>a
<div class="content_block1">
	<span class="labels"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paintings.php">Original Paintings</a></span>
	<p>Sort through our collection of original paintings to add a touch of class to your office.</p>
	<br />
	<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paintings.php"><b>Find a painting</b></a>
</div>

<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Decor.php"><img  class="block2Image" alt="Image of Vase" src="../images/decorCatImg.jpg"/></a>
<div class="content_block2">
	<span class="labels"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Decor.php">Decorative Pieces</a></span>
	<p>Make a statement by updating the decor in your office. </p>
	<br />
	<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Decor.php"><b>Explore decor</b></a>
	
</div>


<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paint.php"><img  class="block3Image" alt="image of paint pallette" src="../images/paintCatImg.jpg"/></a>
<div class="content_block3">	
	<span class="labels"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paint.php">Custom Paint</a></span>
	<p> We provide a full array of colors to set the tone in your office.</p>
	<br />
	<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/Paint.php"><b>Pick a color</b></a>
	<!-- <input type="button" value="Log In" onclick="parent.location='Industries/tabspage1Manufacturing.html'"/>  -->
</div>



<!--END OF BLOCKS-->

		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://www.wfgweb.com" target="_blank">Privacy Statement</a>. </p>
		</div>


</form>

</body>
</html>
