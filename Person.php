<?php
/**
* Model Person for Contol weith
*/
class Person 
{
	private $_weight;
	private $_height;

	function __construct( $weight, $height )
	{
		if ( !$this->checkWeight(  $weight ) ) 
			throw new Exception("Error Weight not Valid Exception");

		if ( !$this->checkHeight(  $height ) ) 
			throw new Exception("Error Height not Valid Exception");

		$this->_weight=$weight;
	    $this->_height=$height;
	}

	private function checkWeight( $weight ){
		return is_numeric( $weight ) || $weight < 0;
	}

	private function checkHeight( $height ){
		return is_numeric( $height ) || $height < 0 ;
	}

	public static function create( $weight, $height ){
		 return new static( $weight, $height );
	}

	public function getWeight(){ return $this->_weight; }

	public function getHeight(){ return $this->_height; }
	
	public function __toString()
	{
	  return  '<pre>'.
	          'WEIGHT       :'.$this->_weight.'<br>'.
	          'HEIGHT    	:'.$this->_height;
	}
}

interface IMCalculator
{
	 public function calculate( );
}

class International implements IMCalculator
{
	private $_person;

	function __construct( $person )
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

class Ingles implements IMCalculator
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

	public function __toString()
	{
	  return  '<pre>'.
	          'PERSON    	:'.$this->_person;
	}
}

abstract class typeWeigth 
{
	protected $_message;
	
	protected $_value;

	abstract function isValidRange( $value);

	public function getMessage(){ print_r( $this->_message); }
}

class DL extends typeWeigth
{
	function __construct(  )
	{
		$this->_message=" <p>Casi excelente, estas a poco de lograr tu peso ideal, pero aún hay que
		<br> trabajar, podrías incluir en tu dieta diaria el elegir alimentos ricos en nutrientes, calorias y fortalecer los musculos.</p>";
	}

	public function isValidRange( $value )
	{
		return $value >= 17.00 && $value <= 18.49;
	}
}