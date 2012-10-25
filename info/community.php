
<?php
	/*****************************************
	Author: Christine Shields & Mike Northrop
	Date: 10/10/2012
	Description: This is the community engagement page. It relies on the require function to pull in the header.
	*****************************************/
	
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Community</title>
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


<div class="communityMessage">	
<p class="communityStatement">Community Engagement</p> <br />
<p><h2>Sharing and Caring Hands</h2></p>
<img class="sharingImage" src="../images/sharing.jpg" alt="sharing and caring hands image">
<p>Once a quarter we volunteer at Sharing and Caring Hands, a local homeless shelter. Here we dish out food for the hungry.<p>
</div>


<div class="foodShelf">
<p><h2>Local Food Shelves</h2></p>
<img class="foodShelfImage" src="../images/foodshelf.jpg" alt="food shelf image">
<p>We donate 5% of our profits directly to local food shelves in the Twin Cities.</p>

</div>


<div id="footer" class="footer">
	
			<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">Privacy Statement</a>. </p>
		</div>
	</div>
	
<!--END OF BANNER CODE -->	

</form>

</body>
</html>