<?php
use PesoTipsDotMe\Application\Service\ServiceCalculatorIMC;
use PesoTipsDotMe\Common\Person;

	if (!defined('IMC')) 
		throw new Exception("Not direct access allowed ");
		
	if ( isset($_POST) ) 
	{		
		try 
		{
			$persona= Person::create( $_POST['peso'], $altura=$_POST['altura'] , $_POST['edad']);

			$service = new ServiceCalculatorIMC( $persona, $_POST['sistemametrico'] );
			
			$result=$service->calculateIMC();
			
			$view->assign('resultado',$result['resultado']);
			$view->assign('msj',$result['mensaje']);
			
		} catch ( \Exception $e ) {
			$view->assign('msjnum',$e->getMessage() );
		}catch ( \TypeError $tye ){
			$view->assign('msjnum', "Ingresa valores numericos");
		}
	}
	
	$view->display("index.html");