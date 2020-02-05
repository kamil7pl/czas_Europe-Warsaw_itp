<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Czas</title>
</head>
<body>
    <?php
	require_once("czas.php");
		$t=new czas();
		echo $t->teraz("America/Atka")."<br />";
		echo $t->teraz("Europe/Warsaw")."<br />";
		echo $t->teraz("America/Atka")."<br />";
		echo $t->teraz("Europe/Warsaw")."<br />";
		?>
</body>
</html>