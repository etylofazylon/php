<?php

$x = rand(-5, 5);
echo "x = $x <br />";

if($x > 0)
{
	echo "x jest liczbą dodatnią";
}
elseif($x == 0)
{
	echo "x jest zerem";
}
else
{
	echo "x jest liczbą ujemną";
}

echo "<br />";

// koniunkcja:  if(war1 && war2)
// alternatywa:  if(war1 || war2)
	
$w = rand(0, 3);
echo "w = $w <br />";

switch($w)
{
	case 0:
	  echo "Liczba stanowi początek zakresu";
	  break;
	
	case 3:
	  echo "Liczba stanowi koniec zakresu";
	  break;
	  
	default:
	  echo "Liczba jest z wnętrza zakresu";
}

// public_html ---- skrypt3.php
// http://localhost/~student/skrypt3.php
?>