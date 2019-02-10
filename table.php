<?php
include 'connect.php';
coonSQL();
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
<br>
<br>
<a href="create.php">Добавить таблицу</a>

</body>
</html>
