<?php

// Конфигурация БД
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

// подключаем файл настроек сайта
include $_SERVER['DOCUMENT_ROOT'] . '/configs/setup.php';

// если вход не выполнен, то переадресация на страницу входа
if($cookie_player_id == null) {
  header("Location: /login.php");
}

файл не нужен

// если
// if(isset($_GET["playerid"])) {
// 	$sql = "INSERT INTO contacts (user_1, user_2) VALUES ('" . $cookie_user_id . "', '" . $_GET["userid"] . "')";
// 	if (mysqli_query($connect, $sql)) {
// 		include "modules/user-contacts.php"; // выводим список контактов
// 	} else {
// 		echo "<h2>Error adding contact</h2";
// 	}
// }

?>