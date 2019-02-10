<?php

function coonSQL() {
global $dbcon;
try {
    $dbcon = new PDO("mysql:host=localhost;dbname=nata;charset=utf8", "nata", "ufaufa");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
 catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
}

 ?>
