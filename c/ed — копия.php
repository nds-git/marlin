<?php
  include_once '../m/db.php';

  $id          = $_GET[id];
  $id_up_del   = $_POST[id];
  $id_del_href = $_GET[id].'del';

  //если нажать кнопка СОХРАНИТЬ - ИЗМЕНИТЬ, то записываем переменные и отправляем в базу
  if(isset($_POST['safe'])) {
	if(isset($_POST['name']) & isset( $_POST['lastname']) )  //Если есть данные
	{
    $img      = htmlspecialchars($_POST['img']);  
    $alt_img  = htmlspecialchars($_POST['alt_img']); 
    $name     = htmlspecialchars($_POST['name']); 
    $lastname = htmlspecialchars($_POST['lastname']);
    $edu      = htmlspecialchars($_POST['edu']);
    $prof     = htmlspecialchars($_POST['prof']);
    $twit     = htmlspecialchars($_POST['twit']);
    $link     = htmlspecialchars($_POST['link']);
    if ($_POST['banned'] != '1' || $_POST['banned'] != '0') 
         echo "Только 1 или 0 в cтатусе";; //один пробел ок, а если много пробелов - регулярка?? is_int и только либо 1 либо 0
    $banned   = htmlspecialchars($_POST['banned']);
    
    //обновление в базе данных
    $query_update = "UPDATE `personal` 
      			         SET `name` = '$name', `lastname` = '$lastname', `edu` = '$edu',`prof`='$prof',
      			             `twit`='$twit',`link`='$link',`banned`='$banned',`img` = '$img', `alt_img` = '$alt_img'
      			         WHERE `id`= '$id_up_del'";


    $result_up_personal = mysqli_query( $db, $query_update );
    if ( !$result_up_personal) {
     echo "Произошла ошибка: "  .  mysqli_error();
		 echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
    }
  	else {	
	 	 echo "Данные обновлены <br/>";
  	 // print_r($query_update);
		 echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
	  }


  // Если данные не переданы, //Выводим сообщение об ошибке
	}
	else 
  	echo "Данные не переданы!"; 
  } 
  // fin $_POST['safe']


  // удаление через кнопку delete или через ссылку 
  elseif( isset($_POST['delete']) OR isset($id_del_href) ) { //вопрос безопасности удаления чз GET запро
	  $query_del =  "DELETE FROM `personal` WHERE `id` = '$id_up_del' OR `id` = '$id_del_href'";
    $result_del_personal = mysqli_query( $db, $query_del );
    if($result_del_personal){
    	echo "Запись удалена";
 	    echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
	  }
    else echo "Запись не удалена";
  };
  //fin else if $_POST['delete']

  $db->close();

