<?php
namespace PesoTipsDotMe\Application\TypeWeigth;

abstract class typeWeigth 
{
	protected $_message;
	
	protected $_value;

	abstract function isValidRange( float $value):bool;

	public function getMessage():string{ return $this->_message; }
}