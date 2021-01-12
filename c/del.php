<?php
  include_once '../m/db.php';

  $id = $_GET[id];

  if( isset($_POST['delete']) ) { //вопрос безопасности удаления чз GET запро
	  $query_del =  "DELETE FROM `personal` WHERE `id` = '$id'";
    $result_del_personal = mysqli_query( $db, $query_del );
    if($result_del_personal){
    	echo "Запись удалена";
 	    echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
	  }
    else echo "Запись не удалена";
  };
  //fin else if $_POST['delete']

  $db->close();

