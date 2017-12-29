<?php

namespace PesoTipsDotMe\Application\Service;

use Exception;
use PesoTipsDotMe\Common\Person;
use PesoTipsDotMe\Application\Units\International;
use PesoTipsDotMe\Application\Units\English;
use PesoTipsDotMe\Application\TypeWeigth\DL;
use PesoTipsDotMe\Application\TypeWeigth\DM;
use PesoTipsDotMe\Application\TypeWeigth\DS;
use PesoTipsDotMe\Application\TypeWeigth\N;
use PesoTipsDotMe\Application\TypeWeigth\OL;
use PesoTipsDotMe\Application\TypeWeigth\OM;
use PesoTipsDotMe\Application\TypeWeigth\OMo;
use PesoTipsDotMe\Application\TypeWeigth\PO;
use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

class ServiceCalculatorIMC
{
	private $_typeWeigth;

	private $_system;
	
	function __construct( Person $person, string $typeSystem )
	{
		if ($typeSystem === "internacional") 
			$this->_system = new International( $person );
		else
			$this->_system = new Ingles( $persona );
		
		$this->buildTypeWeigth();
	}

	private function buildTypeWeigth()
	{
		$this->_typeWeigth=array(
			new DS(),new DM(),new DL(), new N(),
			new PO(),new OL(),new OM(),new OMo() 
		);
	}

	public function calculateIMC( ):array
	{
		$resultado = $this->_system->calculate();

		if( $this->isValidRange($resultado))
			throw new Exception("Invalid Range");

		$mensaje=$this->typeclassification($resultado);
		return array('resultado' => $resultado,"mensaje"=> $mensaje);
		
	}

	private function isValidRange( float $resultado):bool{
		return $resultado < 10.00 || $resultado > 60;
	}

	private function typeclassification( float $result ):string
	{
		foreach ($this->_typeWeigth as $value)
		{
			if($value->isValidRange( $result )){
				$mensaje=$value->getMessage();
				break;
			}
		}
		return $mensaje;	
	}
}