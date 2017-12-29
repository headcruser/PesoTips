<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class OMo extends typeWeigth
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