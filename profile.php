<!doctype html>
<html lang="en">

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
              <li class="breadcrumb-item active" aria-current="page">Профиль</li>
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
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
              <div class="page-header mb-4">
                <div class="media">
                  <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar avatar-lg mt-1" />
                  <div class="media-body ml-3">
                    <h1 class="mb-0">Bobby Jackson <span class="badge badge-pill badge-success">3500</span></h1>
                    <p class="lead">
                      <a href="#"><img height="24" src="assets/img/facebook.png"></a>
                      <a href="#"><img height="24" src="assets/img/instagram.png"></a>
                      <a href="#"><img height="24" src="assets/img/telegram.png"></a>
                    </p>
                    <p class="lead">
                      <table class="table table-sm">
                        <thead align="center">
                          <tr>
                            <th scope="col">Город</th>
                            <th scope="col">Пол</th>
                            <th scope="col">Возраст</th>
                            <th scope="col">Рост</th>
                            <th scope="col">Вес</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <tr>
                            <td>Одесса</td>
                            <td>Мужчина</td>
                            <td>25</td>
                            <td>190</td>
                            <td>95</td>
                          </tr>
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
                    <div class="col-auto">
                     <h3>Команды</h3>
                  <button class="btn btn-round" data-toggle="modal" data-target="#team-add-modal">
                    <i class="material-icons" title="Создать команду">add</i>
                  </button>
                    </div>
                    
                  </div>
                  <!--end of content list head-->
                  <div class="content-list-body row">

                    <div class="col-md-6">
                      <div class="card card-team">
                        <div class="card-body">
                          <div class="dropdown card-options">
                            <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Управление командой</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Покинуть команду</a>
                            </div>
                          </div>
                          <div class="card-title">
                            <a href="#">
                              <h5 data-filter-by="text">Чебурашки</h5>
                            </a>
                            Рейтинг команды: <span class="badge badge-pill badge-success">2500</span>
                          </div>
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

                    <div class="col-md-6">
                      <div class="card card-team">
                        <div class="card-body">
                          <div class="dropdown card-options">
                            <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Управление командой</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="#">Покинуть команду</a>
                            </div>
                          </div>
                          <div class="card-title">
                            <a href="#">
                              <h5 data-filter-by="text">Ромашки</h5>
                            </a>
                            Рейтинг команды: <span class="badge badge-pill badge-success">4000</span>
                          </div>
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
                  <!--end of content-list-body-->
                </div>
                
                <div class="tab-pane fade" id="events" role="tabpanel" data-filter-list="content-list-body">
                  <div class="row content-list-head">
                    <div class="col-auto">
                      <h3>Турниры</h3>
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
                  <!--end of content list head-->
                  <div class="content-list-body row">

                    <div class="col-12">
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                            </a>
                            <span class="text-small">30.05.2020</span>
                            <span class="text-small">Южный</span>
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
                            <div class="d-flex align-items-center">
                              <i class="material-icons">sports_basketball</i>
                              <span>1200</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                            </a>
                            <span class="text-small">30.05.2020</span>
                            <span class="text-small">Южный</span>
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
                            <div class="d-flex align-items-center">
                              <i class="material-icons">sports_basketball</i>
                              <span>1200</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-task">
                        <div class="card-body">
                          <div class="card-title">
                            <a href="#">
                              <h6 data-filter-by="text">Khimik Streetball Party 10</h6>
                            </a>
                            <span class="text-small">30.05.2020</span>
                            <span class="text-small">Южный</span>
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
                            <div class="d-flex align-items-center">
                              <i class="material-icons">sports_basketball</i>
                              <span>1200</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--end of content list-->
                </div>
                <!--end of tab-->
              </div>
              <form class="modal fade" id="team-add-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Новая команда</h5>
                      <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <!--end of modal head-->
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="team-add-details-tab" data-toggle="tab" href="#team-add-details" role="tab" aria-controls="team-add-details" aria-selected="true">Информация</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="team-add-members-tab" data-toggle="tab" href="#team-add-members" role="tab" aria-controls="team-add-members" aria-selected="false">Игроки</a>
                      </li>
                    </ul>
                    <div class="modal-body">
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="team-add-details" role="tabpanel">
                          <div class="form-group row align-items-center">
                            <label class="col-3">Название</label>
                            <input class="form-control col" type="text" placeholder="Название команды" name="team-name" required>
                          </div>
                          <div class="form-group row">
                            <label class="col-3">Категория</label>
                            <select class="form-control col" placeholder="Категория участников" name="category" required>
                              <option>Мужская</option>
                              <option>Юношеская</option>
                              <option>Женская</option>
                            </select>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="team-add-members" role="tabpanel">
                          Здесь будет выбор игроков из списка
                        </div>
                      </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                      <button role="button" class="btn btn-primary" type="submit">
                        Done
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-round btn-floating btn-lg" type="button" data-toggle="collapse" data-target="#floating-chat" aria-expanded="false">
          <i class="material-icons">chat_bubble</i>
          <i class="material-icons">close</i>
        </button>
        <div class="collapse sidebar-floating" id="floating-chat">
          <div class="sidebar-content">
            <div class="chat-module" data-filter-list="chat-module-body">
              <div class="chat-module-top">
                <form>
                  <div class="input-group input-group-round">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">search</i>
                      </span>
                    </div>
                    <input type="search" class="form-control filter-list-input" placeholder="Search chat" aria-label="Search Chat">
                  </div>
                </form>
                <div class="chat-module-body">

                  <div class="media chat-item">
                    <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Claire</span>
                        <span data-filter-by="text">4 days ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Hey guys, just kicking things off here in the chat window. Hope you&#39;re all ready to tackle this great project. Let&#39;s smash some Brand Concept &amp; Design!</p>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Peggy</span>
                        <span data-filter-by="text">4 days ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Nice one <a href="#">@Claire</a>, we&#39;ve got some killer ideas kicking about already.
                          <img src="https://media.giphy.com/media/aTeHNLRLrwwwM/giphy.gif" alt="alt text" title="Thinking">
                        </p>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Marcus" src="assets/img/avatar-male-1.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Marcus</span>
                        <span data-filter-by="text">3 days ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Roger that boss! <a href="">@Ravi</a> and I have already started gathering some stuff for the mood boards, excited to start! &#x1f525;</p>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Ravi" src="assets/img/avatar-male-3.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Ravi</span>
                        <span data-filter-by="text">3 days ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <h1>&#x1f609;</h1>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Claire</span>
                        <span data-filter-by="text">2 days ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Can&#39;t wait! <a href="#">@David</a> how are we coming along with the <a href="#">Client Objective Meeting</a>?</p>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="David" src="assets/img/avatar-male-4.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">David</span>
                        <span data-filter-by="text">Yesterday</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Coming along nicely, we&#39;ve got a draft for the client questionnaire completed, take a look! &#x1f913;</p>

                      </div>

                      <div class="media media-attachment">
                        <div class="avatar bg-primary">
                          <i class="material-icons">insert_drive_file</i>
                        </div>
                        <div class="media-body">
                          <a href="#" data-filter-by="text">questionnaire-draft.doc</a>
                          <span data-filter-by="text">24kb Document</span>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Sally" src="assets/img/avatar-female-3.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Sally</span>
                        <span data-filter-by="text">2 hours ago</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Great start guys, I&#39;ve added some notes to the task. We may need to make some adjustments to the last couple of items - but no biggie!</p>

                      </div>

                    </div>
                  </div>

                  <div class="media chat-item">
                    <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar" />
                    <div class="media-body">
                      <div class="chat-item-title">
                        <span class="chat-item-author" data-filter-by="text">Peggy</span>
                        <span data-filter-by="text">Just now</span>
                      </div>
                      <div class="chat-item-body" data-filter-by="text">
                        <p>Well done <a href="#">@all</a>. See you all at 2 for the kick-off meeting. &#x1f91C;</p>

                      </div>

                    </div>
                  </div>

                </div>
              </div>
              <div class="chat-module-bottom">
                <form class="chat-form">
                  <textarea class="form-control" placeholder="Type message" rows="1"></textarea>
                  <div class="chat-form-buttons">
                    <button type="button" class="btn btn-link">
                      <i class="material-icons">tag_faces</i>
                    </button>
                    <div class="custom-file custom-file-naked">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">
                        <i class="material-icons">attach_file</i>
                      </label>
                    </div>
                  </div>
                </form>
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