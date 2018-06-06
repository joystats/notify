<?php
$token="80e4RPmiVsf1m3Zi8JaWzYyoOH1B2sODT4PUI4LoELA";
$url="https://notify-api.line.me/api/notify";
  
$message="ทดสอบผ่าน browser";

try{
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'Content-type: application/x-www-form-urlencoded',
		'Authorization: Bearer '.$token,
	]);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, "messages=". $postData);
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	$content=curl_exec($ch);
	curl_close($ch);

	print_r($content);

}catch(Exception $ex){
	echo $ex;
}