<?php

include_once "funkcje.php";

$a = 12; $b = 5;

if(Podzielnosc($a, $b))
{
	echo "$a dzieli się przez $b <br />";
}
else
{
	echo "$a NIE dzieli się przez $b <br />";
}
echo "<hr />";

$w1 = F(-3); $w2 = F(0.5); $w3 = F(2);
echo "F(-3) = $w1 ; F(0.5) = $w2 ; F(2) = $w3 <br />";
echo "<hr />";

PrzekazanieArgumentow($a, $b);
echo "<h3>Wartości parametrów po zmianach (na zewnątrz funkcji)</h3>";
echo "wartosc = $a ; referencja = $b <br />";
echo "<hr />";

$tab=array("ja", "ty", "my", "oni");
PowiekszanieLiterTablicy($tab);
echo "<h3>Wyrazy w tablicy po wykonaniu funkcji powiększającej</h3>";

foreach($tab as $w)
{
	echo "$w <br />";
}
echo "<hr />";

echo "Szósty wyraz ciągu: a6 = ".CiagRekurencja(6);

// public_html ---- skrypt7.php
// http://localhost/~student/skrypt7.php
?>