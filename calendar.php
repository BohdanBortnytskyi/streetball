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
              <li class="breadcrumb-item active" aria-current="page">Каледарь турниров</li>
            </ol>
          </nav>
        </div>

        <!-- Блок контента -->
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-12">
                <div class="row content-list-head m-2">
                  <div class="col-auto">
                    <h1>Календарь турниров</h1>
                  </div>
                  <form class="col-md-auto">
                    <div class="input-group input-group-round">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">filter_list</i>
                        </span>
                      </div>
                      <input type="search" class="form-control filter-list-input" placeholder="Поиск по турнирам" aria-label="Поиск по турнирам">
                    </div>
                  </form>
                </div>
                <div class="card card-task">
                  <div class="card-body">
                    <div class="card-title">
                      <a href="events-single.php">
                        <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                      </a>
                      <span class="text-small">30.05.2020</span>
                      <span class="text-small">Южный</span>
                    </div>
                    <div class="card-meta">
                      <div class="d-flex align-items-center">
                        <i class="material-icons">sports_basketball</i>
                        <span>Команд: 12</span>
                      </div>
                      <button type="button" title="" class="btn btn-primary btn-sm ml-4">Регистрация</button>
                    </div>
                  </div>
                </div>
                <div class="card card-task">
                  <div class="card-body">
                    <div class="card-title">
                      <a href="events-single.php">
                        <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                      </a>
                      <span class="text-small">30.05.2020</span>
                      <span class="text-small">Южный</span>
                    </div>
                    <div class="card-meta">
                      <div class="d-flex align-items-center">
                        <i class="material-icons">sports_basketball</i>
                        <span>Команд: 12</span>
                      </div>
                      <button type="button" title="" class="btn btn-primary btn-sm ml-4" disabled>Регистрация</button>
                    </div>
                  </div>
                </div>
                <div class="card card-task">
                  <div class="card-body">
                    <div class="card-title">
                      <a href="events-single.php">
                        <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                      </a>
                      <span class="text-small">30.05.2020</span>
                      <span class="text-small">Южный</span>
                    </div>
                    <div class="card-meta">
                      <div class="d-flex align-items-center">
                        <i class="material-icons">sports_basketball</i>
                        <span>Команд: 12</span>
                      </div>
                      <button type="button" title="" class="btn btn-primary btn-sm ml-4" disabled>Регистрация</button>
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