<!doctype html>
<html lang="ru">

  <?php
    // Конфигурация БД
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // подключаем файл настроек сайта
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/setup.php';

    // если вход не выполнен, то переадресация на страницу входа
    if($cookie_player_id == null) {
      header("Location: /login.php");
    }

    // Head
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';

    // Отправка формы регистрации команды
    //if(isset($_GET["event_id"])) {
      if(isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {

        if($_POST["player1"] != "" and $_POST["player2"] != "" and $_POST["player3"] !="") {
          $sql = "INSERT INTO teams (name, event_id, player1, player2, player3, player4) VALUES ('" . $_POST["team-name"] . "', '" . $_POST["event_id"] . "', '" . $_POST["player1"] . "', '" . $_POST["player2"] . "', '" . $_POST["player3"] . "', '" . $_POST["player4"] . "')";

          if($connect->query($sql)) {

            // выбираем ивент по айди
            $sql = "SELECT * FROM calendar WHERE id =" . $_POST["event_id"];
            $result = $connect->query($sql);
            $event = mysqli_fetch_assoc($result);

            // выбираем игроков по айди и отправляем им имейлы
            $sql = "SELECT * FROM players WHERE id =" . $_POST["player1"];
            $result = $connect->query($sql);
            $player = mysqli_fetch_assoc($result); 

            mail($player["email"], 'Регистрация на турнир УСЛ 3х3', 'Вы зарегистрированы на турнир ' . $event["name"] . ' в составе команды ' . $_POST["team-name"], "From: usl3x3@gmail.com");
            
            // переадресация на страницу успешной регистрации
            header("Location: /events-register-success.php?event_id=" . $_POST["event_id"]);
            // echo "<div class='alert alert-primary' role='alert'>Команда зарегистрирована</div>";
          } else {
            echo "<div class='alert alert-danger' role='alert'>Ошибка базы данных</div>";
          }
        } else {
          header("Location: /events-register-fail.php?event_id=" . $_POST["event_id"]);
        }

      }
   // } else { // если айди ивента не задан
     // header("Location: /calendar.php");
    //}

  ?>

  <body>

    <div class="layout layout-nav-side">
      
      <?php
        // Главное боковое меню
        include $_SERVER['DOCUMENT_ROOT'] . '/parts/navbar.php';
      ?>

      <div class="main-container">

         <?php
          // Выводим турнир согласно гет запросу
          $sql = "SELECT * FROM calendar WHERE id =" . $_GET["event_id"];
          $result = $connect->query($sql);
          $event = mysqli_fetch_assoc($result); 
         ?>

        <!-- Хлебные крошки и кнопка Настройки -->
        <div class="navbar bg-white breadcrumb-bar">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item"><a href="calendar.php">Календарь турниров</a></li>
              <li class="breadcrumb-item"><a href="events-single.php?id=<?php echo $_GET["event_id"]; ?>"><?php echo $event['name']; ?></a></li>
              <li class="breadcrumb-item active" aria-current="page">Регистрация команды</li>
            </ol>
          </nav>
        </div>
         
        <!-- Блок контента -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 m-2">
              <h1>Регистрация команды</h1>
              <form action="events-register-team.php" method="POST">
                <div class="form-group row align-items-center">
                  <label class="col-3">Название</label>
                  <div class="col">
                    <input type="text" placeholder="Название команды" class="form-control" name="team-name" required />
                  </div>
                </div>
                <input type="hidden" id="event_id" name="event_id" value="<?php echo $_GET["event_id"]; ?>" />
                <!-- <div class="form-group row align-items-center">
                  <label class="col-2">Категория</label>
                  <div class="col-3">
                    <select class="form-control" required>
                      <option value='m'>Мужчины</option>
                      <option value='u'>Юноши</option>
                      <option value='w'>Женщины</option>
                    </select>
                  </div>
                </div> -->
                <div class="form-group row align-items-center">
                  <label class="col-3">Игрок 1*</label>
                  <div class="col">
                    <span id="player1">Добавить игрока</span>
                    <button style="display: inline-block;" class="btn btn-round player-add player1-add" type="button" data-toggle="collapse" data-target="#floating-chat" aria-expanded="false">
                      <i class="material-icons">add</i>
                    </button>
                    <input type="hidden" id="input-player1" name="player1" value="" required />
                  </div>
                </div>
                <div class="form-group row align-items-center">
                  <label class="col-3">Игрок 2*</label>
                  <div class="col">
                    <span id="player2">Добавить игрока</span>
                    <button style="display: inline-block;" class="btn btn-round player-add player2-add" type="button" data-toggle="collapse" data-target="#floating-chat" aria-expanded="false">
                      <i class="material-icons">add</i>
                    </button>
                    <input type="hidden" id="input-player2" name="player2" value="" required />
                  </div>
                </div>
                <div class="form-group row align-items-center">
                  <label class="col-3">Игрок 3*</label>
                  <div class="col">
                    <span id="player3">Добавить игрока</span>
                    <button style="display: inline-block;" class="btn btn-round player-add player3-add" type="button" data-toggle="collapse" data-target="#floating-chat" aria-expanded="false">
                      <i class="material-icons">add</i>
                    </button>
                    <input type="hidden" id="input-player3" name="player3" value="" required />
                  </div>
                </div>
                <div class="form-group row align-items-center">
                  <label class="col-3">Игрок 4</label>
                  <div class="col">
                    <span id="player4">Добавить игрока</span>
                    <button style="display: inline-block;" class="btn btn-round player-add player4-add" type="button" data-toggle="collapse" data-target="#floating-chat" aria-expanded="false">
                      <i class="material-icons">add</i>
                    </button>
                    <input type="hidden" id="input-player4" name="player4" value="" />
                  </div>
                </div>
                <div class="row justify-content-end m-2">
                  <i class="m-2">Ответственность за свою жизнь и здоровье, а также личные вещи, на турнирах УСЛ 3х3 каждый игрок команды берет на себя.</i>
                  <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="collapse sidebar-floating" id="floating-chat">
          <div class="sidebar-content">
            <div class="chat-module" data-filter-list="chat-module-body">
              <div class="row justify-content-between">
                  <h2>Поиск игроков</h2>
                  <button id="search-close" type="button" class="close btn btn-round" onclick="searchClose()" aria-label="Закрыть" title="Закрыть">
                    <i class="material-icons">close</i>
                  </button>
                </div>
              <div class="chat-module-top">
                <form>
                  <div class="input-group input-group-round">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">search</i>
                      </span>
                    </div>
                    <input type="search" class="form-control filter-list-input" placeholder="Введите имя игрока" aria-label="Поиск игроков">
                  </div>
                </form>
                <div class="chat-module-body">

                  <?php
                    $i = 0;
                    // выводим список юзеров
                    $sql = "SELECT * FROM players WHERE verified=1 AND lastName!=''"; // запрос к БД
                    $result = mysqli_query($connect, $sql); // выполнение запроса к БД
                    $players_number = mysqli_num_rows($result); // количество записей в таблице users
                    // выводим всех юзеров
                    while($i < $players_number) { 
                      $players_mass[$i] = mysqli_fetch_assoc($result); // создание массива с пользователями
                      // вывод списка игроков
                  ?>
                      <div class="media chat-item" data-playerid="<?php echo $players_mass[$i]['id']; ?>" data-playername="<?php echo $players_mass[$i]['firstName'] . ' ' . $players_mass[$i]['lastName']; ?>" data-playerphoto="<?php echo $players_mass[$i]['photo']; ?>" onclick="addPlayer(this)" style="cursor:pointer;">
                        <span class="d-flex align-items-center">
                          <img alt="<?php echo $players_mass[$i]['firstName'] . ' ' . $players_mass[$i]['lastName']; ?>" src="<?php echo $siteURL . '/assets/img/avatars/' . $players_mass[$i]['photo']; ?>" class="avatar mr-2">
                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text"><?php echo $players_mass[$i]['firstName'] . ' ' . $players_mass[$i]['lastName']; ?></span>
                        </span>
                      </div>
                  <?php
                      $i = $i + 1; 
                    }
                  ?>

                </div>
              </div>
              
            </div>
          </div>
        </div>

    </div>

    <!-- Custom scripts -->
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="assets/js/autosize.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="assets/js/draggable.bundle.legacy.js"></script>
    <script type="text/javascript" src="assets/js/swap-animation.js"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="assets/js/dropzone.min.js"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="assets/js/list.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

  </body>

</html>