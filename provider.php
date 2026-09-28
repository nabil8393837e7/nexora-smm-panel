<?php
require_once __DIR__."/../config/config.php";
function provider_request(array $payload):array{
 if(!PROVIDER_API_URL||!PROVIDER_API_KEY)throw new RuntimeException("Provider API not configured.");
 $payload["key"]=PROVIDER_API_KEY;
 $ch=curl_init(PROVIDER_API_URL);
 curl_setopt_array($ch,[CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>http_build_query($payload),CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>30]);
 $raw=curl_exec($ch);if($raw===false)throw new RuntimeException(curl_error($ch));curl_close($ch);
 $data=json_decode($raw,true);if(!is_array($data))throw new RuntimeException("Invalid provider response.");return $data;
}
?>