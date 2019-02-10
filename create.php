<?php
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/
include 'connect.php';
coonSQL();

if (isset($_POST['text'])) {
    $name = $_POST['text'];
// проверяем есть ли такая таблица
$tableList = array();
$result = $dbcon->query("SHOW TABLES");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    $tableList[] = $row[0];
}
foreach ($tableList as $value) {
  if ($value == $name) { exit('такая таблица уже существует!!'); }
}

//  запрос на создание таблицы
     $sql = "CREATE TABLE `".$name."` ( `ID` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(40) NOT NULL, `otherField` VARCHAR(40) NOT NULL, PRIMARY KEY (`ID`)) ";
     $dbcon->exec($sql);
  //   echo "Таблица tableName готова к использованию.";
  //   header('Location: table.php');
  echo '<meta http-equiv="refresh" content="0;URL=table.php">';
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
  <span>Введите имя таблицы для добавления:</span>
  <br>
  <br>
  <form method="post">
    <input type="text" name="text" required>
    <input type="submit" name="button" value="Применить">
  </form>
<br>
<a href="table.php">Вернуться к списку таблиц</a>
</body>
</html>
