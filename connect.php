<?php
$dsn = 'mysql:dbname=php;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';

try {

  $pdo = new PDO($dsn,$user,$password);
  echo 'データベースの接続に成功しました。';
} catch (PDOException $e) {
  var_dump ($e);
  exit('データベースの接続に失敗しました。'.$e->getMessage());
}

?>
