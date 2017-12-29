<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class DM extends typeWeigth
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