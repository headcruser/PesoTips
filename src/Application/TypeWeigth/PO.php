<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class PO extends typeWeigth
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