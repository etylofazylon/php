<?php

function Podzielnosc($liczba1, $liczba2)
// funkcja zwraca wartość logiczną, po zbadaniu podzielności liczby 1 przez liczbę 2
{
	if($liczba2 == 0)
	{
		return false;
	}
	else
	{
		if($liczba1 % $liczba2 == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

function F($x)
// funkcja zwraca wartość liczbową według wzoru
{
	if($x < -2)
	{
		$wynik = $x + 13;
	}
	elseif($x >= -2 && $x < 1)
	{
		$wynik = pow($x, 7) - $x / 5;
	}
	else
	{
		$wynik = (pow($x, 3) + 4) / (sqrt($x) + 10);
		$wynik = round($wynik, 2);
	}
	
	return $wynik;
}







function PrzekazanieArgumentow($wartosc, &$referencja)
// 2 tryby przekazywania parametrów do funkcji
{
	echo "<h3>Wartości początkowe parametrów:</h3>";
	echo "wartosc = $wartosc ; referencja = $referencja <br />";
	
	$wartosc += 10;
	$referencja += 10;
	
	echo "<h3>Wartości parametrów po zmianach (wewnątrz funkcji)</h3>";
	echo "wartosc = $wartosc ; referencja = $referencja <br />";
}

function PowiekszanieLiterTablicy(&$napisy)
// Funkcja zmienia co drugi element tablicy "napisy" (począwszy od drugiego elementu) tak, aby był
// napisany dużymi literami
{
	$ilosc = count($napisy);
	for($i = 0; $i < $ilosc; $i++)
	{
		if($i % 2 == 1)
		{
			$napisy[$i] = strtoupper($napisy[$i]);
		}
	}
}

function CiagRekurencja($n)
// Funkcja zwraca N-ty wyraz ciągu liczbowego, według podanego przepisu
{
	if($n == 1)
	{
		return -1;
	}
	elseif($n > 1)
	{
		return -1 * CiagRekurencja($n - 1) * $n - 3;
	}
}

// public_html ---- funkcje.php
?>
