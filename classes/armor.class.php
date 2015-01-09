<?php

class armor extends Base {
	
	protected $protection = 10;


	public function __construct($protection) 
	{
		$this->protection = $protection;
	}

	public function set_name($protection)
	{
		$this->protection = $protection;
	}

	public function get_name()
	{
		return $this->protection;
	}
}