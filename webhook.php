<?php

// $update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);


$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

$time = file_put_contents(__DIR__.'/log.txt', $update['0']['time']);

if ($time = $time) {
	file_put_contents(__DIR__.'/last_log.txt', $update['0']['img_url']);
} else {
	file_put_contents(__DIR__.'/log.txt', $update['0']['img_url']);
}





// $url    = 'php://input';

//     $data   = file_get_contents($url);

//     if ( ! empty($data)) {
//         $contents = json_decode(html_entity_decode($data), TRUE);

//         echo '<pre>';
//         print_r($contents['response']);
//         echo '</pre>';
//     }