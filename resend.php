<!doctype html>
<html lang="en">

  <?php
    // Конфигурация БД
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // Head
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
    // отправляем повторно письмо
    if(isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST"){

    $u_code = generateRandomString(20);
    $sql = "UPDATE players SET confirm = '$u_code' WHERE email='" . $_POST['email'] . "'";
    $result = $connect->query($sql);
    if($result > 0) {
    echo "Вам на почту выслано подтверждение регистрации";
    $link = "<a href='http://streetball.local/register.php?u_code=$u_code'>Confirm</a>";
        mail($_POST['email'], 'Register', $link);
        
    } 
    else {
      echo "Error";
    }

}

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
              <h1 class="h2">Повторить отправку</h1>
              <p class="lead">Мы отправим вам ссылку для подтверждения</p>
              <form method="POST">
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email-адрес" name="email" />
                </div>
                <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                  Отправить еще раз
                </button>
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