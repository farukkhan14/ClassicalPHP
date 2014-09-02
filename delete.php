<?php
	session_start();
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("example") or die(mysql_error());
	
	$id= $_GET["id"];
	
	if(mysql_query("DELETE from students where id = $id"))
	
	{
	    $deleted = "Record deleted successfully";
        $_SESSION['deleted'] = $deleted;
        header('location:index.php');
	}
	
	