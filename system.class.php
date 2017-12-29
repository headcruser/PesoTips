<?php
	define('IMC', true);
	
	///////////////////// CONST SMARTY///////////////////////////////////

	define ('CACHE', 'cache'.DIRECTORY_SEPARATOR);
	
	define ('CONFIGS', 'configs'.DIRECTORY_SEPARATOR);

	define ('TEMPLATES_V', 'templates'.DIRECTORY_SEPARATOR);
	
	define ('TEMPLATES_C', 'templates_c'.DIRECTORY_SEPARATOR);

	////////////////////// PATH SYSTEM /////////////////////////////////

	define ("PATH",dirname(realpath(__FILE__)).DIRECTORY_SEPARATOR);

	define ('INDEX', dirname($_SERVER['PHP_SELF']).DIRECTORY_SEPARATOR);

	//////////////////////// RESOURCES /////////////////////////////////
	
	define ('CSS', INDEX.'css'.DIRECTORY_SEPARATOR);	
	
	define ('JS', INDEX.'js'.DIRECTORY_SEPARATOR);
	
	define ('IMG', INDEX.'images'.DIRECTORY_SEPARATOR);

	define ('TEMPLATES', INDEX.'templates'.DIRECTORY_SEPARATOR);

	//////////////////// COMPOSER DEPENDENCES /////////////////////////
	define ('CSS_VENDOR', INDEX.'vendor\twbs\bootstrap\dist\css'.DIRECTORY_SEPARATOR);	
	
	define ('JS_VENDOR_BOOT', INDEX.'vendor\twbs\bootstrap\dist\js'.DIRECTORY_SEPARATOR);

	define ('JS_VENDOR', INDEX.'vendor\components\jquery'.DIRECTORY_SEPARATOR);

	define ('FONT', INDEX.'vendor\fortawesome\font-awesome\css'.DIRECTORY_SEPARATOR);

	require_once('vendor/autoload.php');
				
	class System
	{
		
		function __construct( )
		{
			$this->createView( );
		}

		private  function createView()
		{
			$this->view = new Smarty();
			$this->view->setTemplateDir( TEMPLATES_V );
			$this->view->setCompileDir( TEMPLATES_C );
			$this->view->setConfigDir( CONFIGS );
			 $this->view->setCacheDir( CACHE );

		}
	}

	$web=new System();
	$view=$web->view;