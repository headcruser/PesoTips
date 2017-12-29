<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class N extends typeWeigth
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