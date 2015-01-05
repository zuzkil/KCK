<!DOCTYPE html>
<html lang="PL">
<head>
	<title>Zbuduj Dom</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
	<HEADER>Zbuduj Dom</HEADER>
	<DIV id="ekran"> 
	<?php
	?>
	
	</div>
	<form method="POST" action="interpreter.php">
		<input type="textbox" name="komenda">
		<input id="przycisk_wykonaj" type="submit" name="wykonaj" value="Dodaj polecenie">
	</form>
</body>
</html>