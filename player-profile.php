<!doctype html>
<html lang="ru">

  <?php
    // Конфигурация БД
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // подключаем файл настроек сайта
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/setup.php';

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
              <li class="breadcrumb-item active" aria-current="page">Профиль игрока</li>
            </ol>
          </nav>

          <div class="dropdown">
            <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
              <i class="material-icons">settings</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">

              <a class="dropdown-item" href="profile-settings.php">Редактировать</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="logout.php">Выход</a>

            </div>
          </div>

        </div>

        <!-- Блок контента -->
          <?php
          // Выводим игрока согласно куки
          $sql = "SELECT * FROM players WHERE id=" . $_GET["id"];
          $result = $connect->query($sql);
          $player = mysqli_fetch_assoc($result); 
          // если не заполнены обязательные поля
          if($player['firstName'] == "" && $player['lastName'] == "" && $player['city'] == "" && $player['gender'] == "" && 
             $player['age'] == "0" && $player['height'] == "0" && $player['weight'] == "0") {
              // то выводим следующее сообщение и переход к ссылке на редактирования профиля
              echo "<div class='alert alert-primary' role='alert'>Вам нужно заполнить данные своего профиля, чтобы стать полноценным пользователем Платформы. <a href='$siteURL/profile-settings.php'>Перейти к заполнению</a></div>";
             
            // иначе выводим данные профиля игрока
          } else {
          ?>
         
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
              <div class="page-header mb-4">
                <div class="media">
                  <img alt="Image" src="assets/img/avatars/<?php echo $player['photo']; ?>" class="avatar avatar-lg mt-1" />
                  <div class="media-body ml-3">
                    <h1 class="mb-0"><?php echo $player['firstName']; ?>&nbsp;<?php echo $player['lastName']; ?>&nbsp;<span class="badge badge-pill badge-success" title="Рейтинг игрока"><?php echo $player['rankPoints']; ?></span></h1>
                    <p class="lead">
                      <a href="<?php echo $player['facebook']; ?>" target="_blank"><img height="24" src="assets/img/facebook.svg" ></a>
                      <a href="<?php echo $player['instagram']; ?>" target="_blank"><img height="24" src="assets/img/instagram.svg" ></a>
                      <a href="https://t.me/<?php echo $player['telegram']; ?>" target="_blank"><img height="24" src="assets/img/telegram.svg" ></a>
                    </p>
                    <p class="lead">
                      <table class="table table-sm">
                        <thead align="center">
                          <tr>
                            <th scope="col">Город</th>
                            <th scope="col">Возраст</th>
                            <th scope="col">Рост</th>
                            <th scope="col">Вес</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <tr>
                            <td><?php echo $player['city']; ?></td>
                            <td><?php echo $player['age']; ?></td>
                            <td><?php echo $player['height']; ?></td>
                            <td><?php echo $player['weight']; ?></td>
                          </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                      </table>                      
                    </p>
                   
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#teams" role="tab" aria-controls="teams" aria-selected="true">Команды</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">Турниры</a>
                </li>
              </ul>
              
              <div class="tab-content">
                <div class="tab-pane fade show active" id="teams" role="tabpanel" data-filter-list="content-list-body">
                  <div class="row content-list-head">
                    
                  </div>
                  <!--end of content list head-->
                  <div class="content-list-body row">

                  </div>
                  <!--end of content-list-body-->
                </div>
                
                <div class="tab-pane fade" id="events" role="tabpanel" data-filter-list="content-list-body">
                  <div class="row content-list-head">
                    
                  </div>
                  <!--end of content list head-->
                  <div class="content-list-body row">

                  </div>
                  <!--end of content list-->
                </div>
                <!--end of tab-->
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