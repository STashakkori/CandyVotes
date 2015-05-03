<?php
	include_once('MySQLDatabase.php');
	include_once('MySQLResultSet.php');
	$db = MySqlDatabase::getInstance();
	try {
		//$db = @mysql_connect('nobody@student.cs.appstate.edu', 'st79375', 'sina@mysql');
		$db->connect("localhost", "st79375", "sina@mysql", "st79375");
	} 
	catch (Exception $e) {
		die($e->getMessage());
	}
	
	$db = new mysqli('localhost', 'st79375', 'sina@mysql', "st79375");
	if ($db->connect_error) {
		die('Connect Error (' . $db->connect_errno . ') '
				. $db->connect_error);
	}
?>