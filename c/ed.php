<?php
include_once '../m/db.php';

$id = (int)$_POST['id']; //сделать принудительно id integer

//если в $_POST['id'] будет не число, значит $id = 0
if(!$id) //проверка на int
{
 echo "Вы пытаетесь передать не int";
 echo "<p style=\"font-weight: 600;\"><a href = \"/task_8.php\" title=\"вернуться\">Вернуться</a></p>";
}
else {
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
    $banned   = htmlspecialchars($_POST['banned']);
    
    //обновление в базе данных
    $query_update = "UPDATE `personal` 
      			         SET `name` = '$name', `lastname` = '$lastname', `edu` = '$edu',`prof`='$prof',
      			             `twit`='$twit',`link`='$link',`banned`='$banned',`img` = '$img', `alt_img` = '$alt_img'
      			         WHERE `id`= '$id'";


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
  } // fin $_POST['safe']
} //проверять на то, что id - integer


$db->close();

