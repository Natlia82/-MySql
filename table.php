<?php
try {
    $dbcon = new PDO("mysql:host=localhost;dbname=dbc;charset=utf8", "root", "");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }

 catch(PDOException $e) {
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
<?php  //запрос таблицы
  $tableList = array();
     $result = $dbcon->query("SHOW TABLES");
     while ($row = $result->fetch(PDO::FETCH_NUM)) {
         $tableList[] = $row[0];
     }
foreach ($tableList as $value) {
  ?>
  <a href="tab2.php?tabl=<?php echo $value; ?>"><?php echo $value; ?></a>
  <br>
  <?php
}

?>
</body>
</html>
