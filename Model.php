<?php
/**
* Model Person for Contol weith
*/
class Person 
{
	private $_weight;
	private $_height;

	function __construct( float $weight, float $height )
	{
		if ( !$this->checkWeight(  $weight ) ) 
			throw new Exception("Weight is not Valid");

		if ( !$this->checkHeight(  $height ) ) 
			throw new Exception("Height is not Valid");

		$this->_weight=$weight;
	    $this->_height=$height;
	}

	private function checkWeight( float $weight ) :bool{
		return is_numeric( $weight ) || $weight < 0;
	}

	private function checkHeight( float $height ) :bool {
		return is_numeric( $height ) || $height < 0 ;
	}

	public static function create( float $weight, float $height ):Person{
		 return new static( $weight, $height );
	}

	public function getWeight():float{ return $this->_weight; }

	public function getHeight():float{ return $this->_height; }
	
	public function __toString():string
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

	abstract function isValidRange( float $value):bool;

	public function getMessage():string{ return $this->_message; }
}

class DS extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Podría ser que puedas subir de peso un poco más, te recomendamos evitar la comida chatarra, esto podría perjudicarte más, lo mejor que puedes hacer es AGREGAR CALORIAS SALUDABLEs e incorporar snacks, así mismo revisar nuestras dietas";
	}

	public function isValidRange( float $value ):bool
	{
		return $value<16.00;
	}
}

class DM extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Estás un poco bajo de peso pero con una comida rica en calorias saludables, comidas pequeñas en distintos lapsos del día y snacks saludables si tienes hambre y no te es posible tomar un descanso del trabajo y comer.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 16.00 && $value <=16.99;
	}
}

class DL extends typeWeigth
{
	function __construct(  )
	{
		$this->_message=" <p>Casi excelente, estas a poco de lograr tu peso ideal, pero aún hay que
		<br> trabajar, podrías incluir en tu dieta diaria el elegir alimentos ricos en nutrientes, calorias y fortalecer los musculos.</p>";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 17.00 && $value <= 18.49;
	}
}


class N extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Felicidades estas dentro de tu peso ideal, te recomendamos seguir así, haciendo ejercicio, comiendo sano, y evitar los alimentos con demasiada grasa, así como respetar tus horas de comida.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 18.50 && $value <= 24.99;
	}
}

class PO extends typeWeigth
{
	function __construct(  )
	{
		$this->_message=" Cuidado estas un poco arriba de tu peso ideal, si sigues así podrias llegar a tener un sobre peso o peor, un plan alimentario ideal para actuar contra el sobrepeso siempre ha de ser normocalórico o con una mínima restricción de calorías.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 25.00 && $value <= 29.99;
	}
}

class OL extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Cuidado estas un poco por encima de el peso recomendado para tu estatura, debes de elegir alimentos con poca grasa, reducir su consumo de azucar y alimentos chatarra.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 30.00 && $value <= 34.99;
	}
}

class OM extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Mucho cuidado estas cerca de llegar a una obesidad morbida, te recomendamos repartir tu alimentación en 5 comidasd al dia con alimentos de poca grasa y con nutrientes, así como no saltar ninguna comida y realizar un poco de ejercicio aumentando moderadamente.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 35.00 && $value <= 39.99;
	}
}

class OMo extends typeWeigth
{
	function __construct(  )
	{
		$this->_message="Debes de cuidar mucho tu alimentación, estas en un grado de sobre peso sonde tu salud peligra, acude a un medico para que puedas hacerte examenes pronto y te de la mejor recomendación para poder perder peso, puede que con una dieta normal no puedas llegar a tu peso ideal, te recomendamos tener mucha paciencia y responsabilidad para cuidar tu salud.";
	}

	public function isValidRange( float $value ):bool
	{
		return $value >= 40.00 && $value <= 60.00;
	}
}

//------------------------------CLASE CALCIMC----------------------------
class IMC 
{
	private $_typeWeigth;
	private $_person;
	
	function __construct( )
	{
		$this->buildTypeWeigth( );
	}

	private function buildTypeWeigth( )
	{
		$this->typeWeigth=array(
			new DS(),new DM(),new DL(), new N(),
			new PO(),new OL(),new OM(),new OMo() 
		);
	}

	public function calcula( IMCalculator $System)
	{
		$resultado = $System->calculate();

		if( $this->isValidRange($resultado))
			throw new Exception("El rango de valores no es valido");

		return $resultado;
	}

	private function isValidRange( float $resultado):bool{
		return $resultado < 10.00 || $resultado > 60;
	}
}