<?php

echo "<h2>Wybrane działania matematyczne</h2>";

echo "Liczba PI = ".M_PI."<br />";
echo "Liczba Eulera = ".M_E."<br />";

$a = rand(-10, 10); // losowa liczba całkowita z zakresu od -10 do +10
$b = rand(-1000, 1000) * 0.01; // losowa liczba rzeczywista z zakresu od -10 do +10 z dokładnością do 0.01

echo "a = $a , b = $b <br />";
echo "Wartość bezwzględna z liczby $a wynosi ".abs($a)."<br />";
echo "Zaokrąglenie liczby $b do 1 miejsca po przecinku wynosi ".round($b, 1)."<br />";
echo "Pierwiastek z liczby 5 wynosi ".sqrt(5)."<br />";
echo "$b podniesione do potęgi $a wynosi ".pow($b, $a)."<br />";

echo "Sinus z PI/2 wynosi ".sin(M_PI/2)."<br />"; // jest jeszcze cos(), tan(), atan()
echo "Logarytm naturalny z 7 wynosi ".log(7)."<br />";
echo "Logarytm o podstawie 2 z 64 wynosi ".log(64, 2)."<br />";

echo "Konwersja liczby 138 z systemu dziesiętnego na system binarny ma postać ".decbin(138)."<br />";
// jest jeszcze: bindec(), decoct(), octdec(), dechex(), hexdec(),
// base_convert(liczba, system_we, system_wy)

// public_html ---- skrypt2.php
// http://localhost/~student/skrypt2.php
?>
