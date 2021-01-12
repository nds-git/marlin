<?php
  $db = new mysqli("localhost", "root", "root", "t_marlin");

  if (mysqli_connect_errno()) {
    die('Ошибка подключения: ' . mysqli_connect_error()); 
  }

  $db->query("SET NAMES 'utf8'");
  
  // echo "Подключение к database. <br>";

