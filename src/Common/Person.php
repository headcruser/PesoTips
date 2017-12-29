<?php
namespace PesoTipsDotMe\Common;

use Exception;

/**
* Model Person
*/
class Person 
{
	private $_weight;
	private $_height;
	private $_age;

	function __construct( float $weight, float $height, int $yourAge)
	{
		if ( $this->isZeroValues( $weight, $height, $yourAge) ) 
			throw new Exception( "values ​​at zero, check out" );

		if ( $this->isInvalidWeight(  $weight ) ) 
			throw new Exception( "Invalid Weight" );

		if ( $this->isInvalidHeight(  $height ) ) 
			throw new Exception( "Invalid Height" );

		if ( $this->isInvalidAge(  $yourAge ) ) 
			throw new Exception( "Invalid Age" );

		$this->_weight=$weight;
		$this->_height=$height;
		$this->_age=$yourAge;
	}

	private function isInvalidWeight( float $weight ) :bool{
		return $weight < 0 || $weight > 300;
	}

	private function isInvalidHeight( float $height ) :bool {
		return $height < 0  || $height > 200;
	}

	private function isInvalidAge( int $checkAge )
	{
		return  $checkAge < 0 || $checkAge > 100;	
	}

	private function isZeroValues( float $weight, float $height, int $yourAge )
	{
		return $weight==0  || $height ==0 || $yourAge==0;
	}

	public static function create( float $weight, float $height , int $yourAge):Person{
		 return new static( $weight, $height , $yourAge);
	}

	public function getWeight():float{ return $this->_weight; }

	public function getHeight():float{ return $this->_height; }

	public function getAge():int{ return $this->_age; }
	
	public function __toString():string
	{
	  return  '<pre>'.
	          'WEIGHT       :'.$this->_weight.'<br>'.
			  'HEIGHT    	:'.$this->_height.'<br>'.
			  'AGE	    	:'.$this->_age;
	}
}