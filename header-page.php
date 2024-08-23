<!DOCTYPE html>
<html lang="ru">
  <head>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
      />
      <link rel="stylesheet" href="css/swiper-bundle.min.css" />
      <link rel="stylesheet" href="css/normalize.css" />
      <link rel="stylesheet" href="css/style.css" />
      <title><?= $page_title ?> - Aliance Production</title>
    </head>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <img src="img/svg/mark.svg" alt="mark" />
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <img src="img/svg/mail.svg" alt="mail" />
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email"
          >a.dragunov@tdaliance.ru
        </a>
      </div>
      <div class="vk-inst-link">
        <a href="#" class="mobile-info">
          <img src="img/svg/vk.svg" alt="vk" />
        </a>
        <a href="#" class="mobile-info">
          <img src="img/svg/inst.svg" alt="inst" />
        </a>
      </div>
    </div>
    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="ul header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./news.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="./contacts.php" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="16" height="16">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14
        </a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="16" height="16">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>

    <div class="inside-header">
        <div class="inside-header-wrapper">
         <?php
         if (!empty($back_image)) {
         echo ' <img
          class= "back-inside-header-image"
          src="img/back-inside-header-image.png"
          alt="back-inside-header-image"
         />';
         echo '<div class="blackout"></div>';
         }
         ?>
        <section class="section">
          <div class="container">
            <div class="inside-header-content">
              <div class="inside-header-title">
                <div class="seporator"></div>
                <h2 class="section-title <?= $header_style ?>"><?= $page_title ?></h2>
                <h2 class="section-title-2 section-title-image"><?= $page_title ?></h2>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#" class="crumb-item">Главная</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#" class="crumb-item"><?= $page_title ?></a>
                  </li>
                </ul>
              </div>
              <img
                class="inside-header-image"
                src="img/inside-header.png"
                alt="inside-header-image"
              />
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- /.inside-header -->
