<?php

//Task 1

$redLight = true;

 if ($redLight === true) {
 	echo "Stop the car!";
 }

 print ($redLight === true) ? "<p>Stop the car!</p>" : "Keep moving";

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 2

$redLight = false;

if ($redLight === true) {
 	echo "Stop the car!";
 } else {
 	echo "Are you sure that yellow light is not on?";
 }

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 3

$yellowLight = false;


if ($redLight === true || $yellowLight === true) {
	echo "Stop the car!";
} else {
	echo "Are you sure that traffic lights are working at all?";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 4

$greenLight = false;


if ($redLight === true || $yellowLight === true && $greenLight === false) {
	echo "Stop the car!";
} elseif ($redLight === false && $yellowLight === false && $greenLight === false) {
	echo "Power outage!";
} elseif ($redLight === false && $yellowLight === false && $greenLight === true) {
	echo "Keep moving!";
} elseif ($redLight === true || $yellowLight === true && $greenLight === true) {
	echo "Traffic lights are messed up!";
} else {
	echo "Use the common sense and stay safe!";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

//Task 5

switch ($greenLight) {
    case "false":
        echo "Stop the car!";
        break;
    case "false":
        echo "Power outage!";
        break;
    case "true":
        echo "Keep moving";
        break;
    case "true":
        echo "Traffic lights are messed up!";
        break;
    default:
        echo "Use common sense and stay safe!";
}

?>