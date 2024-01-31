<?php

$cars = array(
  array("model" => "Volvo", "vendu" => 22, "stock" => 18),
  array("model" => "BMW", "vendu" => 33, "stock" => 5),
  array("model" => "Saab", "vendu" => 3, "stock" => 88),
  array("model" => "Land Rover", "vendu" => 45, "stock" => 2)

);


for ($i=0; $i < count($cars); $i++) { 
  echo $cars[$i]["model"];
};

 

foreach ($cars as $car) {
  echo "model: " . " " . $car["model"] ." ". $car["vendu"] . " " . $car["stock"];
 echo "<p>model: $car[model], vendu : $car[vendu], stock: $car[stock]</p><br/>";
}


foreach ($cars as  $car) :
  echo "$car[model] <br>";

endforeach;