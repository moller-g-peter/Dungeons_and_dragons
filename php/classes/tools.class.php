<?php

class tools extends Base {
	
	protected $name;
	protected $amount;


	public function __construct($name, $amount) 
	{
		$this->name = $name;
		$this->amount = $amount;
	}

	public function set_name($name)
	{
		$this->heal = $name;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function set_amount($amount)
	{
		$this->amount = $amount;
	}

	public function get_amount()
	{
		return $this->amount;
	}
}