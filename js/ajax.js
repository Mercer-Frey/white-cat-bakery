"use strict";

function ajax(url, method, dataArray, functionName) {
  var xhttp = new XMLHttpRequest(); // создаем новый запрос

  xhttp.open(method, url, true); //открываем соединение

  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //указываем способ отправки

  xhttp.send(requestData(dataArray)); // что отправляем, инициализируем отправку

  xhttp.onreadystatechange = function () {
    //проверка ответа от сервера
    if (this.readyState == 4 && this.status == 200) {
      //ответ от сервера
      functionName(this.response); //то что выполняется по ajax запросу
    }
  };
}

function requestData(dataArr) {
  //функция приводит массив данных в строку для запроса
  var out = '';

  for (var key in dataArr) {
    out += "".concat(key, "=").concat(dataArr[key], "&");
  }

  return out;
}

function debounce(f, ms) {
  var isCooldown = false;
  return function () {
    if (isCooldown) return;
    f.apply(this, arguments);
    isCooldown = true;
    setTimeout(function () {
      return isCooldown = false;
    }, ms);
  };
}

;

function randomInteger(min, max) {
  // случайное число от min до (max+1)
  var rand = min + Math.random() * (max + 1 - min);
  var d = Math.floor(rand);
  return d;
}