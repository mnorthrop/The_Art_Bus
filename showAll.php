<?php
/***************************************************************
Author: Mike Northrop & Christine Shields
Date: 10/11/2012
Description: 
	This page is written by a script that reads users from a 
	flat file then displays those users in an HTML table.
***************************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>View All Users</title>
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
			<p class="loginShowAll">View All Users</p>
			<div class="blockInForm">
				<a href="http://cs.metrostate.edu/~ics325f1208/project1/adminInterface.php">
					Return to Administrator Interface
				</a>
				<?php
					echo <<< END
						<table>
						<tr>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Birthdate</th>
						<th>State</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Opt In</th>
						<th>Comments</th>
						<th>Role</th>
						</tr>
END;
					$headers = array( 'username','password','firstName','lastName','birthdate',
						'state','gender','email','optIn','comments','role' );
					$file = fopen( '../project1/users/users.txt', 'r' );
					$userTable = array();
					$records = 0;

					while ( ( $fields = fgetcsv( $file, 512, "," ) ) !== FALSE ) {
						$mappedFields = array();
						
						foreach( $fields as $key => $value ) {
							$mappedFields[ $headers[ $key ] ] = $value;
						}
						
						$userTable[] = $mappedFields;
					}

					function mySort($a, $b) {
						return strcmp($a['username'], $b['username']);
					}

					usort($userTable, "mySort");

					foreach ($userTable as $user) {
						$style = ( $user[ 'role' ] == 'Admin' ) ? "style='color: red'" : "";
						$records++;
						echo "<tr $style>
							<td>" . $user['username'] . '</td>
							<td>' . $user['firstName'] . '</td>
							<td>' . $user['lastName'] . '</td>
							<td>' . $user['birthdate'] . '</td>
							<td>' . $user['state'] . '</td>
							<td>' . $user['gender'] . '</td>
							<td>' . $user['email'] . '</td>
							<td>' . $user['optIn'] . '</td>
							<td>' . $user['comments'] . '</td>
							<td>' . $user['role'] . '</td>
							</tr>';
					}
					echo '</table>';
					echo "<p>There are <strong>$records</strong> members registered.</p>";
				?>
			</div>
			<div id="footer" class="footerOnShowAll">
				<p>&copy; 2012 &nbsp; The Art Bus &nbsp;| &nbsp;
					<a href="http://cs.metrostate.edu/~ics325f1208/project1/info/privacy.php">
						Privacy Statement
					</a>
				</p>
			</div>
		</form>
	</body>
</html>