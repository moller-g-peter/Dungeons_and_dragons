<?php

class Items extends Base {
	
	public $name;
	public $skills;

	public function __construct($name, $skills) 
	{
		$this->name = $name;
		$this->skills = $skills;
	}
}