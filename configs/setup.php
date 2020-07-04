<?php

	// Адрес сайта
	$siteURL = "http://streetball.local";

	$cookie_player_id = null; // id игрока в куки

	// если существует куки, то сохраняем id залогиненного игрока
	if(isset($_COOKIE["player_id"])) {
		$cookie_player_id = $_COOKIE["player_id"];
	}

?>