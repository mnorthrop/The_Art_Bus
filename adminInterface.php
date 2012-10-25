<?php
	/*****************************************
	Author: Mike Northrop
	Date: 10/10/2012
	Description: This is the Administrator Home Page. 
	*****************************************/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Admin Interface</title>
		<link rel="stylesheet" href="css/CSSonIndex.css" type="text/css" media="screen, print" />
		<link rel="stylesheet" href="css/CSSonForms.css" type="text/css" media="screen, print" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<form id="form" name="form" method="post" action="">
			<?php
				require("template/headerHere.php");
				if ( 
					isset( $_SESSION['Logged In'] ) && 
					$_SESSION['Logged In'] == 'Yes' && 
					$_SESSION['role'] == 'Admin' 
				){
				} else {
					header(
						"location:http://cs.metrostate.edu/~ics325f1208/project1/login1.php"
					);
				}
			?>
			<p class="administratorInterface">Administrator Interface</p>

			<div class="blockInAdministratorInterfaceForm">
				<input 
					type="button" 
					value="View All Users" 
					onclick="window.location.href='http://cs.metrostate.edu/~ics325f1208/project1/showAll.php'"
				/>
			</div>
			<!--FOOTER-->
			<br /><br />
			<div class="footer">&copy;2012 The Art Bus | 
				<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">
					Privacy Statement
				</a>
			</div>
		</form>
	</body>
</html>