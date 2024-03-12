<?php

$huisnummer = 42;

$rijbewijsGeslaagd = true;

$prijsEuro95 = 1.75;

$variabeleZonderWaarde;
echo "Huisnummer: $huisnummer <br>";
echo "Rijbewijs geslaagd: " . ($rijbewijsGeslaagd ? "Ja" : "Nee") . "<br>";
echo "Prijs Euro 95: €$prijsEuro95 <br>";
echo "Variabele zonder waarde: " . (isset($variabeleZonderWaarde) ? "Heeft een waarde" : "Heeft geen waarde") . "<br>";
?>
