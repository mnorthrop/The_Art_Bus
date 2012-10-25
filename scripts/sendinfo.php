<?php
	/***********************************************************************************************
	Author: Mike Northrop & Christine Shields
	Date: 10/11/2012
	Description: 
		This script takes input from the registration form and writes it to a flat file.
	***********************************************************************************************/

	error_reporting( E_ALL );
	
	$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
	$fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
	$lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
	$birthday = filter_input(INPUT_POST,'birthday',FILTER_SANITIZE_STRING);
	$state = filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING);
	$sex = filter_input(INPUT_POST,'sex',FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
	$notify = filter_input(INPUT_POST,'notify',FILTER_SANITIZE_STRING);
	$comments = filter_input(INPUT_POST,'comments',FILTER_SANITIZE_STRING);	
	$role = 'Member';

	$user = array(
		'username' => $username, 
		'password' => $password, 
		'fname' => $fname,
		'lname' => $lname,
		'birthday' => $birthday,
		'state' => $state,
		'sex' => $sex,
		'email' => $email,
		'notify' => $notify,
		'comments' => $comments,
		'role' => $role
	);
		
	if (($file = fopen( "../users/users.txt", 'a+' )) === false)	{
		die("Failed to open file.");
	}

	try {
		fputcsv( $file, $user ); // adding a user to the file
		$_SESSION['Logged In'] = 'Yes';
		$_SESSION['WelcomeName'] = $user['fname'];
		$_SESSION['role'] = 'Member';
	} catch( Exception $e ) {
		die("Failed to write to file.");
	}
	
	fclose( $file );
	
	header('Location: http://cs.metrostate.edu/~ics325f1208/project1/index.php');

?>