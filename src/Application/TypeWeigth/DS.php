<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class DS extends typeWeigth
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