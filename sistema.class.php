<?php
	define('IMC', true);
	
	define ("PATH",dirname(realpath(__FILE__)).DIRECTORY_SEPARATOR);

	define ('INDEX', dirname($_SERVER['PHP_SELF']).DIRECTORY_SEPARATOR);
	
	define ('CSS', INDEX.'css'.DIRECTORY_SEPARATOR);
	
	define ('JS', INDEX.'js'.DIRECTORY_SEPARATOR);
	
	define ('IMG', INDEX.'images'.DIRECTORY_SEPARATOR);
	
	define ('TEMPLATES', INDEX.'templates'.DIRECTORY_SEPARATOR);

	define ('CSS_VENDOR', INDEX.'vendor\twbs\bootstrap\dist\css'.DIRECTORY_SEPARATOR);	

	define ('JS_VENDOR', INDEX.'vendor\components\jquery'.DIRECTORY_SEPARATOR);
	
	require_once('vendor/autoload.php');
	
	require_once('Person.php');	
	
//------------------------------CLASE CALCIMC----------------------------
	class IMC 
	{
		private $_typeWeigth;
		
		function __construct( )
		{
			$this->crearSmarty( );
			$this->buildTypeWeigth( );
		}

		private function buildTypeWeigth( )
		{
			$this->typeWeigth=array(
				new DS(),new DM(),new DL(), new N(),
				new PO(),new OL(),new OM(),new OMo() 
			);
		}
		private  function crearSmarty()
		{
			$this->smarty = new Smarty();
			$this->smarty->setTemplateDir('templates/');
			$this->smarty->setCompileDir('templates_c/');
			$this->smarty->setConfigDir('configs/');
			$this->smarty->setCacheDir('cache/');
		}

		public function calcula( $persona , $System)
		{
			$resultado = $System->calculate();

			if($resultado < 10.00 || $resultado > 60)//NUEVO
			{
				$mensaje = "Los datos sobrepasan lo esperado, favor de revisarlos";
				$this->smarty->assign('msj',$mensaje);
				
			}else
			{	
				foreach ($typeWeigth as $value){
					if($value->isValidRange( $resultado)){
						$mensaje=$value->getMessage();
						break;
					}
				}
				$this->smarty->assign('resultado',$resultado);
				$this->smarty->assign('msj',$mensaje);
			}

			$this->smarty->display("index.html");
		}
	}

	$web=new IMC;
	$smarty=$web->smarty;