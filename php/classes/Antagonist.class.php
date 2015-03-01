<?php

class Antagonist extends Character {

	public $name;
	// public $health;
	// public $strength;

	// $object_antagonists[] = New Antagonist("Necro Mancer", array("Health" => 1000,"Strength" => 10));....HÄR ÄR "$name;" Necro Mancer och "$skills" ÄR ELA MIN ARRAY med "health" och "strength"
	public function __construct($name, $skills)
	{
		$this->name = $name;
		// $this->skills = $skills;
		$this->health = $skills["Health"];
		$this->strength = $skills["Strength"];
	}

	// public $health = $this->skills[0]["Health"];
	// public $Strength = $this->skills[0]["Strength"];

}
		//--------------------------------------------------------------
		// DESSA KAN VARA ANVÄNDBARA I FRAMTIDEN!!!!
		// $this->health = $stats["Health"];
		// $this->strength = $stats["Strength"];
		//--------------------------------------------------------------