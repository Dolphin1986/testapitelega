<?php

const TOKEN = '1228487916:AAHi6eOerKee0pp20YVbUgei57DILMQe33Y';
const BASE_URL = 'https://api.telegram.org/bot'.TOKEN.'/';

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

function sendRequest($method, $params = []) {

	if (!empty($params)) {
		$url = BASE_URL.$method.'?'. http_build_query($params);
	} else {
		$url = BASE_URL.$method;
	}

	return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

}

$time = date('H:m:s');
$chat_id = $update['massge']['chat']['id'];

sendRequest('sendMassage',['chat_id'=> $chat_id, 'text'=> $time]);




// $time = file_put_contents(__DIR__.'/log.txt', $update['update_id']);

// file_put_contents(__DIR__.'/last_log.txt', file_get_contents('php://input');
// if ($time = $time) {
// 	file_put_contents(__DIR__.'/last_log.txt', $update['0']['img_url']);
// } else {
// 	file_put_contents(__DIR__.'/log.txt', $update['0']['img_url']);
// }





// $url    = 'php://input';

//     $data   = file_get_contents($url);

//     if ( ! empty($data)) {
//         $contents = json_decode(html_entity_decode($data), TRUE);

//         echo '<pre>';
//         print_r($contents['response']);
//         echo '</pre>';
//     }