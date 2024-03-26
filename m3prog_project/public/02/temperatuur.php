<?php

function celsiusToFahrenheit($celsius) {
    return ($celsius * 1.8) + 32;
}

function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>\n";

$celsius = 76;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>\n";

$celsius = 76;
$kelvin = celsiusToKelvin($celsius);
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>\n";

$kelvin = 349.15;
$celsius = kelvinToCelsius($kelvin);
echo "{$kelvin} Kelvin = {$celsius} graden Celsius. <br/>\n";

?>
