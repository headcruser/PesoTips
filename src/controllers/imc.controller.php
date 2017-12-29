<?php
use PesoTipsDotMe\Common\Person;
use PesoTipsDotMe\Common\International;
use PesoTipsDotMe\Common\Ingles;
use PesoTipsDotMe\Common\IMC;

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
				$view->assign('msjnum'," Valores en cero, Ingresa valores validos");
			else
			{
				$imc=new IMC();
				$resultado=$imc->calcula( $System );
				foreach ($imc->typeWeigth as $value)
				{
					if($value->isValidRange( $resultado)){
						$mensaje=$value->getMessage();
						break;
					}
				}	
				$view->assign('resultado',$resultado);
				$view->assign('msj',$mensaje);
			}

		} catch ( \Exception $e ) {
			$view->assign('msjnum',$e->getMessage() );
		}catch ( \TypeError $tye ){
			$view->assign('msjnum', "Ingresa valores numericos");
		}
	}
	
	$view->display("index.html");