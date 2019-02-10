<?php
//echo "insert";
if (isset($_GET['tab']) and isset($_GET['pole']) ) {
$tablica = $_GET['tab'];
$pole= $_GET['pole'];
}
else echo "ошибка передачи";

include 'connect.php';
coonSQL();

if (isset( $_POST['submit1'] )) {
  $sql = "ALTER TABLE $tablica DROP COLUMN $pole";
    $dbcon->exec($sql);
//  header('Location: tabl2.php');
echo '<meta http-equiv="refresh" content="0;URL=table.php">';
}
if (isset( $_POST['submit2'] )) {
  $newname = $_POST['text'];
  $sql = "ALTER TABLE $tablica CHANGE $pole $newname VARCHAR(50);";
    $dbcon->exec($sql);
//header('Location: tabl2.php');
echo '<meta http-equiv="refresh" content="0;URL=table.php">';
}
if (isset( $_POST['submit3'] )) {
  $tip = $_POST['text2'];
  $sql = "ALTER TABLE $tablica MODIFY $pole $tip NOT NULL;";
    $dbcon->exec($sql);
//header('Location: tabl2.php');
echo '<meta http-equiv="refresh" content="0;URL=table.php">';

}
echo 'Что будем делать с полем? '.$pole.' из таблицы'.$tablica;
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
  <br>
  <input type="text" name="text">
  <button type='submit' name='submit2'>Переименовать</button>
  <br>
  <input type="text" name="text2">
  <button type='submit' name='submit3'>Пометять тип</button>

  <br>
  <a href="tab2.php?tabl=<?php echo $tablica; ?>">вернуться к списку полей</a>
  </form>
</body>
