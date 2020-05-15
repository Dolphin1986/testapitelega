<?php

$data = file_get_contents(__DIR__.'/log.txt',true);
$img = file_get_contents(__DIR__.'/img.txt',true);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h2>Текст сообщения вот: </h2>
		<?php
			echo ($data);
		?>
		<br>
		<h1>Тут должна быть картинка:</h1>
		<img src="<?php
			echo ($img);
		?>">
	</body>

</html>