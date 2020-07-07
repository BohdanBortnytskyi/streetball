// выбираем все кнопки добавления игроков
var addButtons = document.querySelectorAll(".player-add");

// записываем сюда какая кнопка нажата
var addButton = null;

// если нажата кнопка добавления Игрока 1
addButtons[0].onclick = function() {
  addButton = 1;
}
// если нажата кнопка добавления Игрока 2
addButtons[1].onclick = function() {
  addButton = 2;
}
// если нажата кнопка добавления Игрока 3
addButtons[2].onclick = function() {
  addButton = 3;
}
// если нажата кнопка добавления Игрока 4
addButtons[3].onclick = function() {
  addButton = 4;
}

// Функция добавления игрока в заявку
function addPlayer(element) {
  var playerID = element.dataset.playerid; // 
  var playerName = element.dataset.playername; //
  var playerPhoto = element.dataset.playerphoto;

  // берем скрытые инпуты с айди игроков
  var inputPlayer1 = document.querySelector("#input-player1");
  var inputPlayer2 = document.querySelector("#input-player2");
  var inputPlayer3 = document.querySelector("#input-player3");
  var inputPlayer4 = document.querySelector("#input-player4");

  // добавляем Игрока 1
  if(addButton == 1) {
    if(playerID != inputPlayer2.value && playerID != inputPlayer3.value && playerID != inputPlayer4.value) {
      // добавляем ссылку на игрока и имя
      var spanPlayer1 = document.querySelector("#player1"); // выбираем по ID
      spanPlayer1.innerHTML = "<img alt='Фото Игрок 1' class='avatar filter-by-alt' src='assets/img/avatars/" + playerPhoto + "'><a href='player-profile.php?id=" + playerID + "'>" + playerName + "</a>"; // изменяем содержимое

      // добавляем в инпут айди игрока
      inputPlayer1.value = playerID;

      // закрываем окно поиска игроков
      searchClose();
    }
    
  }

  // добавляем Игрока 2
  if(addButton == 2) {
    // проверка на совпадение с другими игроками
    if(playerID != inputPlayer1.value && playerID != inputPlayer3.value && playerID != inputPlayer4.value) {
      // добавляем ссылку на игрока и имя
      var spanPlayer2 = document.querySelector("#player2"); // выбираем по ID
      spanPlayer2.innerHTML = "<img alt='Фото Игрок 2' class='avatar filter-by-alt' src='assets/img/avatars/" + playerPhoto + "'><a href='player-profile.php?id=" + playerID + "'>" + playerName + "</a>"; // изменяем содержимое

      // добавляем в инпут айди игрока
      inputPlayer2.value = playerID;

      // закрываем окно поиска игроков
      searchClose();
    } else {
      alert('Этот игрока уже добавлен!');
    }
    
  }

  // добавляем Игрока 3
  if(addButton == 3) {
    if(playerID != inputPlayer1.value && playerID != inputPlayer2.value && playerID != inputPlayer4.value) {
      // добавляем ссылку на игрока и имя
      var spanPlayer3 = document.querySelector("#player3"); // выбираем по ID
      spanPlayer3.innerHTML = "<img alt='Фото Игрок 3' class='avatar filter-by-alt' src='assets/img/avatars/" + playerPhoto + "'><a href='player-profile.php?id=" + playerID + "'>" + playerName + "</a>"; // изменяем содержимое

      // добавляем в инпут айди игрока
      inputPlayer3.value = playerID;

      // закрываем окно поиска игроков
      searchClose();
    } else {
      alert('Этот игрока уже добавлен!');
    }
    
  }

  // добавляем Игрока 4
  if(addButton == 4) {
    if(playerID != inputPlayer1.value && playerID != inputPlayer2.value && playerID != inputPlayer3.value) {
      // добавляем ссылку на игрока и имя
      var spanPlayer4 = document.querySelector("#player4"); // выбираем по ID
      spanPlayer4.innerHTML = "<img alt='Фото Игрок 4' class='avatar filter-by-alt' src='assets/img/avatars/" + playerPhoto + "'><a href='player-profile.php?id=" + playerID + "'>" + playerName + "</a>"; // изменяем содержимое

      // добавляем в инпут айди игрока
      inputPlayer4.value = playerID;

      // закрываем окно поиска игроков
      searchClose();  
    } else {
      alert('Этот игрока уже добавлен!');
    }
    
  }
  
}

// Закрытие окна поиска игроков
function searchClose() {
  // закрываем окно поиска игроков
      var modalSearch = document.querySelector("#floating-chat");
      modalSearch.classList.remove("show");
}