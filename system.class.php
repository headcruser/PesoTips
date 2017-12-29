<?php
	define('IMC', true);
	
	define ("PATH",dirname(realpath(__FILE__)).DIRECTORY_SEPARATOR);

	define ('INDEX', dirname($_SERVER['PHP_SELF']).DIRECTORY_SEPARATOR);
	
	define ('CSS', INDEX.'css'.DIRECTORY_SEPARATOR);
	
	define ('JS', INDEX.'js'.DIRECTORY_SEPARATOR);
	
	define ('IMG', INDEX.'images'.DIRECTORY_SEPARATOR);
	
	define ('TEMPLATES', INDEX.'templates'.DIRECTORY_SEPARATOR);

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
			$this->view->setTemplateDir('templates/');
			$this->view->setCompileDir('templates_c/');
			$this->view->setConfigDir('configs/');
			$this->view->setCacheDir('cache/');
		}
	}

	$web=new System();
	$view=$web->view;