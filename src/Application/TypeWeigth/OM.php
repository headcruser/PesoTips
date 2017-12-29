<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class OM extends typeWeigth
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
