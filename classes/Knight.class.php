<?php

class Knight extends Character {

  //public class properties
  public $strength = 1;
  protected $potions = 3;
  public $random_factor = 0.2;

  public function has_potions_left() {
    return $this->potions > 0;
  }

  public function drink_potion() {
    //if we have potions left
    if ($this->has_potions_left() && $this->isAlive()) {
      //drink a potion
      $this->health += 30;
      $this->potions--;

      return $this->name." drank a potion for 30HP!";
    }
    elseif (!$this->isAlive()) {
      return $this->name." wishes they were smart enough to drink their potions when they could...";
    }

    return $this->name." does not have any potions left...";
  }
}