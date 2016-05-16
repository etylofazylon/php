<?php

$a=55; $b=10; $c=-12; $d=3.14;
$txt1="Hello";  $txt2="World";
// komentarz 1-linijkowy
/* Komentarz
     Wielolinijkowy */
echo "$a, $b, $c, $d, $txt1 $txt2 <br />";
$a+=5;  $b-=3;  $c++;
$suma = $a + $b;
$iloraz = $a / $b;
$modulo = $a % $b;
echo "a + b = $suma , a / b = $iloraz , a % b = $modulo <br />";

$konkatenacja1="$txt1 $txt2";
$konkatenacja2=$txt1." ".$txt2;
echo "$konkatenacja1<br />$konkatenacja2<br />";

$ilosc_znakow = strlen($konkatenacja1); // ilość znaków w tekście
$duze_litery = strtoupper($konkatenacja1);
$male_litery = strtolower($konkatenacja1);

echo "Wyrażenie <u>$konkatenacja1</u> zawiera $ilosc_znakow znaków <br />";
echo "Dużymi literami: $duze_litery <br />";
echo "Małymi literami: $male_litery <br />";

// public_html ---- skrypt1.php
// http://localhost/~student/skrypt1.php
?>
