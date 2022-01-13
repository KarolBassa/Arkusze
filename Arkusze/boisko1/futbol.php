<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Rozgrywki futbolowe</title>
<link rel="stylesheet" href="styl.css" type="text/css"/>
</head>
<body>
<header>
<h2>Światowe rozgrywki piłkarskie</h2>
<img src="obraz1.jpg" alt="boisko">
</header>
<div id="mecze">
<?php
$connect = mysqli_connect("localhost", "root", "", "test");
if($connect)
{
	$zapytanie="select zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka where zespol1 = 'EVG'";
	$wynik = mysqli_query($connect,$zapytanie);
	if($wynik)
	{
		while($linia=mysqli_fetch_row($wynik))
		{
			echo '<div class="roz">';
			echo '<h3>'.$linia[0]." - ".$linia[1].'</h3>';
			echo '<h4>'.$linia[2].'</h4>';
			echo '<p>'.$linia[3].'</p>';
			echo '</div>';
		}
	}
	mysqli_close($connect);
}
else
{
	echo "brak połączenia z bazą danych";
}
?>
</div>
<main>
<h2>Reprezentacja Polski</h2>
</main>
<div id="lewo">
<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
<form method="POST" action="futbol.php">
<input type="number" name="liczba" id="liczba">
<button type="submit" name="answer" id="answer" value="answer">Sprawdź</button>
</form>
<?php
$liczba=$_POST["liczba"];
if($liczba == NULL)
{
	echo "Nie wybrałeś żadnej liczby";
}
else 
{
	$connect = mysqli_connect("localhost", "root", "", "test");
if($connect)
{
	$zapytanie="SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id =".$liczba."";
	$wynik = mysqli_query($connect,$zapytanie);
	if($wynik)
	{
		while($linia=mysqli_fetch_array($wynik))
		{
			echo '<ul>'.'<li>'.'<p>'.$linia["imie"]." ".$linia["nazwisko"].'</p>'.'</li>'.'</ul>';
		}
	}
	mysqli_close($connect);
}
else
{
	echo "brak połączenia z bazą danych";
}
}
?>
</div>
<div id="prawo">
<img src="zad1.png" alt="piłkarz">
<p>Autor: Beniamin</p>
</div>
</body>
</html>