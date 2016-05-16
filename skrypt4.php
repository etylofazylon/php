<?php

$tab = array(); // deklaracja pustej tablicy

$tab[0] = 15; $tab[1] = -8.3; $tab[2] = "xyz";
$ilosc = count($tab);

echo "Ilość elementów w tablicy o nazwie <b>tab</b> wynosi $ilosc <br />";
echo "Elementy: $tab[0], $tab[1], $tab[2] <br />";

$tab_wypelniona = array(12, -5, "abc");
echo "<hr />";

$wplywy = array();
$wplywy["sobota"] = 1300; $wplywy["niedziela"] = 700;

echo "Wpływy z weekendu wynoszą: ".($wplywy["sobota"] + $wplywy["niedziela"]);

// public_html ---- skrypt4.php
// http://localhost/~student/skrypt4.php
?>
