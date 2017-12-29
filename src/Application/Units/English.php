<?php

namespace PesoTipsDotMe\Application\Units;

use PesoTipsDotMe\Application\Units\IMCalculator;

final class English implements IMCalculator
{
	private $_person;

	function __construct( $person )
	{
		if ( ! $this->isObjectPerson( $person) )
			throw new Exception("Person not is Object");
	
		$this->_person=$person;
	}

	public function isObjectPerson( $person){ return is_object( $person); }

	public function calculate( )
	{
		$resultado=$this->calculateWeightPerson() / pow($this->calculateHeightPerson(), 2);
		return $resultado;
	}

	public function calculateWeightPerson(){
		return ($this->_person->getWeight() * 0.453592);
	}

	public function calculateHeightPerson(){
		return ( ($this->_person->getHeight() * 2.54) / 100);
	}

	public function __toString():string
	{
	  return  '<pre>'.
	          'PERSON    	:'.$this->_person;
	}
}