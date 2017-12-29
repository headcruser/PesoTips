<?php
	include("system.class.php");

	if (isset($_GET['c'])) 
		$c=$_GET['c'];
	else
		$c="index";
	
	include("src/controllers/$c.controller.php");		