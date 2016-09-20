<?php
$currentyear = date('Y');
$currentmonth = date('m');
$currentday = date('d');
$currentdate = date('d-m-Y');


if (isset( $_POST['submit']) ) {

	// Als er een post request op de submit knop word uitgevoerd
	// worden de waardes gelijk gezet aan wat er is ingevoerd.
	// maar er moet wel iets ingevoerd zijn.
	if($_POST['day'] != null && $_POST['month'] != null && $_POST['year'] != null) {
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		$inputdate = $day.'-'.$month.'-'.$year;

		$inputdateview   = '<strong>De datum die is ingevoerd:</strong> '.$inputdate;
		$currentdateview = '<strong>De datum van vandaag:</strong> '. $currentdate;

		// Als de momentele maand zich onder de maand van het verjaardaag bevind,
		// trek er dan een jaargetal vanaf. Dat geld ook voor het dag nummer.
		if ($currentmonth < $month || ($currentday < $day && $currentmonth < $month) || $currentday < $day) {
			$result = $currentyear-$year-1;
		} else { // en anders word er gewoon het momentele jaargetal van het geboortejaar afgetrokken
			$result = $currentyear-$year;
		}

		$ageresult = '<strong style="color: blue">Je bent '.$result. ' jaar oud</strong>';



		if($currentmonth == $month && $currentday == $day) {
			$birthdaymessage = "Je bent jarig vandaag!";

		}
	}



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leeftijd Berekenen</title>
	<?php include "../includes/headlinks.php" ?>
</head>
<body>

<?php include "../includes/header.php" ?>

<div class="container ptb">
	<div class="row" style="text-align: center">
		<h1>Opdracht 1: Leeftijd berekenen</h1>
		<p>
			Als iemand zijn geboortedatum invult dan dient de leeftijd van de persoon te worden weergegeven <br>
			Als iemand jarig is vermeld dit er dan bij!
		</p> <br>
		<form action="" method="post">
			<div id="txtTextfield">
				<label>Dag</label>
				<input name="day" type="number" id="day" maxlength="2" value="<?= $day ?>"/>
				<label>Maand</label>
				<input name="month" type="number" id="month" maxlength="2" value="<?= $month ?>"/>
				<label>Jaar</label>
				<input name="year" type="number" id="year" maxlength="4" value="<?= $year ?>"/>
			</div> <br>
			<input name="submit" type="submit" value="Bereken!" />
		</form> <br> <br>
		<div class="container">
			<p>
				<?= $inputdateview ?> <br>
				<?= $currentdateview ?> <br>
				<?= $ageresult ?> <br> <br>
				<?= $birthdaymessage ?>
			</p>
		</div>
	</div>

	<hr>
	<a href="/opdrachten.php">Klik hier om alle opdrachten te bekijken</a>
</div>





<?php include "includes/footerscripts.php" ?>
</body>
</html>


























