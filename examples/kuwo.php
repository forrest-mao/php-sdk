<?php
# kuwo 特殊防盗链代码
    $key = '...'; # 密钥
    $path = '/resource/n1/128/17/99/1566821832.mp3'; # 下载文件
    $prefix = 'http://ra07.sycdn.kuwo.cn';

    # 下载到期时间,time是当前时间,3600表示3600秒,也就是说从现在到3600秒之内文件不过期
    $expire = dechex(time());
    # 用文件路径、密钥、过期时间生成加密串
    $hash = md5($key . $path . $expire);
    # 加密后的下载地址
    $url = "$prefix/$hash/$expire$path";
    echo "$url\n";
?>