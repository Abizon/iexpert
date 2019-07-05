<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЯЭксперт</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/popups.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.css">
</head>

<body>
    <div id="preload"><span class="load"></span></div>
    <?php include "pop.html"; ?>

    <header>
        <div class="navbar">
          <a href="index.php" class="logo"></a>
          <ul class="menu">
            <a href="index.php" class="link_menu">
              <li>ГЛАВНАЯ</li>
            </a>
            <a href="about.php" class="link_menu">
              <li>О НАС</li>
            </a>
            <a href="select.php" class="link_menu">
              <li>НАЙТИ ЭКСПЕРТА</li>
            </a>
            <a href="expert.php" class="link_menu">
              <li>СТАТЬ ЭКСПЕРТОМ</li>
            </a>
            <a href="contacts.php" class="link_menu">
              <li>КОНТАКТЫ</li>
            </a>
            <a href class="burger">
              <i class="fas fa-bars"></i>
            </a>
          </ul>
          <?php
            if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
          ?>
          <div class="registration">
            <div>Регистрация&nbsp;&nbsp;|&nbsp;&nbsp;</div>
            <div>Войти</div>
          </div>
          <?php
            }else{
          ?>
          <div class="profile" data-toggle="dropdown">
            <div class="prof_phwh">
              <div id="user_photo"></div>
                <div id="user_who"></div>
            </div>
            <div class="user_in">
              <div id="user_name"></div>
              <div id="user_balance"></div>
            </div>
            <div class="dropdown-menu">
              <a href class="dropdown-item" id="exit" onclick="exit()">Выйти</a>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </header>
