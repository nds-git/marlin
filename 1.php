 <?php

 
//массивы
$month = [Jun,Feb,Mar,April,May];

$person = [
	"name" 			=> "John",
	"lastname" 		=> "Smith",
	"date_birthday" => "10 aug 20",
	"month" 		=> ["May","April","June"]
];

echo $person[lastname]."<br/>";
echo $person[month][8]."<br/>";

$contries = [
	"New Zeland",
	"Australia",
	"Malaysia",
	"Vietnam",
	"China",
	"Singapore",
	pets 		=> [dog,cat,fish],
	friends 	=> [Алексадр,Денис,Дмитрий,Андрей]
 ];

//foreach

foreach ($month as $mon) {
	echo $mon." | ";
};
echo "<br/> - - - -- - - <br/>";

foreach ($contries[pets] as $pet) {
	echo $pet."<br/>";	
};
echo "<br/> - - - -- - - <br/>";

foreach ($month as $mon) {
	if ($mon != Feb) {
		echo $mon."<br/>";
			}
	}
	
	
function cook($ingrideens, $meal)
 {
 	//echo "Беру $ingrideens <br/>";
 	//echo "Готовлю.. <br/>";
 	return "Блюдо $meal готово!";
 };

$meal = cook("мясо,томаты,колбасяка", "Супчик");
echo $meal."<br/>";



	var_dump($_GET);

	if(isset($_GET['name']))
		echo $_GET['name']."<br/>";
	else 
		echo "нет такой";




	<form action="about.php"  method = "POST">
		<input type = "text"  name = "myName" placeholder="введите ваше имя" /> <br/><br/>
		Каким броузером пользуетесь?<br/>
		<input type="radio" name="browser" value="ie" />IE<br/>
		<input type="radio" name="browser" value="ffox" />Firefox<br/>
		<input type="radio" name="browser" value="chrome" />Chrome
		<br/>
		<input type="number" name="t_short_size" value="34" min="34" max="50" step="1"/><br/>
		<input type="tel" name="tel" pattern="+7-[0-9]{3}-[0-9]{3}" placeholder="телефон в формате +7-xxx-xxx" />
		<br/>
		<button>Жми меня!</button>
	</form>

	<?php
	error_reporting(E_ALL);
	
	var_dump($_POST);

	$name = $_POST['myName'];
	$browser = $_POST['browser'];
	$tel = $_POST['tel'];
	$t_size = $_POST['t_short_size'];

	$myArr = [$name,$browser,$tel,$t_size];

	var_dump($myArr);

	echo 'Вас зовут: '.$myArr[0].'<br/>';
	echo 'Вы пользуетесь: '.$myArr[1].'<br/>';
	echo 'Ваш тел.номер: '.$myArr[2].'<br/>';
	echo 'Размер Вашей футболки: '.$myArr[3].'<br/>';

<?php 
	session_start();

	$sess = $_SESSION['name'] = 'Васисуалий';

	echo $sess;

	?>

	<p><a href = "about.php">about.php</a></p>
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

	