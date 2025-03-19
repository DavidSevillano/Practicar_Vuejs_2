<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Permite métodos POST y GET
header("Content-Type: application/json");
/*
In this exercise you are going to create a helpful program so that you don't have to remember the values of the bands.
The program will take color names as input and output a two digit number, even if the input is more than two colors!

The band colors are encoded as follows:

black: 0
brown: 1
red: 2
orange: 3
yellow: 4
green: 5
blue: 6
violet: 7
grey: 8
white: 9
From the example above: brown-green should return 15, and brown-green-violet should return 15 too, ignoring the third color.
*/

$firstColor = $_POST['firstColor'] ?? '';
$secondColor = $_POST['secondColor'] ?? '';
$number = 0;

switch ($firstColor) {
 
    case 'black': $number = 0; break;

    case 'brown': $number = 1; break;

    case 'red': $number = 2; break;

    case 'orange': $number = 3; break;

    case 'yellow': $number = 4; break;

    case 'green': $number = 5; break;

    case 'blue': $number = 6; break;

    case 'violet': $number = 7; break;

    case 'grey': $number = 8; break;

    case 'white': $number = 9; break;

    default: echo 'Color not valid';
}

switch ($secondColor) {
 
    case 'black': $number = $number * 10 + 0; break;

    case 'brown': $number = $number * 10 + 1; break;

    case 'red': $number = $number * 10 + 2; break;

    case 'orange': $number = $number * 10 + 3; break;

    case 'yellow': $number = $number * 10 + 4; break;

    case 'green': $number = $number * 10 + 5; break;

    case 'blue': $number = $number * 10 + 6; break;

    case 'violet': $number = $number * 10 + 7; break;

    case 'grey': $number = $number * 10 + 8; break;

    case 'white': $number = $number * 10 + 9; break;

    default: echo 'Color not valid';
}

echo json_encode(['number' => $number]); // Enviar el número como respuesta JSON
