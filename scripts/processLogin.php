<?php
	/***********************************************************************************************
	Author: Mike Northrop
	Date: 10/11/2012
	Description: 
		This script takes input from the login page and authenticates it to the saved data.
	***********************************************************************************************/

	error_reporting( E_ALL );
	
	session_start();
	unset( $_SESSION['BadPass'] );
	unset( $_SESSION['BadUser'] );
	
	$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
	
	$file = fopen( '../users/users.txt', 'r' );
	$userNotFound = true;
	
	while ( ( $row = fgetcsv( $file, 512, "," ) ) !== FALSE ) {
		if ($row[0] == $username) {
			// found the user, now check password
			$userNotFound = false;
			unset( $_SESSION['BadUser'] );
			
			if( $row[1] == $password ) {
				// found the password, now check for Admin or Member role
				$_SESSION['Logged In'] = 'Yes';
				$_SESSION['WelcomeName'] = $row[2];
				unset( $_SESSION['BadPass'] );
				
				if( $row[10] == 'Admin' ) {
					$_SESSION['role'] = 'Admin';
					header('Location: http://cs.metrostate.edu/~ics325f1208/project1/adminInterface.php');
				} else {
					$_SESSION['role'] = 'Member';
					header('Location: http://cs.metrostate.edu/~ics325f1208/project1/index.php');
				}
			} else {
				// password not found
				$_SESSION['BadPass'] = 'Yes';
				header('Location: http://cs.metrostate.edu/~ics325f1208/project1/login1.php');
			}
		}
	}
	
	if( $userNotFound === true ){
		// username not found
		$_SESSION['BadUser'] = 'Yes';
		header('Location: http://cs.metrostate.edu/~ics325f1208/project1/login1.php');
	}
	
?>
