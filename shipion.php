<?php



$API_KEY = '5051760046:AAHiZU0ifWBYFvYsF1_XlkbwVlAL66acydY'; 


define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$pin = "Ozo2007";
$ega = "1682992940";

$update = json_decode(file_get_contents('php://input'));
$message_id = $update->message->message_id;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;


if ($text == '/start' and $chat_id == $ega) {

	bot('sendMessage',[
		'text'=>"Assalomu aleykum!",
		'chat_id'=>$chat_id
	]);
	# code....
}elseif (mb_stripos($text, '/for_') !== false and $chat_id == $ega) {

    bot('deleteMessage',[
    	'message_id'=>$message_id,
    	'chat_id'=>$chat_id
    ]);
	$piin = explode(" ", $text)['3'];
	$from = explode("_", $text)[1];
	$id = explode("_", $text)[2];

	if ($piin == $pin) {

        bot('forwardMessage',[
        	'message_id'=>$id,
        	'chat_id'=>$chat_id,
        	'from_chat_id'=>$from
        ]);
        bot('sendMessage',[
        	'text'=>"Tepadagini o'chirish!",
        	'chat_id'=>$ega,
        	'reply_markup'=>json_encode([
        		'inline_keyboard'=>[
        			[['text'=>"!!O'chirish!!",'callback_data'=>"del"]]
        		]
        	])
        ]);
		# code...
	}



	# code...
}elseif ($text !== '/start' and $chat_id != $ega) {


    $ttt = "/for_".$chat_id."_".$message_id;
	bot('sendMessage',[
		'text'=>$ttt,
		'chat_id'=>$ega
	]);

	bot('deleteMessage',[
		'message_id'=>$message_id,
		'chat_id'=>$chat_id
	]);
	bot('deleteMessage',[
		'message_id'=>$message_id-1,
		'chat_id'=>$chat_id
	]);	
	# code...
}elseif ($data == 'del' and $chat_id2 == $ega) {

	bot('deleteMessage',[
		'message_id'=>$message_id2,
		'chat_id'=>$chat_id2
	]);
	bot('deleteMessage',[
		'message_id'=>$message_id2-1,
		'chat_id'=>$chat_id2
	]);	
	# code...
}







?>
