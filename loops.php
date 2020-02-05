<?php

//Task 1

$num = 1;

while ($num <= 10) {
	echo $num." ";
	$num++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 2

$nr = range(5, 100, 5);
foreach ($nr as $nb) {
	echo $nb.", ";
}

echo "<br>";
echo "<br>";


 $ev= "";
 $od= "";

for ($int = 0; $int <= 100; $int += 5) {
    if ($int%2==0) {
    $ev.=$int."  ";
    } else {
    $od.=$int." "; 
  }
}

echo "$od";

// task separator

echo "<hr style=\"margin 1rem 0\">";

//Task 3

$food = [
  "Fries",
  "Icecream",
  "Chocolate",
  "Candy"
];


$fav = 0;
while ($fav < sizeof($food)) {
  echo $food[$fav];
  echo "<br>";
  $fav += 1;
}


for ($fav=0; $fav < sizeof($food) ; $fav++) { 
  echo $food[$fav];
  echo "<br>";
}

foreach ($food as $fav) {
  echo $fav;
  echo "<br>"; 
}

// task separator

echo "<hr style=\"margin 1rem 0\">";

//Task 4

echo "<ul>";
for ($fav=0; $fav < sizeof($food) ; $fav++) { 
      echo "<li>$food[$fav]</li>";
}
echo "</ul>";

// task separator

echo "<hr style=\"margin 1rem 0\">";

//Task 5

$food_assoc = [
  "Fries" => [
              "type" => "FastFood",
              "origin" => "U.S.A"],
  "Icecream" => [
              "type" => "Dessert",
              "origin" => "China"],
  "Chocolate" => [
              "type" => "Snack",
              "origin" => "Switzerland"],
  "Candy" => [
              "type" => "Treat",
              "origin" => "India"]
];

print_r($food_assoc);

echo "<br><br><ul>";
foreach ($food_assoc as $main => $main_val) {
    echo "<li>" . $main . "</li>
    <ul>" . "<li>" . $main_val['type'] . "</li>
    <li>" . $main_val['origin'] . "</li>
    </ul>";
}
echo "</ul>";


?>