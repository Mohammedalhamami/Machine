<?php 

class Person {
    public $name, $eyeColor, $age;

    public static $fuckingAge = 15;

    //a constructor works before everything in class and in object. 
    public function __construct($name, $eyeColor, $age) {
      $this->name = $name;
      $this->eyeColor = $eyeColor;
      $this->age = $age;
    }

public function setName($newName) {
    $this->name = $newName;
    // $this->eyeColor = $newEyeC;
    // $this->age = $newAge;
}
public function getFA() {
    return self::$fuckingAge;
}
 
public static function setFuckinga(int $newAD) {
    self::$fuckingAge = $newAD;
   }
public function __destruct() {
    echo "This is the end";
}

};


?>