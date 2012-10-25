
<?php
/*****************************************
Author: Christine Shields
Date: 9/24/2012
Description: This is the Gray Globe product detail page. It maintains the same style rules as all other product detail pages. The navigation is pulled in through the PHP require function.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Gray Globe</title>
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="../css/CSSonPDP.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /> </a>
<?php
require("../template/headerHere.php");
?>  

<!--BANNER CODE -->

<img class="productImageGlobe" alt="gray globe" src="../images/decor6.jpg"/>

<div class="bannerMessageDecor">	
<p class="productName">Pivoting Globe</p> 
<p class="b2">This globe will give you a new perspecitve on the world.</p>
<p class="b3">Height: 14 inches</p>
<p class="b4">$145</p><br />
<p class="b5">Add to cart</p>
</div>


		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>

<!--END OF BANNER CODE -->	

</form>

</body>
</html>