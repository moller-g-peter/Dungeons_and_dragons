<?php

class South_Dragon extends Character {
  
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

  public function set_monster_strike($bool) {
    $this->monster_strike = $bool;
  }

  //an override of the original attack() method
  //also takes in $otherCharacter by reference (&)
  public function attack(&$otherCharacter) {

    //monster no longer has a random monster attack but instead
    //a monster strike that can be called as an option
      $monster_super_charge = 1;
    if ($this->monster_strike && $this->can_strike()) {
      //supercharge monster attack
      $monster_super_charge = $this->strength * $this->monster_factor;
      //and reset monster strike to false so it only happens this time
      $this->monster_strike = false;
      //and remove one allowed_strikes
      $this->allowed_strikes--;
    }

    //a ternary that determines if any additional text should be added
    $monster_text = $monster_super_charge > 1 ? //boolean expression to evaluate
      $this->name." performs a monster attack! " : //if true
      ""; //if false

    //then return the $random_text plus the text that the parent 
    //class (Character) already returns (see Character class definition)
    return $monster_text.parent::attack($otherCharacter, $monster_super_charge);
  }

}