<?php
if ($_GET['tabl']) {
$tablica = $_GET['tabl'];
}
else echo "ошибка передачи";

try {
    $dbcon = new PDO("mysql:host=localhost;dbname=dbc;charset=utf8", "root", "");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e) {
      echo 'Ошибка: ' . $e->getMessage();
     }
     //запрос таблицы
       $tableList = array();
          $result = $dbcon->query("SHOW FULL COLUMNS FROM $tablica");
          while ($row = $result->fetch(PDO::FETCH_NUM)) {
            $i = 0;
            foreach ($row as  $value) {
              if ($i==0) {
              $nam = $value;
              echo "<a href='insert.php?tab=$tablica&pole=$value'>$value</a>"." ";
              $i=$i+1;
            } 
             else  {echo $value." ";
              $i=$i+1;}
            }
          //  var_dump($row) ;
            echo "<br>";
          }

 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Обработка форм</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet">
</head>
<body>
  <form action="" method="post">
  </form>
</body>
