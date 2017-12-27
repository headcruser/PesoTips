<?php
	include("sistema.class.php");

	if (isset($_GET['c'])) 
		$c=$_GET['c'];
	else
		$c="index";
	
	include("controllers/$c.controller.php");		