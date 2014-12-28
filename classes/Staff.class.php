<?php
  class Staff extends Base {

    //these properties are protected to make sure
    //that they are not changed accidentally
    protected $damage = 3;
    protected $owner = FALSE;

    public function __construct(&$owner) {
      //using composition to track a Weapons owner
      $this->owner = $owner;
      //and to tell the owner they have a new weapon
      $this->owner->weapon = $this;
    }

    //using composition to always return the 
    //name of my owner
    public function whos_my_owner() {
      return "My owner is ".$this->owner->name;
    }

    //a getter for weapon damage (used in 
    //a characters attack method)
    public function get_damage() {
      return $this->damage;
    }
  }