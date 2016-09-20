<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'stage');


// Als er op de registratie knop word geklikt.
if (isset($_POST['register'])) {
	if ($_POST['username'] && $_POST['password'] && $_POST['email'] != null) {

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$created_at = time();
		$email = $_POST['email'];


		$connection->query("INSERT INTO users (username, password, created_at, email) VALUES('".$username."','".$password."','".$created_at."','".$email."')");
		$message = 'Welkom bij Eyeonline, '. ' '.' <strong>'. $_POST['username'] .'</strong>';
	} else {
		$message = 'Gebruikersnaam en wachtwoord kunnen niet leeg zijn...';
	}
}

		$users = $connection->query("SELECT * FROM users");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<?php include "../includes/headlinks.php" ?>
</head>
<body>

<?php include "../includes/header.php" ?>

<div class="container ptb">
	<div class="row" style="text-align: center">
		<h1>Opdracht 4: Plain PHP User Login</h1> <br>

		<p><?= $message ?></p>

		<h2><strong>Registreren</strong></h2>
		<form method="post" action="">

			<input type="text" name="username" placeholder="Gebruikersnaam"> <br>
			<input type="email" name="email" placeholder="E-mail"> <br>
			<input type="password" name="password" placeholder="Wachtwoord"> <br>
			<input type="submit" name = "register" value="Registreren">

		</form>

		<hr>



		<h2><strong>Inloggen</strong></h2>
		<form method="post" action="loginscript.php">

			<input type="text" name="username" placeholder="Gebruikersnaam"> <br>
			<input type="password" name="password" placeholder="Wachtwoord"> <br>
			<input type="submit" value="Inloggen">

		</form>

		<hr>

		<p>
			<h3>Geregistreerde gebruikers: </h3>
		<table>
			<tr>
				<td>Gebruikersnaam</td>
				<td>Datum</td>
			</tr>

			<?php

			foreach ($users as $user) {
				echo '<tr>'.'<td>'.$user['username'] .'</td>'.'</tr>';
			}

			?>
		</table>



		</p> <br>


	</div>

	<hr>
	<a href="/opdrachten.php">Klik hier om alle opdrachten te bekijken</a>
</div>








<?php include "includes/footerscripts.php" ?>
</body>
</html>


























