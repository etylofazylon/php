<?php

$katalog = "/home/student/public_html";
$uprawnienia_dziesietnie = fileperms($katalog);
$uprawnienia_osemkowo = substr(decoct($uprawnienia_dziesietnie), -3);
echo "Katalog <b>public_html</b> ma uprawnienia: $uprawnienia_osemkowo <br />";

echo "<h3>Uprawnienia do katalogu $katalog</h3>";
if(is_readable($katalog))
  echo "Odczyt --> TAK <br />";
else
  echo "Odczyt --> NIE <br />";

if(is_writable($katalog))
  echo "Zapis --> TAK <br />";
else
  echo "Zapis --> NIE <br />";

if(is_executable($katalog))
  echo "Wykonywalnosc --> TAK <br />";
else
  echo "Wykonywalnosc --> NIE <br />";

chmod($katalog, "0755");
// tu wspominamy dlaczego to nie zadziala

if(!is_dir("Roboczy")) // jesli nie istnieje jeszcze katalog "Kopie"
  mkdir("Roboczy");
else
  rmdir("Roboczy");

copy("dane_1.txt", "dane_2.txt");
copy("dane_1.txt", "dane_3.txt");
if(is_file("dane_2.txt"))
  rename("dane_2.txt", "kopia_zapasowa");

// zmienic uprawnienia w konsoli: "chmod 757 /home/student"
if(is_file("/home/student/public_html/kopia_zapasowa"))
  rename("kopia_zapasowa", "/home/student/kopia_zapasowa");

if(is_file("dane_3.txt"))
  unlink("dane_3.txt");

?>
