
<?php
/*****************************************
Author: Christine Shields & Mike Northrop
Date: 10/10/2012
Description: This is the contact us page. It relies on the require function to pull in the header.
*****************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="../css/CSSonIndex.css" type="text/css" media="screen, print" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

</head>

<body>
<form action=" " id="form" name="form">
<a href="http://cs.metrostate.edu/~ics325f1208/project1/galleryPages/storeFront.php"><img class="logo" alt="logo" src="../images/ablogo2.jpg" /></a> 

<?php
require("../template/headerHere.php");
if ( isset( $_SESSION['Logged In'] ) && $_SESSION['Logged In'] = 'Yes' ){
} else {
	header(
		"location:http://cs.metrostate.edu/~ics325f1208/project1/login1.php"
	);
}
?>  


<div class="contactMessage">	
<p class="contactStatement">Contact Us</p> 
<p>PHONE</p>
800-555-7634
<br /><br />
<p>E-MAIL</p>
TheArtBus@gmail.com
<br /><br />
<p>ADDRESS</p>
12345 Marketplace Center
<p>Suite 2230</p>
<p>Minneapolis, MN  55121</p>



</div>


		<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>

	
<!--END OF BANNER CODE -->	

</form>

</body>
</html>