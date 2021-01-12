<?php
	session_start();
	// cookies 
/*
	Cервер - это банк
	А клиент - это мы все клиенты

	Мы первый раз приходим в банк и нам дают бэйджик и мы вынуждены носить 
	его, всегда чтобы его идентифицировать
	Куки - это простая строка (бэйджик) и каждый раз когда мы делаем запрос
	на сервер мы автоматически отправляем ему запрос на куку
	Причем кука хранится в броузере
	И чтобы её защить у нас есть сессия - session_start()
	Сессия хранится на сервере!!!
	Получается банк берет листок бумажки и пишет секретные данные
	и присваивает НЕКИЙ идентификатор и выдает его нам
	таким образом секретная инфа (сессия) хранится в банке, а мы придя в банк
	просто показываем свой бэйджик с идентификатором клиент №15	
*/ 
	$sess = $_SESSION['name'];
	echo $sess;

	?>

	<p><a href = "">index.php</a></p>