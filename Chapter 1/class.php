<?php
// echo "Let,s understand Oops";
class Player{
    // properties
    public $name;
    public $speed=5;
    // method
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
echo"<b>Let,s undarestand oops class: </b><br>";
$player1=new Player();
// You can use the instanceof keyword to check if an object belongs to a specific class:
    echo"<b>*instanceof keyword to check if an object<br></b>";
var_dump($player1 instanceof Player)."<br>";

$player1->set_name("-Anjali");
echo $player1->get_name()."<br>";


$player2=new Player();
$player2->set_name("Harsh");
echo $player2->get_name()."<br>";


$player3=new Player();
$player3->set_name("Dhruv");
echo $player3->get_name();
?>