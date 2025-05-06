<?php 

// a PHP script that takes temperature input or static variable and converts it between Celsius and Fahrenheit.


$temperature = 25; // Celsius
$unit = "F"; // C for Celsius, F for Fahrenheit
if ($unit == "C") {
    $fahrenheit = ($temperature * 9/5) + 32;
    echo "Temperature in Fahrenheit: " . $fahrenheit . "°F";
} elseif ($unit == "F") {
    $celsius = ($temperature - 32) * 5/9;
    echo "Temperature in Celsius: " . $celsius . "°C";
} else {
    echo "Invalid unit. Please use 'C' for Celsius or 'F' for Fahrenheit.";
}




?>