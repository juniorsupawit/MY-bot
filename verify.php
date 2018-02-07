<?php
$access_token = '3ToSLZC7iR0UhrxRERv+MQis4HbZ/aXw7IZZkv6PBPZZf26xs4E6HxOw0/zdQ2X2/f/JBWT+Nm5HNm/p3cme133pVb54U4HjwMnnby71KEz3NxpYuxKBgjnAMgzAt9yezuk91Chlhb2GDutPs3mBDgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>