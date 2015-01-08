<?php

class Protagonists extends character {

	// public $protagonists = array(
	//  	array( [0] => "Knight",'strength' => 100),
	// 	array( [1] => "Archer",'speed' => 90),
	// 	array( [2] => "Sorcerer",'stamina' => 80),
	// );
	protected $members = array();

	public function __construct($name, $human_player, $computer_player) {
		

			$this->members[] = $human_player;
			$this->members[] = $computer_player;
	
		
		$this->health = $human_player->health+$computer_player->health;
		$this->dexterity = $human_player->dexterity+$computer_player->dexterity;
		$this->intelligence = $human_player->intelligence+$computer_player->intelligence;
		$this->strength = $human_player->strength+$computer_player->strength;

		for($i=0;$i<count($this->members);$i++){
			for($j=0;$j<count($this->members[$i]->items);$j++){
				$this->items[] = $this->members[$i]->items[$j];
			}
		}

		parent::__construct($name);
	}




	// public $protagonists = array( 
	// 	"Knight" => array
	// 	(
	// 	"" => ,	    
	// 	"" => ,	    
	// 	"" => 	    
	// 	),
	// );
    
}