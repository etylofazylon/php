<?php
//chmod 777 /home/student/public_html
$wskaznik = fopen("form_answers.txt", "a");

if(!empty($_POST["login"]) && isset($_POST["login"]))
  $login = $_POST["login"];
else
  $login = "";

if(!empty($_POST["pass"]) && isset($_POST["pass"]))
  $password = $_POST["pass"];
else
  $password = "";

if(!empty($_POST["choice"]) && isset($_POST["choice"]))
  $choice = $_POST["choice"];
else
  $choice = "";

if(!empty($_POST["interests"]) && isset($_POST["interests"]))
  $interests_tab = $_POST["interests"];
else
  $interests_tab = array();

$answers = "Login=$login;Password=$password;Materials=$choice;Interests=";

$ile_zainteresowan = count($interests_tab);

if($ile_zainteresowan == 0)
  $answers = $answers."BRAK\n";
else
{
  for($i = 0; $i < $ile_zainteresowan; $i++)
  {
    $answers = $answers.$interests_tab[$i];
    if($i < $ile_zainteresowan - 1)
	    $answers = $answers.",";
    else
	    $answers = $answers."\n";
  }
}
fputs($wskaznik, $answers);
fclose($wskaznik);

echo "Zapisano podane wartosci; <a href=formularz.html>Wróć do formularza</a>";
?>