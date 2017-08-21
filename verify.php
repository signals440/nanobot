<?php
$access_token = '3r+TpEGWyz87V9d6rF7uovCZMNWA5YaPg88pQHIZ6zX453mog0Ia2237eCl/dmWI93DmQN9Pztzfdoj/W4x42KRgfYI9g+L0u6AHnSm8Ks3HyTvQhlNTg22RZ/TaktgOeSl1oaKs4v5WJX4tHuq0rwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
