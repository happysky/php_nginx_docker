<?php
$pdo = new PDO("mysql:host=db;dbname=db_test", 'root', '123');

$unbufferedResult = $pdo->query("SELECT * FROM user");
foreach ($unbufferedResult as $row) {
    var_dump($row);
}
print(phpinfo());
// 流式输出，关闭nginx buffer缓存
header('X-Accel-Buffering: no');
// cgi-buffering 设置为空
define('CGIBUFFERING', 0);
echo str_repeat('a', 3*1);
flush();
sleep(3);
echo "\nb";
?>