<?php
require_once __DIR__ . '/../autoload.php';

use Qiniu\Auth;

$accessKey = '...';
$secretKey = '...';
$auth = new Auth($accessKey, $secretKey);

# domain-spider
$url = "http://domain-spider.qiniuapi.com/v1/resolve?domain=s0.cdn.xiongmaoxingyan.com&type=weight";
$sign = $auth->signRequest($url, null);
echo "curl -X GET '" . $url . "' -H 'Authorization: QBox " . $sign . "'" . " -H 'Content-Type: " . "application/x-www-form-urlencoded'";