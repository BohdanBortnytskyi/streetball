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
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item"><a href="calendar.php">Каледарь турниров</a></li>
              <li class="breadcrumb-item active" aria-current="page">Khimik Streetball Party vol. 11</li>
            </ol>
          </nav>
        </div>
         
        <!-- Карта места проведения --> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3006666540878!2d31.10050819375568!3d46.62179566082667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c61567fc0c7b2f%3A0x7c5ec756377ca95f!2z0KTQodCaICLQntC70LjQvNC_Ig!5e0!3m2!1sru!2sua!4v1591278847695!5m2!1sru!2sua" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <!-- Блок контента -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
              <div class="page-header mb-4">
                <div class="media">
                  <img alt="Image" src="assets/img/logo-color.png" height="100" class="avatar avatar-lg mt-1" />
                  <div class="media-body ml-3">
                    <h1 class="mb-0">Khimik Streetball Party vol. 11</h1>
                    <p class="lead">
                      <table class="table table-sm">
                        <thead align="center">
                          <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Город</th>
                            <th scope="col">Локация</th>
                            <th scope="col">Команд</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <tr>
                            <td>30.05.2020</td>
                            <td>Южный</td>
                            <td>Проспект Мира</td>
                            <td>23</td>
                          </tr>
                        </tbody>
                      </table>                      
                    </p>
                </div>
              </div>
              <div class="mt-2 mb-4">
                <button class="btn btn-primary btn-block" type="button" id="" aria-haspopup="true" aria-expanded="false">
                  Зарегистрировать команду на турнир!
                </button>
              </div>
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#info" role="tab" aria-controls="teams" aria-selected="true">Информация</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#teams" role="tab" aria-controls="events" aria-selected="false">Команды</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false">Результаты</a>
                </li>
              </ul>
              
              <div class="tab-content">
                <div class="tab-pane fade show active" id="info" role="tabpanel" data-filter-list="content-list-body">
                  <table class="table table-sm">
                      <tbody>
                        <tr>
                          <th width="30%">Время начала</th>
                          <td>9:00</td>
                        </tr>
                        <tr>
                          <th>Место проведения</th>
                          <td>Проспект Мира</td>
                        </tr>
                        <tr>
                          <th>Категории участников</th>
                          <td>
                            <ul>
                              <li>Мужчины</li>
                              <li>Юноши</li>
                              <li>Женщины</li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <th>Организационный взнос</th>
                          <td>Нет</td>
                        </tr>
                        <tr>
                          <th>Описание</th>
                          <td>Описание турнира</td>
                        </tr>
                        <tr>
                          <th>Положения</th>
                          <td>Документ с положениями турнира</td>
                        </tr>
                        <tr>
                          <th>Веб-сайт</th>
                          <td>streetball-yuzhny.org</td>
                        </tr>
                        <tr>
                          <th>Организатор</th>
                          <td>ОО "Стритбол Южный"</td>
                        </tr>
                      </tbody>
                    </table> 
                </div>
                
                <div class="tab-pane fade" id="teams" role="tabpanel" data-filter-list="content-list-body">
                  <div class="row content-list-head">
                    <div class="col-auto">
                      <h3>Команды</h3>
                    </div>
                  </div>
                  <!--end of content list head-->
                  <div class="content-list-body row">

                    <div class="col-12">
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Чебурашки <span class="badge badge-pill badge-success">3500</span></h6>
                            </a>
                            <span class="text-small">Мужчины</span>
                          </div>
                          <div class="card-meta">
                            <ul class="avatars">

                              <li>
                                <a href="#" data-toggle="tooltip" title="Kenny">
                                  <img alt="Kenny Tran" class="avatar" src="assets/img/avatar-male-6.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="David">
                                  <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="Marcus">
                                  <img alt="Marcus Simmons" class="avatar" src="assets/img/avatar-male-1.jpg" />
                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Чебурашки <span class="badge badge-pill badge-success">3500</span></h6>
                            </a>
                            <span class="text-small">Мужчины</span>
                          </div>
                          <div class="card-meta">
                            <ul class="avatars">

                              <li>
                                <a href="#" data-toggle="tooltip" title="Kenny">
                                  <img alt="Kenny Tran" class="avatar" src="assets/img/avatar-male-6.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="David">
                                  <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="Marcus">
                                  <img alt="Marcus Simmons" class="avatar" src="assets/img/avatar-male-1.jpg" />
                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Чебурашки <span class="badge badge-pill badge-success">3500</span></h6>
                            </a>
                            <span class="text-small">Мужчины</span>
                          </div>
                          <div class="card-meta">
                            <ul class="avatars">

                              <li>
                                <a href="#" data-toggle="tooltip" title="Kenny">
                                  <img alt="Kenny Tran" class="avatar" src="assets/img/avatar-male-6.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="David">
                                  <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg" />
                                </a>
                              </li>

                              <li>
                                <a href="#" data-toggle="tooltip" title="Marcus">
                                  <img alt="Marcus Simmons" class="avatar" src="assets/img/avatar-male-1.jpg" />
                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="results" role="tabpanel" data-filter-list="content-list-body">
                  <p>Организатор еще не добавил результаты турнира</p>
                  <p>
                    <a href="events-results.php" class="btn btn-primary">Отправить результаты</a>
                  </p>
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