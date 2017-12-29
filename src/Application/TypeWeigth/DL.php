<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

use PesoTipsDotMe\Application\TypeWeigth\typeWeigth;

final class DL extends typeWeigth
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