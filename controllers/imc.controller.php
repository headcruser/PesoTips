<?php
	if (!defined('IMC')) 
		throw new Exception("Not direct access allowed ");
		
	if ( isset($_POST) ) 
	{		
		$peso=$_POST['peso'];			
		$altura=$_POST['altura'];
		$sistema=$_POST['sistemametrico'];		
		$web->calcula($peso,$altura,$sistema);
	}
	else			
		$smarty->display("index.html");