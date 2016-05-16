<?php

// pętle: while(){}; do{}while(); for(){}; foreach(){}

$i = 1;
while($i <= 10)
{
	echo "Linia tekstu numer $i <br />";
	$i++;
}
echo "<hr />";

for($j = 1; $j <= 10; $j++)
{
	echo "Linia tekstu numer $j <br />";
}
echo "<hr />";

// Wyświetlić elementy tablicy za pomocą pętli "for"

$tab = array(3, 18, -5, 2);
$ilosc = count($tab);

for($i = 0; $i < $ilosc; $i++)
{
	echo "Element ".($i+1)." wynosi $tab[$i] <br />";
}
echo "<hr />";

foreach($tab as $w)
  echo "$w <br />";

// public_html ---- skrypt5.php
// http://localhost/~student/skrypt5.php
?>
