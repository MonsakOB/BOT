<?php
$access_token = 'ZpH0ADGozQjamp48+PqkPEbl5AX6MaCsm4vwe1F8ut4qQEo0rAcomiCqIMpIvcRpMRYroHjqfoXdaki9gQ2Vf4ddeEWTlNtywhdeYgTmzHS3qwjgHKnZ+BB6bM4S47ME42qM09DW1V9BNz7X7yXQqwdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
