<?php

$getal = 123.45678;
$afgerond1 = ceil($getal);
echo "Als je ${getal} afrondt naar boven krijg je: ${afgerond1}<br/>\n";

$getal2 = 987.65432;
$afgerond2 = floor($getal2);
echo "Als je ${getal2} afrondt naar beneden krijg je: ${afgerond2}<br/>\n";

$random1 = rand();
$random2 = rand();
$random3 = rand();

$sum = $random1 + $random2;
$average = $sum / 3;

echo "Random getallen: ${random1}, ${random2}, ${random3}<br/>\n";
echo "Gemiddelde van de eerste twee random getallen: " . number_format($average, 2) . "<br/>\n";

?>
