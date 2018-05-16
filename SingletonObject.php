<?php
/**
* The singleton pattern is used to ditribute one self to other classes as it instantiates itself
*/
class SingletonObject
{
	private static $message;
	
	function __construct($message)
	{
		self::$message = $message;
	}

	private static function getInstance()
	{
		reutn self::$message;
	} 

	public function getMessage()
	{
		return self::getInstance();
	}
}
?>