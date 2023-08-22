<?php
// print(phpinfo());
// 流式输出，关闭nginx buffer缓存
header('X-Accel-Buffering: no');
// cgi-buffering 设置为空
define('CGIBUFFERING', 0);
echo str_repeat('a', 3*1);
flush();
sleep(3);
echo "\nb";
?>