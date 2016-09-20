<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SQL Queries</title>
	<?php include "../includes/headlinks.php" ?>
</head>
<body>

<?php include "../includes/header.php" ?>

<div class="container ptb">
	<div class="row" style="text-align: center">
		<h1><strong>Opdracht 3: MySQL query oefeningen (HBO Stof)</strong></h1> <br>

		<h1 style = "color: blue">Les 1: JOIN</h1> <br>

		<h2>Object Basketbal</h2>

		<ul>
			<li><strong>1. Geef van elk lid het lidnummer, de achternaam en de boetebedragen die voor hem of haar betaald zijn. Dus ook alle leden zonder boetes laten zien! </strong></li> <br>
			<li><strong>2. Geef een overzicht van alle leden. Toon het lidnummer, de achternaam, het geslacht en van de aanvoerders ook het team (teamcode en teamnaam)  waar ze aanvoerder van zijn.</strong></li> <br>
			<li><strong>3. Geef een lijst van de leden die spelen in team ‘REDGH1’ . Toom indien mogelijk informatie over de bestuursfunctie die het lid heeft gehad. Toon het lidnummer, de achternaam, de functie en de begindatum.</strong></li>
		</ul>

		<br> <br>

		<ul>
			<li>1. <code>select Lid.lidnr, achternaam, Boete.bedrag from Lid left join Boete ON Lid.lidnr = Boete.lidnr;</code></li> <br>
			<li>2. <code>select Lid.lidnr, achternaam, Lid.geslacht, Team.teamcode, Team.teamnaam  from Lid left join Team ON Lid.lidnr = Team.aanvoerder;</code></li> <br>
			<li>3. <code>select Lid.lidnr, achternaam, speelt_in, geb_datum  from Lid left join Team ON Lid.lidnr = Team.aanvoerder WHERE speelt_in = 'REDGH1';</code></li>
		</ul> <br>

		<h2>Object Werknemer</h2>
		<ul>
			<li><strong>1. Geef van elke afdeling het nummer, de locatie en de namen en functies van de werknemers die er werken. Let erop dat afdeling 40 ook wordt getoond!</strong></li> <br>
			<li><strong>2. Geef van alle salarisschalen het nummer en van de bijbehorende werknemers het nummer, de naam en het salaris. Sorteer de uitkomst op salarisschaal.</strong></li>
			<li><strong>3. Geef nummer en naam van de werknemers en vermeld ook het nummer en de naam van hun chef. Zorg dat alle werknemers in de lijst staan.</strong></li>

		</ul>

		<br> <br>

		<ul>
			<li>1. <code>select Afdeling.anr, Afdeling.anaam, Afdeling.locatie, Werknemer.functie from Afdeling left join Werknemer ON Werknemer.anr = Afdeling.anr;</code></li> <br>
			<li>2. <code>select S_schaal.schaal,  Werknemer.anr,  Werknemer.wnaam, Werknemer.salaris from S_schaal inner join Werknemer ON Werknemer.anr ORDER BY S_schaal.schaal;</code></li> <br>
			<li>3. <code>select S_schaal.schaal,  Werknemer.anr,  Werknemer.wnaam, Werknemer.salaris from S_schaal inner join Werknemer ON Werknemer.anr ORDER BY S_schaal.schaal;</code></li> <br>
		</ul> <br>
	</div>

	<hr>
	<a href="/opdrachten.php">Klik hier om alle opdrachten te bekijken</a>
</div>








<?php include "includes/footerscripts.php" ?>
</body>
</html>


























