<?php

// The class is just a template
// which we can use to create objects

class Character extends Base {
  // properties (similar to variables)
  public $name;
  public $health = 100;
  public $level = 1;
  public $strength = 1;

  //weapon is protected so that no one can steal it
  protected $weapon = FALSE;

  // __construct is a magic method name
  // (built in to PHP)
  // it will be run each time a new
  // character is created
  public function __construct($name){
    // $this->name points to the property name
    // (defined above without value)
    // $name is just the argument/local variable
    // that this method receives
    $this->name = $name;
  }

  // methods (similar to functions)
  // public function greet(){
  //   return "Hi! My name is ".$this->name."!";
  // }

  //writing &$otherCharacter in the declaration below
  //tells PHP to take in $otherCharacter as a reference
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
    $weapon_multiplier = 1;
    if ($this->weapon) {
      $weapon_multiplier = $this->weapon->damage;
    }

    $damage = round($this->strength * $level_diff * $randomness + $weapon_multiplier);

    // $this -> health += $damage;
    $otherCharacter -> health -= $damage;
    if(!$otherCharacter->isAlive()){
      //increase my level by one when i kill someone
      $this->level++;
      return $this->name. " kills ".$otherCharacter->name."!";
    }
    return "<br>".$this->name. " attacks ".$otherCharacter->name."!";
  }

  public function isAlive(){
    // return a boolean
    return $this->health > 0;
  }

  //a setter for a characters weapon
  public function set_weapon(&$weapon) {
    if (!$this->weapon) {
      $this->weapon = $weapon;
    }
  }

  //a simple method to check if a weapon is indeed
  //my weapon. Using strict equality will only return
  //true if the weapon is both the same class AND 
  //instance as mine (aka must be mine then).
  public function is_my_weapon($weapon) {
    return $weapon === $this->weapon;
  }  
}