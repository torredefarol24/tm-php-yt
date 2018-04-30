<?php
class Person{
  private $name;
  private $email;

  public static $ageLimit = 50;
  private static $numHands = 2;

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public static function getNumHands(){
    return self::$numHands;
  }
}

$person1 = new Person;
$person1->setName("JayDee");
echo $person1->getName() . "<br>";
echo Person::$ageLimit . "<br> ";
echo Person::getNumHands() . "<br> ";

class GreatPerson{
  private $name;
  private $email;
  
  public function __construct($name, $email){
    $this->name = $name;
    $this-> email = $email;
    echo __class__  . " created <br>";
  }

  // public function __destruct(){
  //   echo __class__ . " destroyed <br>";
  // }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

}

$person2 = new GreatPerson("Harry", 'harry@harry.he');
echo $person2->getEmail(). "<br>";

class Customer extends GreatPerson{

  public function __construct($name, $email, $cellNo){
    parent::__construct($name, $email);
    $this->cellPhone = $cellNo;
  }

  private $cellPhone;
  
  public function setCell($cellNo){
    $this->cellPhone = $cellNo;
  }

  public function getCell(){
    return $this->cellPhone;
  }
}

$customer1 = new Customer("CusAndres", 'andre2@andre.sdf', 29374);
// echo $customer1->name . " " . $customer1->cellPhone . "<br>";
echo $customer1->getName() . " " . $customer1->getCell() . " <br>";

?>
