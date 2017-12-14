<?php
$access_token = 'fU1OP4og1nbjBKb2vCt4itTIGEJK3x72QEn5+1jZugsR2bAmZpo+amvq7z77OJa7R5UvMygtwDlbZuZTIagBAp4SgorifcM4QBAgejZD2IMORH0IJz9hQ3ElIqQRVuX9Tez3mxIhdAJoDi1qCjqNygdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;