<?php

// Wypełnić pustą tablicę 10 liczbami losowymi całkowitymi z zakresu od 0 do 100

$tab = array();
for($i = 0; $i < 10; $i++)
{
	$tab[$i] = rand(0, 100);
}

// Wyświetlenie liczb:

foreach($tab as $w)
{
	echo "$w <br />";
}

echo "Minimum z tablicy wynosi ".min($tab)."<br />";
echo "Maksimum z tablicy wynosi ".max($tab)."<br />";
echo "<hr />";

sort($tab); // sortowanie rosnące tablicy (zmiana kolejności elementów)
// rsort($tab) --> sortowanie malejące

echo "<h3>Elementy tablicy posortowane rosnąco:</h3>";
foreach($tab as $w)
{
	echo "$w <br />";
}
echo "<hr />";

// Rozdzielanie tekstów złożonych, ze względu na znak separatora

$tekst = "abc ; xyz ; nwo";
$tab_txt = explode(";", $tekst);

echo "<h3>Pojedyncze teksty po rozdzieleniu</h3>";
foreach($tab_txt as $wyraz)
{
	echo trim($wyraz)."<br />";
}

// public_html ---- skrypt6.php
// http://localhost/~student/skrypt6.php
?>
