<?php
	/*****************************************
	Author: Mike Northrop & Christine Shields
	Date: 10/11/2012
	Description: This is the login page.
	*****************************************/
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
	<title>Log In</title>
	<link rel="stylesheet" href="css/CSSonIndex.css" type="text/css" media="screen, print" />
	<link rel="stylesheet" href="css/CSSonForms.css" type="text/css" media="screen, print" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="../project1/js/jquery.js"></script>
	<script type="text/javascript" src="../project1/js/jquery.validate.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(':text')[0].focus();
			$('#form').validate();
		});
	</script>
	</head>
	<body>
		<form id="form" name="form" method="post" action="../project1/scripts/processLogin.php">
			<div class="badUser">
			<?php
				require("template/headerHere.php");
				
				if ( isset( $_SESSION['BadUser'] ) && $_SESSION['BadUser'] == 'Yes' ) {
					$badUser = "Username entered does not match database.";
				} else {
					$badUser = "";
				}
				
				if ( isset( $_SESSION['BadPass'] ) && $_SESSION['BadPass'] == 'Yes' ) {
					$badPass = "Password entered does not match database.";
				} else {
					$badPass = "";
				}
			?>
			
			</div>
			
			<p class="login">Login</p>

			<div class="blockInLoginForm">
				<p>
					<label for="username" class="label">Username: </label>
					<input type="text" name="username" id="username" class="required" title="Please enter your username." />
				</p>
				<p>
					<label for="pwd" class="label">Password: </label>
					<input type="password" name="password" id="password" class="required" title="Please enter a password." />
				</p>
				<p>
					<input type="submit" name="Submit" id="loginBtn" value="Login" />
					<a href="../project1/registration1.php"><input type="button" id="registerBtn" value="Register"></a>
				</p>
				<p><?php echo $badUser."<br />".$badPass; ?></p>
			</div>
			<!--FOOTER-->
			<br /><br />
			<div class="footerOnShowAll">&copy;2012 The Art Bus | 
				<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">
					Privacy Statement
				</a>
			</div>
		</form>
	</body>
</html>


