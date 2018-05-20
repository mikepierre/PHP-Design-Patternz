<?php
/**
* Working on Observer pattern. Feel Free to contribute.
*/
class Subject
{
	protected $observers = [];
	private $state;

	public function getState()
	{
		return $this->state;
	}

	public function setState($state)
	{
		$this->state;
		$this->notifyAllObservers();
	}

	public function attach(Observer $observer)
	{
		$this->observers[$observer];
	}

	public function notifyAllObservers(Observer $observer) 
	{
		foreach ($this->observers as $value) {
			$observer->update();
		}
	}
}

abstract class Observer
{
	public abstract update();
}

class hex
{
	
	function __construct(argument)
	{
		# code...
	}
}

class oct
{
	
	function __construct(argument)
	{
		# code...
	}
}
?>