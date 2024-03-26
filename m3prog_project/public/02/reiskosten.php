<?php

$afstand_naar_bordeaux = 950; 

$prijs_per_liter = 1.89;

$prijs_treinreis = 60;

$tankinhoud = 50;

$benzine_gebruikt = $afstand_naar_bordeaux / 15;

$aantal_keer_tanken = ceil($benzine_gebruikt / $tankinhoud);

$kosten_auto = $benzine_gebruikt * $prijs_per_liter;

echo "Totale afstand naar Bordeaux: " . number_format($afstand_naar_bordeaux, 2) . " km<br/>";
echo "Totale prijs voor de reis met de auto: €" . number_format($kosten_auto, 2) . "<br/>";
echo "Aantal liter benzine gebruikt: " . number_format($benzine_gebruikt, 2) . " liter<br/>";
echo "Aantal keer tanken onderweg: " . $aantal_keer_tanken . "<br/>";

if ($kosten_auto > $prijs_treinreis) {
    echo "Ik ga met de trein.";
} else {
    echo "Ik ga met de auto.";
}

?>
