<?php

$data = file_get_contents(__DIR__.'/log.txt',true);
// $img = file_get_contents(__DIR__.'/img.txt',true);

// echo '<img src="'.$img.'">';

if ($data = $data){
	echo "<h1>".$data."</h1>";

} else {
	echo "<h1>".$data."</h1>";
}

