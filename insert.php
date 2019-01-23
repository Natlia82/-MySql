<?php 
//echo "insert";
if (isset($_GET['tab']) and isset($_GET['pole']) ) {
$tablica = $_GET['tab'];
$pole= $_GET['pole'];
}
else echo "ошибка передачи";

echo 'Что будем делать с полем? '.$pole.' из таблицы'.$tablica;
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
  <title>Изменить название</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet">
</head>
<body>
   <br>
  <form action="" method="post">
  <button type='submit' name='submit1'>Удалить</button>
  <button type='submit' name='submit2'>Переименовать</button>
  <button type='submit' name='submit3'>Пометять тип</button>
  <?php
  if (isset( $_POST['submit1'] )) {
	  $sql = "ALTER TABLE $tablica DROP COLUMN $pole;";
      $dbcon->exec($sql);
	  
  }	
  if (isset( $_POST['submit2'] )) {
	  $sql = "ALTER TABLE $tablica CHANGE $pole model VARCHAR(50);";
      $dbcon->exec($sql);
      
}	
if (isset( $_POST['submit3'] )) {
	  $sql = "ALTER TABLE $tablica MODIFY $pole FLOAT NOT NULL;";
      $dbcon->exec($sql);
      
}	
  ?>
  </form>
</body>
