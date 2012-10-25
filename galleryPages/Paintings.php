
<?php
/*****************************************
Author:Christine Shields
Date: 9/24/2012
Description: This is the Paintings category page. It maintains the same style rules as the other category pages. The navigation is pulled in through the PHP require function.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Paintings</title>
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="../css/CSSonGalleryPages.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /></a> 
<?php
require("../template/headerHere.php");
?>  

<!--BANNER CODE -->

	<img class="roomBannerForPaintings" alt="hallway of paintings" src="../images/RoomForPaintings.jpg"/>

<div class="bannerMessage">	
<p class="b1">A touch of class. </p> 
<p class="b2">Add class to your office with our modern paintings and see the calming affect.</p>
<p class="b3"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php">See all categories.</a></p>

</div>


		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>

	
<!--END OF BANNER CODE -->	
	




<!-- Start of Paintings Blocks -->
<a href="../productDetailPages/calmPDP.php"><img  class="painting1" alt="calm painting" src="../images/painting6.jpg"/></a>

<div class="paint1Desc">
	<span class="labels"><a href="../productDetailPages/calmPDP.php">Calm</a></span><br />

</div>

<a href="../productDetailPages/hillsPDP.php"><img  class="painting2" alt="hills painting" src="../images/painting2.jpg"/></a>
<div class="paint2Desc">
	<span class="labels"><a href="../productDetailPages/hillsPDP.php">Hills</a></span><br />

</div>


<a href="../productDetailPages/fallPDP.php"><img  class="painting3" alt="fall painting" src="../images/painting5.jpg"/></a>
<div class="paint3Desc">
	<span class="labels"><a href="../productDetailPages/fallPDP.php">Fall</a></span><br />
</div>

<a href="../productDetailPages/shapesPDP.php"><img  class="painting4" alt="shapes painting" src="../images/painting4.jpg"/></a>
<div class="paint4Desc">
	<span class="labels"><a href="../productDetailPages/shapesPDP.php">Shapes</a></span><br />

</div>


<a href="../productDetailPages/springPDP.php"><img  class="painting5" alt="spring painting" src="../images/painting3.jpg"/></a>
<div class="paint5Desc">	
	<span class="labels"><a href="../productDetailPages/springPDP.php">Spring</a></span><br />

</div>

<a href="../productDetailPages/seaPDP.php"><img  class="painting6" alt="sea painting" src="../images/painting7.jpg"/></a>
<div class="paint6Desc">	
	<span class="labels"><a href="../productDetailPages/seaPDP.php">Sea</a></span><br />

</div>

<a href="../productDetailPages/cityPDP.php"><img  class="painting7" alt="city painting" src="../images/painting1.jpg"/></a>
<div class="paint7Desc">	
	<span class="labels"><a href="../productDetailPages/cityPDP.php">City</a></span><br />

</div>

</form>

</body>
</html>
