<?php

class Vampir extends Character {
  
  //public class properties
  public $strength = 1; // får inte stark attack om str är under 5
  public $monster_factor = 0.2;

  //new property to let monster to a monster strike
  //using a setter
  protected $monster_strike = false;
  protected $allowed_strikes = 3;

  //check if monster can make monster_strike
  public function can_strike() {
    return $this->allowed_strikes > 0;
  }

  // public function set_monster_strike($bool) {
  //   $this->monster_strike = $bool;
  // }

  //an override of the original attack() method
  //also takes in $otherCharacter by reference (&)
  public function attack(&$otherCharacter, $randomness = 1){
    // if(!$otherCharacter->isAlive()){
    //   return $this->name. " tries to attack ".$otherCharacter->name.
    //   " but ".$otherCharacter->name." is already dead!";
    // }
    // elseif (!$this->isAlive()) {
    //   return $this->name. " tries to attack ".$otherCharacter->name.
    //   " but ".$this->name." only succeeds in flopping around like a fish!";
    // }

    $level_diff = $this->level / $otherCharacter->level;

    //if this character has a weapon, add a weapon
    //multiplier based on the combination between
    //character strenght and weapon damage
    // $weapon_multiplier = 1;
    // if ($this->weapon) {
    //   $weapon_multiplier = $this->weapon->damage;
    // }

    $damage = round($this->strength * $level_diff * $randomness);

    // $this -> health += $damage;
    $otherCharacter -> health -= $damage;
    if(!$otherCharacter->isAlive()){
      //increase my level by one when i kill someone
      $this->level++;
      return $this->name. " kills ".$otherCharacter->name."!";
    }
    return "<br>".$this->name. " bites ".$otherCharacter->name."!";
  }

}