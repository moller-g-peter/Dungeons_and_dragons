<?php

class Antagonist extends character {

	public $name;
	public $health = 0;
	

	public function __construct($name)
	{
		$this->name = $name;
	}

}
		//--------------------------------------------------------------
		//DESSA KAN VARA ANVÄNDBARA I FRAMTIDEN!!!!
		// $this->health = $stats["Health"];
		// $this->strength = $stats["Strength"];
		//--------------------------------------------------------------