<?php

$token = '1228487916:AAHi6eOerKee0pp20YVbUgei57DILMQe33Y';


$data = file_get_contents('php://input');
$data = json_decode($data, true);



$text = $data['message']['text']; 

file_put_contents(__DIR__ . '/log.txt',$text);

ob_start();

print_r($data);

$out = ob_get_clean(); 

file_put_contents(__DIR__ . '/last_log.txt', $out);




if (!empty($data['message']['photo'])) {
	$photo = array_pop($data['message']['photo']);
	
	$ch = curl_init('https://api.telegram.org/bot' . $token . '/getFile');  
	curl_setopt($ch, CURLOPT_POST, 1);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $photo['file_id']));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$res = curl_exec($ch);
	curl_close($ch);
	
	$res = json_decode($res, true);

	if ($res['ok']) {

		$src  = 'https://api.telegram.org/file/bot'. $token . '/' . $res['result']['file_path'];

		$img_arr[] = $src;

		array_push($img_arr, $src);

		ob_start();
		
		print_r($img_arr);

		$img_arr = ob_get_clean();

		file_put_contents(__DIR__ . '/img.txt', $img_arr);

		// file_put_contents(__DIR__ . '/img.txt', $src);		
		// file_put_contents(__DIR__ . '/img.txt', $src);
		// $dest = __DIR__ . '/img' . $data['update_id'] . '-' . basename($src);
		// copy($src, $dest);
	}
}




// ---------------------------------------------------

// const TOKEN = '1228487916:AAHi6eOerKee0pp20YVbUgei57DILMQe33Y';
// const BASE_URL = 'https://api.telegram.org/bot'.TOKEN.'/';

// $update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

// file_put_contents(__DIR__.'/log.txt', file_get_contents('php://input'));

// $update_id = $update['update_id'];


// if ($update_id = $update_id) {
// 	file_put_contents(__DIR__.'/last_log.txt', $update['message']['chat']['id']);
// } else {
// 	file_put_contents(__DIR__.'/old_log.txt', $update['message']['chat']['id']);
// }






// function sendRequest($method, $params = []) 

// {

// 	if (!empty($params)) {
// 		$url = BASE_URL.$method.'?'. http_build_query($params);
// 	} else {
// 		$url = BASE_URL.$method;
// 	}

// 	return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

// }

// $time = date('H:m:s');
// $chat_id = $update['message']['chat']['id'];

// sendRequest('getFile',['chat_id'=> $chat_id]);




// file_put_contents(__DIR__.'/log.txt', $update);




// $url    = 'php://input';

//     $data   = file_get_contents($url);

//     if ( ! empty($data)) {
//         $contents = json_decode(html_entity_decode($data), TRUE);

//         echo '<pre>';
//         print_r($contents['response']);
//         echo '</pre>';
//     }