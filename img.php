<?php

$data = file_get_contents(__DIR__.'/log.txt',true);

$img = file_get_contents(__DIR__.'/img.txt',true);


$img_array = unserialize($img);


// print_r ($img_array);

foreach ($img_array as $key => $value) {
	echo '<div class="slider__item" ><img src="'.$value.'"></div>';
}






