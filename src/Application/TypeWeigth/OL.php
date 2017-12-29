<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class OL extends typeWeigth
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