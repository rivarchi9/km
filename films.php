<?php
  $namePage = 'Фильм'; // название страницы
  include "sections/head.php"; // вывод head
?>
<body>
  <div class="overlay-photo">
    <div class="overlay-bg"></div>
    <div class="row-inner-overlay">
      <div class="inner-overlay-photo">
        <div class="inner-overlay-image">
          <img src="app/img/content/o1.jpg" alt="">
          <div class="overlay-photo-controls">
            <div class="close"></div>
            <div class="prev"></div>
            <div class="next"></div>
          </div>
        </div>
        <div class="inner-overlay-caption section-video ">
          <!--  Содержимое описания  -->
        </div>
      </div>
    </div>
  </div>
  <div class="outer-brang-bg">
    <div class="brand-bg">
      <div class="inner-brand-bg">
        <a href="#" class="link-brand-bg">
          <span class="brand-bg-text">брендирование</span>
        </a>
      </div>
    </div>
  </div>
  <div class="outer">
    <div class="wrap">
      <?php include "sections/header.php"; ?>
      <div class="banner">
        <a href="#"><img alt="" src="#" class="responsive-image banner__image" data-src-d="/app/img/content/banner2.jpg" data-src-t="/app/img/content/banner2.jpg" data-src-m="/app/img/content/banner2.jpg"></a>
      </div>
      <div class="main-content-other-page clear">
        <!-- Контент -->
        <div class="head-content">
          <div class="info-user">
            <h1 class="pagetitle mini__pagetitle">Зеленая миля</h1>
            <h2 class="name__page">Green Mile</h2>
          </div>
          <div class="nav-content">
            <ul class="nav-content-list clear">
              <li class="nav-content-item "><a href="#">О фильме</a></li>
              <li class="nav-content-item "><span>Рецензии</span></li>
              <li class="nav-content-item no-active"><span>Актеры и создатели</span></li>
              <li class="nav-content-item active"><a href="#">Кадры <span class="number">38</span></a></li>
              <li class="nav-content-item"><a href="#">Обои <span class="number">8</span></a></li>
              <li class="nav-content-item"><a href="#">Трейлеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="#">Саундтрек <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="#">Постеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="#">Награды <span class="number">4</span></a></li>
            </ul>
          </div>
          <div class="caption-page clear">
            <div class="caption-page-item caption-page-image">
              <div class="outer-caption-page-image">
                <img src="app/img/content/f1.jpg" alt="" class="image-cover">
                <i class="image-hover"><span>Увеличить</span></i>
              </div>
            </div>
            <div class="caption-page-item caption-page-info">
              <div class="info-item">
                <div class="outer-info-item-list">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value">
                        <li class="value__name">Страна:</li>
                        <li>США</li>
                      </ul></li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Год:</li>
                        <li>1999</li>
                      </ul></li>
                    <li><ul class="value">
                      <li class="value__name">Жанр:</li> 
                      <li>детектив</li>
                      <li>фэнтези</li>
                      <li>драма</li>
                      <li>криминал</li>
                      <li>криминал</li>
                      <li>криминал</li>
                      <li>криминал</li>
                      <li>криминал</li>
                    </ul></li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Продолжительность:</li> 
                        <li>189 минут (3:09)</li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="outer-info-item-list">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value">
                        <li class="value__name">Премьера (США):</li>
                        <li>10.12.1999</li>
                      </ul>
                    </li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Рейтинг MPAA:</li>
                        <li>R</li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="outer-info-item-list">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value">
                        <li class="value__name">Бюджет:</li>
                        <li>$60 000 000</li>
                      </ul>
                    </li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Сборы (США):</li>
                        <li>$136 801 374</li>
                      </ul>
                    </li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Сборы (РФ):</li>
                        <li> 5 000 000 руб.</li>
                      </ul>
                    </li>
                  </ul>
                  <a href="#" class="info-item-list-link">Подробнее о кассовых сборах</a>
                </div>
                <div class="outer-info-item-list">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value">
                        <li class="value__name">Страна:</li>
                        <li>США</li>
                      </ul>
                    </li>
                    <li> 
                      <ul class="value">
                        <li class="value__name">Год:</li>
                        <li>1999</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="caption-page-item caption-page-dop">1</div>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12"></content>
          <!-- Сайдбар -->
        	<?php include "sections/aside2.php"; ?>
        </section>
    </div>
  <?php include "sections/footer.php"; ?>
  <!-- &Load Other CSS ================================================== -->

  <!-- &Scripts ==================================================-->
  <?php include "sections/scripts.php"; ?>
  <!-- /Scripts-->
</body>
</html>
