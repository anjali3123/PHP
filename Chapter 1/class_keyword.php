<?php
// Inside the class

class  car{
  public $name;
  public $model;

  function set_name($name){
  $this->name=$name;

  }
}
echo"<b>Inside the class(by adding a set_name() method and use this):<b><br> ";
$car1=new car();
$car1->set_name("Honda City<br>");
echo $car1->name;

?>
<?php 
// Outside the class
echo"<br>";
class book{
  public $name;

  // function set_name($name){
  //   $this->name=$name;
  // }
}
 echo"<b>Outside the class(by directly changing the property value):</b><br> ";
$book1=new book();

$book1->set_name="HTML";
echo $book1->name;


?>
<?php
class Fruit {
  public $name;
}
$apple = new Fruit();

$apple->name = "Apple";

echo $apple->name;
?>