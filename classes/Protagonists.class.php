<?php

class Protagonists extends character {

	protected $members = array();

	public function __construct($name, $human_player, $computer_player1, $computer_player2) {
		
		$this->members[] = $human_player;
		$this->members[] = $computer_player1;
		$this->members[] = $computer_player2;
	
		
		$this->health = $human_player->health+$computer_player1->health+$computer_player2->health;
		$this->dexterity = $human_player->dexterity+$computer_player1->dexterity+$computer_player2->dexterity;
		$this->intelligence = $human_player->intelligence+$computer_player1->intelligence+$computer_player2->intelligence;
		$this->strength = $human_player->strength+$computer_player1->strength+$computer_player2->strength;

		for($i=0;$i<count($this->members);$i++){
			for($j=0;$j<count($this->members[$i]->items);$j++){
				$this->items[] = $this->members[$i]->items[$j];
			}
		}

		parent::__construct($name);
	}    
}