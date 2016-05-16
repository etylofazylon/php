
<?php

$wskaznik = fopen("form_answers.txt", "r");
$calosc = fread($wskaznik, filesize("form_answers.txt"));
echo "$calosc <hr />";
fclose($wskaznik);

echo "<h3>Lista danych</h3>";

$users = explode("\n", $calosc); // kazda nowa linia z pliku to osobny user
// $user_count = count($users);

foreach($users as $u)
{
  if($u != "")
  {
  $answers = explode(";", $u); // odpowiedzi usera oddzielone sa srednikami
  $login = explode("=", $answers[0]); // pierwsza odpowiedz to login
  echo "$login[1] --> "; // wartosc loginu

  $materialy = explode("=", $answers[2]); // trzecia odpowiedz to materialy
  if($materialy[1] == "T")
    echo "Zgoda na dodatkowe materialy --> ";
  else
    echo "Brak zgody na dodatkowe materialy --> ";

  $zainteresowania = explode("=", $answers[3]); // czwarta odpowiedz to zainteresowania
  $zainteresowania_wartosci = explode(",", $zainteresowania[1]); // czwarta odpowiedz to zainteresowania
  echo "Co lubi: ";

  foreach($zainteresowania_wartosci as $z)
    echo "$z; ";

  echo "<br />";

  }
}

?>