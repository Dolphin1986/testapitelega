<?php

$data = file_get_contents(__DIR__.'/log.txt',true);
$img []= file_get_contents(__DIR__.'/img.txt',true);

print_r($img);

// echo '<img src="'.$img.'">';

// echo "<h1>".$data."</h1>";



