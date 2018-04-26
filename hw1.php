<?php

$name = "Никита";
$age = 32;
$email = "simonov.nikita163@gmail.com";
$city = "Самара";
$about = "Хочу знать php лучше всех!!!";

?>

<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание №1. Знакомство с php.</title>
    <style>
      dt {
        float: left;
        width: 250px;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <h1>Страница пользователя Никита</h1>
      <dl>
        <dt>Имя</dt><dd><?= $name?></dd>
        <dt>Возраст</dt><dd><?= $age?></dd>
        <dt>Электронная почта</dt><a href="mailto:simonov.nikita163@gmail.com"><?= $email?></a></dd>
        <dt>Город</dt><dd><?= $city?></dd>
        <dt>О себе</dt><dd><?= $about?></dd>
      </dl>
    </div>
  </body>
</html>
