<?php
/**
 * Скрипт для изучения обработки массива чекбоксов.
 */

if (isset($_POST['submit']) && $_POST['submit'])
{
	var_dump($_POST['colors']);
}

?>

<html>
<head>
	<title>Изучение обработки чекбоксов</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	<form action="index.php" method="post">
		<input type="checkbox" name="colors[0]"/>
		<input type="checkbox" name="colors[1]"/>
		<input type="checkbox" name="colors[2]"/>
		<input type="checkbox" name="colors[3]"/>

		<input type="submit" name="submit" value="Отправить"/>
	</form>
</body>
</html>