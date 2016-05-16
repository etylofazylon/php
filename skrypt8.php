<?php

// 59031834221:,
// 92112958130:,
// 86091272998:,
// 75011854337:,
// 69053039610:,
$wskaznik = fopen("dane_1.txt", "r"); // kursor na poczatku pliku

$pesel = fread($wskaznik, 11);
echo "PESEL 1 = $pesel <br />";

fseek($wskaznik, 14);
$pesel = fread($wskaznik, 11);
echo "PESEL 2 = $pesel <hr />";

// wyswietlenie 4 pierwszych PESEL-i jako listy nienumerowanej:

fseek($wskaznik, 0);
echo "<ul>";
for($i = 1; $i <= 4; $i++)
{
  $pesel = fread($wskaznik, 11);
  echo "<li>$pesel</li>";
  fseek($wskaznik, $i * 14);
}
echo "</ul><hr />";

// wyswietlenie wszystkich PESELI jako pojedynczego lancucha tekstowego

fseek($wskaznik, 0);
$rozmiar_pliku = filesize("dane_1.txt");
$pesele = fread($wskaznik, $rozmiar_pliku);
echo "$pesele <hr />";

fclose($wskaznik);

// zapis danych do nowego pliku:

// w konsoli: "chmod 757 /home/student/public_html"
$wskaznik = fopen("imiona.txt", "w"); // jesli plik juz istnieje, zostanie nadpisany
$dane = "Roman, Adam;\nGenowefa;\n";
fputs($wskaznik, $dane);
$dane = "Bozydar, Strzebietoslaw;\n";
fputs($wskaznik, $dane);
fclose($wskaznik);

// dopisanie linii na koniec istniejacego pliku:

// nalezy najpierw zmienic w konsoli: "chmod 757 /home/student/public_html/dane_1.txt"
$wskaznik = fopen("dane_1.txt", "a"); // dopisanie do konca pliku
$dane = "45120848294:,\n";
fputs($wskaznik, $dane);
fclose($wskaznik);

// dopisanie linii na poczatku pliku:

clearstatcache(); // funkcja czysci poprzednio zapamietany rozmiar pliku
$wskaznik = fopen("dane_1.txt", "r");
$stare_dane = fread($wskaznik, filesize("dane_1.txt"));
fclose($wskaznik);

$nowe_dane = "21102300154:,\n";
$wszystkie_dane = $nowe_dane.$stare_dane;
$wskaznik = fopen("dane_1.txt", "w");
fputs($wskaznik, $wszystkie_dane);
fclose($wskaznik);

?>
