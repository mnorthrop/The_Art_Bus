
<?php
/*****************************************
Author:Christine Shields 
Date: 9/24/2012
Description: This is the Decor category page. It maintains the same style rules as the two other category pages. The navigation is pulled in through the PHP require function.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Decor</title>
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="../css/CSSonGalleryPages.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /> </a>

<?php
require('../template/headerHere.php');
?>  

<!--BANNER CODE -->
<img class="roomBannerForDecor" alt="office image" src="../images/RoomForDecor.jpg"/>

<div class="bannerMessage">	
<p class="b1">Make a statement. </p> 
<p class="b2">Decor adds a new dimension to your space which makes you feel at home.</p>
<p class="b3"><a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php">See all categories.</a></p>

</div>



	
<!--END OF BANNER CODE -->	
	


<!-- Start of Paintings Blocks -->
<a href="../productDetailPages/lamp1PDP.php"><img  class="Decor1" alt="green lamp" src="../images/decor1.jpg"/></a>

<div class="Decor1Desc">
	<span class="labels"><a class="gallery" href="../productDetailPages/lamp1PDP.php">Lamp 1</a></span><br />
</div>

<a href="../productDetailPages/lamp2PDP.php"><img  class="Decor2" alt="antique lamp" src="../images/decor4.jpg"/></a>
<div class="Decor2Desc">
	<span class="labels"><a href="../productDetailPages/lamp2PDP.php">Lamp 2</a></span><br />
</div>


<a href="../productDetailPages/vase1PDP.php"><img  class="Decor3" alt="tall color tiled vase" src="../images/decor3.jpg"/></a>
<div class="Decor3Desc">
	<span class="labels"><a href="../productDetailPages/vase1PDP.php">Vase 1</a></span><br />
</div>

<a href="../productDetailPages/vase2PDP.php"><img  class="Decor4" alt="glass vase" src="../images/decor2.jpg"/></a>
<div class="Decor4Desc">
	<span class="labels"><a href="../productDetailPages/vase2PDP.php">Vase 2</a></span><br />
</div>


<a href="../productDetailPages/globe1PDP.php"><img  class="Decor5" alt="gray globe" src="../images/decor6.jpg"/></a>
<div class="Decor5Desc">	
	<span class="labels"><a href="../productDetailPages/globe1PDP.php">Globe 1</a></span><br />
</div>


<a href="../productDetailPages/globe2PDP.php"><img  class="Decor6" alt="Hercules globe" src="../images/decor5.jpg"/></a>
<div class="Decor6Desc">	
	<span class="labels"><a href="../productDetailPages/globe2PDP.php">Globe 2</a></span><br />
</div>


<a href="../productDetailPages/glassPDP.php"><img  class="Decor7" alt="glass sculpture" src="../images/decor7.jpg"/></a>
<div class="Decor7Desc">	
	<span class="labels"><a href="../productDetailPages/glassPDP.php">Glass</a></span><br />
</div>


<!--FOOTER-->
		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>


	
</form>

</body>
</html>
