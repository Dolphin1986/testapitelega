<?php

$data = file_get_contents(__DIR__.'/log.txt',true);
$img = file_get_contents(__DIR__.'/img.txt',true);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
	<script type="text/javascript">
		function nikRefresh()  
					{  
					    jQuery.ajax({  
					        url: "hook.php",
					        type : 'get',
					        success: function(html){  
					            jQuery("#content").html(jQuery('.data', data).html());
					        }  
					    });  
					}

	</script>
</head>
	
	<body>
		<h2>Текст сообщения вот: </h2>
		<?php
			echo ($data);
		?>
		<br>
		<h1>Тут должна быть картинка:</h1>
		<div class="data">
			<img src="<?php
				echo ($img);
			?>">
		</div>
	</body>




</html>