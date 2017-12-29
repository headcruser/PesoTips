<?php

namespace PesoTipsDotMe\Application\Units;

use PesoTipsDotMe\Application\Units\IMCalculator;
use PesoTipsDotMe\Common\Person;

final class International implements IMCalculator
{
	private $_person;

	function __construct( Person $person )
	{
		if ( ! $this->isObjectPerson( $person) )
			throw new Exception("Person not is Object");
	
		$this->_person=$person;
	}

	public function isObjectPerson( $person){ return is_object( $person); }


	public function calculate( ){
		return $this->calculateWeightPerson( $this->calculateHeightPerson() );
	}

	public function calculateWeightPerson( $alt ){
		return $this->_person->getWeight() / pow( $alt , 2 );
	}

	public function calculateHeightPerson()
	{
		return $this->_person->getHeight() / 100;
	}

	/**
	* __toString
	* @return Print Information Object
	*/
	public function __toString()
	{
	  return  '<pre>'.
	          'PERSON    	:'.$this->_person;
	}
}