<?php
  $namePage = 'Постеры Фильма'; // название страницы
  include "sections/head.php"; // вывод head
?>
<body>
  <div class="overlay-photo overlay-wall overlay-posters">
    <div class="overlay-bg"></div>
    <div class="row-inner-overlay">
      <div class="inner-overlay-photo">
        <div class="inner-overlay-image">
          <img src="" alt="">
          <div class="overlay-photo-controls">
            <div class="close"></div>
            <div class="prev"></div>
            <div class="next"></div>
          </div>
        </div>
        <div class="inner-overlay-caption clear section-video ">
          <!--  Содержимое описания  -->
        </div>
      </div>
    </div>
  </div>
  <div class="desc-in-over">
    <span class="desc"></span><a class="link" target="_blank" href="">Скачать</a>
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
            <h1 class="pagetitle mini__pagetitle">Университет монстров</h1>
            <h2 class="name__page">Monsters University</h2>
          </div>
          <div class="nav-content">
            <ul class="nav-content-list clear">
              <li class="nav-content-item"><a href="films.php">О фильме</a></li>
              <li class="nav-content-item "><a href="film_reviews.php">Рецензии<span class="number"></span></a></li>
              <li class="nav-content-item "><a href="film_actors.php">Актеры и создатели<span class="number"></span></a></li>
              <li class="nav-content-item "><a href="film_lightbox.php">Кадры <span class="number">38</span></a></li>
              <li class="nav-content-item "><a href="film_wall.php">Обои <span class="number">8</span></a></li>
              <li class="nav-content-item"><a href="film_trailers.php">Трейлеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="film_music.php">Саундтрек <span class="number">4</span></a></li>
              <li class="nav-content-item active"><a href="film_poster.php">Постеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="film_awords.php">Награды <span class="number">4</span></a></li>
            </ul>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-posters">
              <div class="row">
                <div class="posters-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="row-posters__image">
                    <div data-type-over-img="app/img/content/p1.jpg" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/p1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/p1.jpg" data-src-t="app/img/content/p1.jpg" data-src-m="">
                    </div>
                  </div>
                  <div class="posters-caption">
                    <span class="posters-caption__screen">729x1001</span>,<span class="posters-caption__size">146 КБ</span>
                  </div>
                </div>
                <div class="posters-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="row-posters__image">
                    <div data-type-over-img="app/img/content/p1.jpg" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/p1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/p1.jpg" data-src-t="app/img/content/p1.jpg" data-src-m="">
                    </div>
                  </div>
                  <div class="posters-caption">
                    <span class="posters-caption__screen">729x1001</span>,<span class="posters-caption__size">146 КБ</span>
                  </div>
                </div>
                <div class="posters-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="row-posters__image">
                    <div data-type-over-img="app/img/content/p1.jpg" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/p1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/p1.jpg" data-src-t="app/img/content/p1.jpg" data-src-m="">
                    </div>
                  </div>
                  <div class="posters-caption">
                    <span class="posters-caption__screen">729x1001</span>,<span class="posters-caption__size">146 КБ</span>
                  </div>
                </div>
                <div class="posters-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="row-posters__image">
                    <div data-type-over-img="app/img/content/p1.jpg" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/p1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/p1.jpg" data-src-t="app/img/content/p1.jpg" data-src-m="">
                    </div>
                  </div>
                  <div class="posters-caption">
                    <span class="posters-caption__screen">729x1001</span>,<span class="posters-caption__size">146 КБ</span>
                  </div>
                </div>
                <div class="posters-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="row-posters__image">
                    <div data-type-over-img="app/img/content/p1.jpg" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/p1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/p1.jpg" data-src-t="app/img/content/p1.jpg" data-src-m="">
                    </div>
                  </div>
                  <div class="posters-caption">
                    <span class="posters-caption__screen">729x1001</span>,<span class="posters-caption__size">146 КБ</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="outer-pagelist-more">
              <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
            </div>
            <div class="pagelist-social">
              <div class="outer-social clear">
                <ul class="social-list social-list--horizontal">
                  <li class="vk"><a href="#"><span class="number">856</span></a></li>
                  <li class="fb"><a href="#"><span class="number">856</span></a></li>
                  <li class="tw"><a href="#"></a></li>
                </ul>
              </div>
            </div>
          </content>
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
