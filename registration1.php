<?php
/***********************************************************************************************
Author: Mike Northrop & Christine Shields
Date: 10/11/2012
Description: 
	This page accepts input from the registration form and writes that info to a flat file.
***********************************************************************************************/
?>  
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="css/CSSonIndex.css" type="text/css" media="screen, print" />
		<link rel="stylesheet" href="css/CSSonForms.css" type="text/css" media="screen, print" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../project1/js/jquery.js"></script>
		<script type="text/javascript" src="../project1/js/jquery.validate.js"></script>
		<script type="text/javascript" src="../project1/js/apply_validation.js"></script>
    </head>
    <body>
		<form id="form" name="form" method="post" action="../project1/scripts/sendinfo.php">
			<?php
				require("template/headerHere.php");
			?>
			<p class="registration">Registration Page</p>
			<div class="blockInRegistration">
				<p>* - required<p>
				<p>
					<label for="name" class="label">* First Name: </label>
					<input type="text" name="fname" id="name" class="required" title="Enter your first name." />
				</p>
				<p>
					<label for="name" class="label">* Last Name: </label>
					<input type="text" name="lname" id="name" class="required" />
				</p>
				<p>
					<label for="birthday" class="label">Birthday (mm/dd/yyyy): </label>
					<input type="date" name="birthday" id="birthday"/>
				</p>
				<p>
					<label for="state" class="label">State: </label>
					<select name="state">
						<option value="IA">Iowa</option>
						<option value="MN">Minnesota</option>
						<option value="ND">North Dakota</option>
						<option value="SD">South Dakota</option>
						<option value="WI">Wisconsin</option>
					</select>
				</p>
				<p>
					<label for="gender" class="label">* Gender: </label>
					<input type="radio" name="sex" value="male" class="required" />Male
					<input type="radio" name="sex" value="female" />Female
					<input type="radio" name="sex" value="other" />Other
				</p>
				<p>
					<label for="email" class="label">* Email: </label>
					<input type="text" name="email" id="email" class="required"/>
				</p>
				<p>
					<input type="checkbox" name="notify">Notify me of sales via email.
				</p>
				<p>
					<label for="comments" class="label">Comments: </label><br />
					<textarea rows="2" cols="40" name="comments" id="comments"></textarea>
				</p>
				<div id="login_info">
					<p>
						<label for="username" class="label">* Username: </label>
						<input type="text" name="username" id="username" class="required" title="Please enter a username."/>
					</p>
					<p>
						<label for="password" class="label">* Password: </label>
						<input type="password" name="password" id="password" class="required" title="Please enter a password."/>
					</p>
					<p>
						<label for="confpwd" class="label">* Confirm: </label>
						<input type="password" name="confirm" id="confirm" class="required" title="Please re-enter your password."/>
					</p>
				</div>
				<p>
					<input type="submit" name="submit" id="register_button" value="Submit" />
					<input type="reset" id="register_button" value="Reset" />
				</p>
			</div>
			<!--FOOTER-->
			<div class="footerOnRegistration">&copy;2012 The Art Bus | 
				<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">
					Privacy Statement
				</a>
			</div>	
		</form>
    </body>
</html>