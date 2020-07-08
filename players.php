<!doctype html>
<html lang="ru">

  <?php
    // Конфигурация БД
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // Head
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
  ?>

  <body>

    <div class="layout layout-nav-side">
      
      <?php
        // Главное боковое меню
        include $_SERVER['DOCUMENT_ROOT'] . '/parts/navbar.php';
      ?>

      <div class="main-container">

        <!-- Хлебные крошки и кнопка Настройки -->
        <div class="navbar bg-white breadcrumb-bar">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Игроки</li>
            </ol>
          </nav>
        </div>

        <!-- Блок контента -->
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-11 col-xl-10">
                <div class="page-header">
                <h1>Игроки УСЛ 3х3</h1>
              </div>
              <hr>
              <div class="tab-content">
                <div class="tab-pane active show" id="members" role="tabpanel" data-filter-list="content-list-body">
                  <div class="content-list">
                    <div class="row content-list-head">
                      <?php
                        // создаем запрос для получения всех players
                        $sql = "SELECT * FROM players";
                        // заносим в переменную результаты запроса
                        $result = $connect->query($sql);
                        //$row = mysqli_fetch_assoc($result);
                        $count = mysqli_num_rows($result);
                      ?>
                      <div class="col-auto">
                        <h3>Игроков на платформе: <?php echo $count; ?></h3>
                      </div>
                      <form class="col-md-auto">
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Введите имя игрока" aria-label="Filter Members">
                        </div>
                      </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body row">

                      <?php
                        // создаем запрос для получения всех players
                        $sql = "SELECT * FROM players WHERE verified=1 AND lastName!=''";
                        // заносим в переменную результаты запроса
                        $result = $connect->query($sql);
                        // запускаем цикл, присваиваем переменной row строку из переменной $result
                        // и пока row не равен NULL выводим данные о event
                        while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <div class="col-6">
                          <a class="media media-member" href="player-profile.php?id=<?php echo $row["id"]; ?>">
                            <img alt="<?php echo $row["firstName"] . " " . $row["lastName"]; ?>" src="assets/img/avatars/<?php echo $row["photo"]; ?>" class="avatar avatar-lg">
                            <div class="media-body">
                              <h6 class="mb-0 H6-filter-by-text" data-filter-by="text"><?php echo $row["firstName"] . " " . $row["lastName"]; ?></h6>
                              <span data-filter-by="text" class="text-body SPAN-filter-by-text"><?php echo $row["city"]; ?></span>
                            </div>
                          </a>
                        </div>
                        
                      <?php
                        }
                      ?>

                    </div>
                  </div>
                  <!--end of content list-->
                </div>
              </div>
              </div>
              </div>
            </div>
          </div>
      </div>
    </div>

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