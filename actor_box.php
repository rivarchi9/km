<?php
  $namePage = 'Кадры Актера'; // название страницы
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
            <h1 class="pagetitle mini__pagetitle">Том Хенкс</h1>
            <h2 class="name__page">Tom Hanks</h2>
          </div>
          <div class="nav-content">
            <?php include "sections/actor_nav.php" ?>
          </div>
        </div>
        <section class="outer-section clear outer-content">
          <!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <!-- <h1 class="pagetitle mini__pagetitle">РЕЗУЛЬТАТЫ ПОИСКА</h1> -->
          <div class="nav-films clear">
            <span class="nav-films-title">Выберите тип:</span>
            <ul class="nav-films-list">
              <li data-type-filter-button="ALL" class="active"><a>Все</a></li>
              <li data-type-filter-button="promo"><a>Промокадры</a></li>
              <li data-type-filter-button="from-came-place"><a>Со съемочной площадки</a></li>
              <li data-type-filter-button="films-frame"><a>Кадры из фильма</a></li>
            </ul>
          </div>
          <div class="list-content">
            <div class="trailer-item clear">
              <div class="row">
                <div class="col-xl-6 trailer-item-col" data-type-filter="from-came-place" data-type-over-img="app/img/content/tl1.jpg">
                  <div class="row-trailer-image-list">
                    <div class="image-shadow">
                      <a class="parent"><img src="app/img/content/tl1.jpg" alt="" class="image-cover">
                      </a>
                    </div>
                  </div>
                  <div class="image-size-caption">850x567, 125 КБ</div>
                  <div class="trailer-caption-hide">
                    <div class="info">
                      <p class="title"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                      <p class="text producer">Режиссер: <a href="#">Рон Ховард</a></p>
                      <p class="text name">В ролях: <a href="#">Том Хэнкс</a>, <a href="#">Фелисити Джонс</a>, <a href="#">Бен Фостер</a>, <a href="#">Ирфан Кхан</a>, <a href="#">Омар Си</a></p>
                    </div>
                    <div class="download">
                      <div class="link__download"><span>Скачать</span><i class="link__download-icon sprite"></i>
                          <div class="outer-dop-download">
                          <div class="dop-download">
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="outer-social clear">
                      <ul class="social-list social-list--horizontal">
                        <li class="vk"><a href="#"><span class="number">856</span></a></li>
                        <li class="fb"><a href="#"><span class="number">856</span></a></li>
                        <li class="ok"><a href="#"><span class="number">856</span></a></li>
                        <li class="pinterest"><a href="#"><span class="number">856</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 trailer-item-col" data-type-filter="promo" data-type-over-img="app/img/content/o1.jpg">
                  <div class="row-trailer-image-list">
                    <div class="image-shadow">
                      <a class="parent"><img src="app/img/content/tl1.jpg" alt="" class="image-cover">
                      </a>
                    </div>
                  </div>
                  <div class="image-size-caption">850x567, 125 КБ</div>
                  <div class="trailer-caption-hide">
                    <div class="info">
                      <p class="title"><a href="#">Lorem ipsum dolor sit amet22.</a></p>
                      <p class="text producer">Режиссер: <a href="#">Рон Ховард</a></p>
                      <p class="text name">В ролях: <a href="#">Том Хэнкс</a>, <a href="#">Фелисити Джонс</a>, <a href="#">Бен Фостер</a>, <a href="#">Ирфан Кхан</a>, <a href="#">Омар Си</a></p>
                    </div>
                    <div class="download">
                      <div class="link__download"><span>Скачать</span><i class="link__download-icon sprite"></i>
                          <div class="outer-dop-download">
                          <div class="dop-download">
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="outer-social clear">
                      <ul class="social-list social-list--horizontal">
                        <li class="vk"><a href="#"><span class="number">856</span></a></li>
                        <li class="fb"><a href="#"><span class="number">856</span></a></li>
                        <li class="ok"><a href="#"><span class="number">856</span></a></li>
                        <li class="pinterest"><a href="#"><span class="number">856</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 trailer-item-col" data-type-filter="promo" data-type-over-img="app/img/content/o1.jpg">
                  <div class="row-trailer-image-list">
                    <div class="image-shadow">
                      <a class="parent"><img src="app/img/content/tl1.jpg" alt="" class="image-cover">
                      </a>
                    </div>
                  </div>
                  <div class="image-size-caption">850x567, 125 КБ</div>
                  <div class="trailer-caption-hide">
                    <div class="info">
                      <p class="title"><a href="#">Lorem ipsum dolor sit AMET22.</a></p>
                      <p class="text producer">Режиссер: <a href="#">Рон Ховард</a></p>
                      <p class="text name">В ролях: <a href="#">Том Хэнкс</a>, <a href="#">Фелисити Джонс</a>, <a href="#">Бен Фостер</a>, <a href="#">Ирфан Кхан</a>, <a href="#">Омар Си</a></p>
                    </div>
                    <div class="download">
                      <div class="link__download"><span>Скачать</span><i class="link__download-icon sprite"></i>
                          <div class="outer-dop-download">
                          <div class="dop-download">
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                            <div class="dop-download-item">
                              <a href="#">Низкое</a>
                              <a href="#">HD 480</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="outer-social clear">
                      <ul class="social-list social-list--horizontal">
                        <li class="vk"><a href="#"><span class="number">856</span></a></li>
                        <li class="fb"><a href="#"><span class="number">856</span></a></li>
                        <li class="ok"><a href="#"><span class="number">856</span></a></li>
                        <li class="pinterest"><a href="#"><span class="number">856</span></a></li>
                      </ul>
                    </div>
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
