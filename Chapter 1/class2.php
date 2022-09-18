<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
  width:15%;
}

</style>
</head>
<body>
    
</body>
</html>
<?php

class flower{
    // properties
    public $name;
    public $color;
   
   
    // method
    function set_name($name){
    $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
     function get_color(){
        return $this->color;
     }
}
echo"<p align='center'><b>flower name and colors:</b><br>";
// flower1
$flower1= new flower();
$flower1->set_name('Rose');
$flower1->set_color('Red');

// flower2

$flower2= new flower();
$flower2->set_name('Marigold');
$flower2->set_color('Yellow');

// flower3

$flower3= new flower();
$flower3->set_name('Butterfly Pea');
$flower3->set_color('Blue');
echo"<table  align='center'>
<tr>
  <th>Name</th>
  <th>color</th>
  
</tr><tr>
<td>".$flower3->get_name()."</td>
<td>".$flower3->get_color()."</td>
</tr>
<tr>
<td>".$flower2->get_name()."</td>
<td>".$flower2->get_color()."</td>
</tr>
<tr>
<td>".$flower1->get_name()."</td>
<td>".$flower1->get_color()."</td>
</tr>"

?>