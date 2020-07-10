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
              <li class="breadcrumb-item active" aria-current="page">Саппорт</li>
            </ol>
          </nav>
        </div>

        <!-- Блок контента -->
        <div class="container">
          <div class="row justify-content-center">
                <div class="col-12">
                  <section class="py-4 py-lg-5">
                    <div class="mb-3 d-flex">
                      <img alt="УСЛ 3x3" src="assets/img/logo-go.png" class="avatar avatar-lg mr-1">
                      <div>
                        <span class="badge badge-success">alpha</span>
                      </div>
                    </div>
                    <h1 class="display-4 mb-3">Поддержка</h1>
                    <p class="lead">
                      Друзья, платформа регистрации и рейтинга GO.Streetball начала работу в режиме альфа-тестирования.<br>
                      Мы просим вас помочь усовершенствовать её работу и сообщать нам о любых багах и ошибках, с которыми вы столкнётесь при регистрации на турниры УСЛ 3х3.
                    </p>
                    <p class="lead">  
                      По вопросам использования платформы:<br>
                      <a href="mailto:usl3x3.bobo@gmail.com">usl3x3.bobo@gmail.com</a><br>
                      <a href="https://t.me/bohdan_bortnytskyi">t.me/bohdan_bortnytskyi</a>
                    </p>
                  </section>
                  
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