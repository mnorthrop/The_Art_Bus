<?php
	/***********************************************************************************************
	Author: Mike Northrop
	Date: 10/9/2012
	Description: 
		This script logs out the current user by destroying the session and redirecting to the home page.
	***********************************************************************************************/
	
	session_start();
	session_destroy();
	header('Location: http://cs.metrostate.edu/~ics325f1208/project1/index.php');
?>