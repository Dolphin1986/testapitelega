<?php

$data = file_get_contents(__DIR__.'/log.txt',true);

echo "<pre>";
echo ($data);
echo "<pre>";

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
		<img src="<?php
			echo ($data);
		?>">
	</body>

</html>