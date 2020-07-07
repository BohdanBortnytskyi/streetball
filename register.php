<!doctype html>
<html lang="ru">

  <?php
    // Конфигурация БД
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // Настройки сайта
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/setup.php';

    // Head
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
    
    // Переход по ссылке подтверждения регистрации 
    if(isset($_GET['u_code'])) {
      $sql = "SELECT * FROM players WHERE confirm='" . $_GET['u_code'] . "'";
      $result = $connect->query($sql);
      
      //Верифириуем игрока
      if($result->num_rows > 0) {
        $player = mysqli_fetch_assoc($result); 
        $sql = "UPDATE `players` SET `verified` = '1' WHERE `id` =" . $player['id'];
        if($connect->query($sql)) {
           //header("Location: /login.php"); // переадресация на страницу входа
           echo "<div class='alert alert-primary' role='alert'>Ваш профиль подтвержден. Теперь вы можете <a href='login.php'>войти на платформу</a></div>";
         } 
           // удаление подтверждения почты
          //$sql2 = "UPDATE `players` SET `confirm` = '' WHERE `id` =" . $user['id'];
         //if ($conn->query($sql2)) {

         //}
      }
    }
    
    // Отправка формы регистрации
    if(isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {
    
      $sql = "SELECT * FROM players WHERE email = '" . $_POST["email"] . "'";
      $result = $connect->query($sql);
      if($result->num_rows == 0) {

        // шифруем пароль
        $password = md5($_POST['pass']);

        // генерируем случайную строку
        $u_code = generateRandomString(20);

        $sql = "INSERT INTO players (email, password, confirm) VALUES ('" . $_POST["email"] . "', '" . $password . "', '$u_code')";
        // отправляем ссылку
        if($connect->query($sql)) {
          echo "<div class='alert alert-primary' role='alert'>На указанный адрес выслано письмо со ссылкой для подтверждения регистрации. Если письмо не пришло, попробуйте "
    ?>
          <a href="<?php echo $siteURL; ?>/resend.php">отправить повторно</a></div>   
    <?php
          $link = "Подтверите регистрацию, перейдя по ссылке " . $siteURL . "/register.php?u_code=$u_code";
          mail($_POST['email'], 'Регистрация на платформе УСЛ 3х3', $link, "From: usl3x3@gmail.com");
        }

      } else {
        echo "<div class='alert alert-danger' role='alert'>Такой email-адрес уже есть в базе данных!</div>";
      }
    }

    // Функция-генеретор случайной строки
    function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  ?>

  <body>
    <div class="main-container fullscreen">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="text-center">
              <a class="navbar-brand" href="/">
                <img alt="Streetball Players Platform" height="70" src="assets/img/logo-3x3.png" />
              </a>
              <hr>
              <h1 class="h2">Регистрация на платформе</h1>
              <p class="lead">Станьте полноценным участником!</p>
              <form method="POST">
                <small>Мы отправим вам письмо для подтверждения email-адреса</small>
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email-адрес" name="email">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="Пароль" name="pass">
                </div>
                <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                  Создать профиль
                </button>
                <small>Уже есть профиль? <a href="login.php">Войти</a>
                </small>
              </form>
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