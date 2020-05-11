<?php

include 'webhook.php';

if (!empty($data['message']['text'])) {
	$text = $data['message']['text'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h2>Текст сообщения вот: 
		<?php
			echo $text;
			}
		?>
	
		</h2>
		<br>
		<h1>Тут должна быть картинка:</h1>
	</body>

</html>