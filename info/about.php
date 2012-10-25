
<?php
/*****************************************
Author: Christine Shields & Mike Northrop
Date: 10/10/2012
Description: This is the About Art Bus page. It relies on the require function to pull in the header.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>About The Art Bus</title>
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /> </a>
<?php
require("../template/headerHere.php");
if ( isset( $_SESSION['Logged In'] ) && $_SESSION['Logged In'] = 'Yes' ){
} else {
	header(
		"location:http://cs.metrostate.edu/~ics325f1208/project1/login1.php"
	);
}
?>  


<div class="aboutMessage">	
<p class="aboutStatement">About The Art Bus</p> 
<p>The Art Bus is the one stop location for all of your business decor needs. We provide a full assortment of paints, decor, and paintings. 
Choose from modern and hip to classic vintage styles. We also provide a full range of design services to ensure you are creating the
environment you need to promote a happy and productive workplace. We have been around for 10 years and have designed many of the newer
buildings in the Twin Cities. Check us out and drop us a call if you have any questions.</p>
<p>The Art Bus is the one stop location for all of your business decor needs. We provide a full assortment of paints, decor, and paintings. 
Choose from modern and hip to classic vintage styles. We also provide a full range of design services to ensure you are creating the
environment you need to promote a happy and productive workplace. We have been around for 10 years and have designed many of the newer
buildings in the Twin Cities. Check us out and drop us a call if you have any questions.</p>
<p>The Art Bus is the one stop location for all of your business decor needs. We provide a full assortment of paints, decor, and paintings. 
Choose from modern and hip to classic vintage styles. We also provide a full range of design services to ensure you are creating the
environment you need to promote a happy and productive workplace. We have been around for 10 years and have designed many of the newer
buildings in the Twin Cities. Check us out and drop us a call if you have any questions.</p>


</div>


		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>

	
<!--END OF BANNER CODE -->	

</form>

</body>
</html>