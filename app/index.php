<?php
// print(phpinfo());
// 告知nginx不需要缓存当前请求
header('X-Accel-Buffering: no');
// cgi-buffering 设置为空
#define('CGIBUFFERING', 0);
echo str_repeat('a', 3*1);
flush();
sleep(3);
echo "\nb";
?>