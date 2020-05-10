<?php

include 'webhook.php';

$last_log = './last_log.txt';
$log = './log.txt';

$hook = file_get_contents($last_log);

echo "Это Hook - ".$hook.'<br>';

echo $hook;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h2>Текст сообщения вот:</h2>
		<br>
		<h1>Тут должна быть картинка:</h1>
	</body>

</html>