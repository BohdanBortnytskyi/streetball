<!doctype html>
<html lang="ru">


<?php
    
    // Header
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    // Главное боковое меню
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
  ?>

   <body>

    <div class="layout layout-nav-side">
      
      <?php
        // Главное боковое меню
        include $_SERVER['DOCUMENT_ROOT'] . '/parts/navbar.php';
      ?>
        <!-- Хлебные крошки и кнопка Настройки -->
        <div class="navbar bg-white breadcrumb-bar">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Рейтинг игроков</li>
            </ol>
          </nav>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 m-2">
              <h1>Рейтинг игроков</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Возраст</th>
                    <th scope="col">Рост</th>
                    <th scope="col">Вес</th>
                    <th scope="col">Команда</th>
                    <th scope="col">Рейтинг</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        // если гет запрос равен мужчине
                         if ($_GET['gender'] == 'm') {
                        // создаем запрос для получения всех продуктов
                        $sql = "SELECT * FROM players WHERE gender LIKE 'M' ORDER BY rankPoints desc";
                        // заносим в переменную результаты запроса
                        $result = $connect->query($sql);
                        // запускаем цикл, присваиваем переменной row строку из переменной $result
                        // и пока row не равен NULL выводим данные о продукте
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                  <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["height"] ?></td>
                    <td><?php echo $row["weight"] ?></td>
                    <td><?php echo $row["teamID"] ?></td>
                    <td><?php echo $row["rankPoints"] ?></td>
                  </tr>
                  <?php
                    }
                }
                  ?>

                   <?php
                        // если гет запрос равен юноше
                         if ($_GET['gender'] == 'u') {
                        // создаем запрос для получения всех продуктов
                        $sql = "SELECT * FROM players WHERE gender LIKE 'U' ORDER BY rankPoints desc";
                        // заносим в переменную результаты запроса
                        $result = $connect->query($sql);
                        // запускаем цикл, присваиваем переменной row строку из переменной $result
                        // и пока row не равен NULL выводим данные о продукте
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                  <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["height"] ?></td>
                    <td><?php echo $row["weight"] ?></td>
                    <td><?php echo $row["teamID"] ?></td>
                    <td><?php echo $row["rankPoints"] ?></td>
                  </tr>
                  <?php
                    }
                }
                  ?>

                   <?php
                        // если гет запрос равен женщине
                         if ($_GET['gender'] == 'w') {
                        // создаем запрос для получения всех продуктов
                        $sql = "SELECT * FROM players WHERE gender LIKE 'W' ORDER BY rankPoints desc";
                        // заносим в переменную результаты запроса
                        $result = $connect->query($sql);
                        // запускаем цикл, присваиваем переменной row строку из переменной $result
                        // и пока row не равен NULL выводим данные о продукте
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                  <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["height"] ?></td>
                    <td><?php echo $row["weight"] ?></td>
                    <td><?php echo $row["teamID"] ?></td>
                    <td><?php echo $row["rankPoints"] ?></td>
                  </tr>
                  <?php
                    }
                }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

   