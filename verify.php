<?php
$access_token = '5+/arDjJ9AyQRUJejcPa9ov3jSRrCLB94N9a7wXWCvHgq/LgrkCKva0D0c8nrD8KdV5/i8sqhiVPZw+25kGkvHl6aEZjP0CAnUoPZBJ7zATKkgSMDwU8lwIvfTbGwgiz85NpWO0D8bFw1U87e/1E4AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
