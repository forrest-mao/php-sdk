<?php

$KID = "...";
$password = "...";

$http_verb = "GET";
$content_md5 = "";
$content_type = "";
$date = 1514735999;
$CanonicalizedAmzHeaders = "";
$CanonicalizedResource = "/dslb.cdn.krcom.cn/stream/dTPl0uxkCTCBOpO5fG7jkA__.mp4";

$sign_to_string = "$http_verb\n$content_md5\n$content_type\n$date\n$CanonicalizedAmzHeaders$CanonicalizedResource";

echo $sign_to_string . "\n";
$ssig = substr(base64_encode(hash_hmac('sha1', $sign_to_string, $password, true)),5,10);
echo $ssig . "\n";
echo "http:/" . $CanonicalizedResource . "?ssig=" . $ssig . "&Expires=" . $date . "&KID=mpkey";