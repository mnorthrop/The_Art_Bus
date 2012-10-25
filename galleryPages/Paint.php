
<?php
/*****************************************
Author:Christine Shields
Date:9/24/2012
Description:This is the Paint category page. It maintains the same style rules as the other category pages. The navigation is pulled in through the PHP require function.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Paint Colors</title>
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
<img class="roomBannerForPaint" alt="colorful conference room" src="../images/confRoomForPaint.jpg"/>

<div class="bannerMessage">	
<p class="b1">Inspire through color. </p> 
<p class="b2">Help your employees stay energized and inspired through a colorful environment.</p>
<p class="b3"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php">See all categories.</a></p>

</div>


		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>

	
<!--END OF BANNER CODE -->	
	




<!--BLOCKS-->
<a href="../productDetailPages/redPDP.php"><img  class="redPaintSample" alt="red color sample" src="../images/redPaint.png"/></a>

<div class="colorRed">
	<span class="labels"><a href="../productDetailPages/redPDP.php">Red</a></span><br />
</div>

<a href="../productDetailPages/greenPDP.php"><img  class="greenPaintSample" alt="green color sample" src="../images/greenPaint.png"/></a>
<div class="colorGreen">
	<span class="labels"><a href="../productDetailPages/greenPDP.php">Green</a></span><br />
</div>


<a href="../productDetailPages/grayPDP.php"><img  class="grayPaintSample" alt="gray color sample" src="../images/grayPaint.png"/></a>
<div class="colorGray">
	<span class="labels"><a href="../productDetailPages/grayPDP.php">Gray</a></span><br />
</div>

<a href="../productDetailPages/purplePDP.php"><img  class="purplePaintSample" alt="purple color sample" src="../images/purplePaint.png"/></a>
<div class="colorPurple">
	<span class="labels"><a href="../productDetailPages/purplePDP.php">Purple</a></span><br />
</div>


<a href="../productDetailPages/yellowPDP.php"><img  class="yellowPaintSample" alt="yellow color sample" src="../images/yellowPaint.png"/></a>
<div class="colorYellow">	
	<span class="labels"><a href="../productDetailPages/yellowPDP.php">Yellow</a></span><br />
</div>

<a href="../productDetailPages/bluePDP.php"><img  class="bluePaintSample" alt="blue color sample" src="../images/bluePaint.png"/></a>
<div class="colorBlue">	
	<span class="labels"><a href="../productDetailPages/bluePDP.php">Blue</a></span><br />
</div>

<a href="../productDetailPages/orangePDP.php"><img  class="orangePaintSample" alt="orange color sample" src="../images/orangePaint.png"/></a>
<div class="colorOrange">	
	<span class="labels"><a href="../productDetailPages/orangePDP.php">Orange</a></span><br />
</div>

<!--END OF BLOCKS-->

</form>

</body>
</html>
