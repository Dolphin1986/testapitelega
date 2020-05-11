<?php

$data = file_get_contents(__DIR__ . '/log.txt');

if (!empty($data['message']['text'])) {
	$text = $data['message']['text'];
		echo $text;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h2>Текст сообщения вот: </h2>
		<?php
			
		?>
		<br>
		<h1>Тут должна быть картинка:</h1>
	</body>

</html>