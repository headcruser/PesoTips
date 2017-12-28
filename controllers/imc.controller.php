<?php
	if (!defined('IMC')) 
		throw new Exception("Not direct access allowed ");
		
	if ( isset($_POST) ) 
	{		
		try 
		{
			$sistema=$_POST['sistemametrico'];
			$peso=$_POST['peso'];			
			$altura=$_POST['altura'];

			$persona= Person::create( $peso, $altura );
			
			if ($sistema === "internacional") 
				$System = new International( $persona );
			else
				$System = new Ingles( $persona );

			if ( $peso == 0 && $altura == 0 ) 
				$smarty->assign('msjnum'," Valores en cero, Ingresa valores validos");
			else
				$web->calcula( $persona ,$System );

		} catch (Exception $e) {
			$smarty->assign('msjnum',"Inserta datos numericos");
		}
	}
	else	
		$smarty->display("index.html");