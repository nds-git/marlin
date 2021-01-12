<?php
  include_once '../m/db.php';
  
 if(isset($_POST['add'])) {
	 if( isset($_POST['name']) AND isset( $_POST['lastname']) )  //Если есть данные
	 {
    $img      = htmlspecialchars($_POST['img']);  
    $alt_img  = htmlspecialchars($_POST['alt_img']); 
    $name     = htmlspecialchars($_POST['name']); 
    $lastname = htmlspecialchars($_POST['lastname']);
    $edu      = htmlspecialchars($_POST['edu']);
    $prof     = htmlspecialchars($_POST['prof']);
    $twit     = htmlspecialchars($_POST['twit']);
    $link     = htmlspecialchars($_POST['link']);
    $banned   = htmlspecialchars($_POST['banned']);
 
    // проверки на сопадение пользователей
    $query_search  = "SELECT `twit`, `link` FROM `personal` WHERE `twit`= '$twit' || `link` = '$link'";
    $result_search_personal = mysqli_query( $db, $query_search );
    if ( !$result_search_personal ) echo "Произошла ошибка: "  .  mysqli_error();
    $res = mysqli_fetch_assoc($result_search_personal);
    // var_dump($res);
    
    if ($res) 
    {
      // var_dump($res);
      echo " уже есть twit c записью: ".$twit. " или link c записью: ".$link; 
      echo "<p style=\"font-weight: 600;\"><a href = \"/addition.php\" title=\"вернуться\">Вернуться</a></p>";
    }
    // иначе мы вставляем запись
    else 
    {
     $query_add = "INSERT INTO `personal` 
                  (`img`, `alt_img`, `name`, `lastname`, `edu`, `prof`, `twit`, `link`, `banned`)
                  VALUES 
                  ( '$img', '$alt_img', '$name', '$lastname', '$edu', '$prof', '$twit', '$link', '$banned');";
     // var_dump($query_add);

     $result_add_personal = mysqli_query( $db, $query_add );
     // var_dump($result_add_personal);

     if(!$result_add_personal) {
      echo "Произошла ошибка: " . "<br>" .  mysqli_error();
		  echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
     }
	   else {	
 	    echo "Данные добавлены <br/>";
	    echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
	   }
   } //fin иначе мы вставляем запись
	}
	else // Если данные не переданы
  	  echo "Данные не переданы!"; //Выводим сообщение об ошибке
}; // fin $_POST['add']

$db->close();