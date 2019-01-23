<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//  $pdo = new PDO("mysql:host=localhost;dbname=dbc;charset=utf8", "root", "");
try {
    $dbcon = new PDO("mysql:host=localhost;dbname=dbc;charset=utf8", "root", "");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //запрос на создание таблицы
       $sql = "CREATE TABLE `tableName` ( `ID` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(40) NOT NULL, `otherField` VARCHAR(40) NOT NULL, PRIMARY KEY (`ID`)) ";
       $dbcon->exec($sql);
       echo "Таблица tableName готова к использованию.";


} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Управление таблицами и базами данных</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet">
</head>
<body>

</body>
</html>
