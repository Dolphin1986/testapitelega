<?php

$data = file_get_contents(__DIR__.'/log.txt',true);
$img = file_get_contents(__DIR__.'/img.txt',true,null,0);



echo '<img src="'.$img.'">';

// echo "<h1>".$data."</h1>";



