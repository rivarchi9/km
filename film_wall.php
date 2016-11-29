<?php
  $namePage = 'Обои Фильма'; // название страницы
  include "sections/head.php"; // вывод head
?>
<body>
  <div class="overlay-photo overlay-wall">
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
        <div class="inner-overlay-caption section-video ">
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
            <?php include "sections/film_nav.php" ?>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-wall">
              <div class="wall-items clear">
                <div class="wall-image">
                  <div class="image-shadow">
                    <img alt="" src="app/img/content/w1.jpg" class="responsive-image image-prewiew" data-src-d="app/img/content/w1.jpg" data-src-t="app/img/content/w1.jpg" data-src-m="app/img/content/w1.jpg">
                  </div>
                </div>
                <div class="wall-content">
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">4x3</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание">
                        <a class="parent">1600x1200</a>
                      </li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x980</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1024x768</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">800x600</a></li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">16x10</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1920x1200</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="active open-help-in"><a class="parent">1680x1050</a>
                        <div class="help help--color2">Ваше разрешение</div>
                      </li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1440x900</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x800</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">960x600</a></li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">16x9</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1920x1080</a></li>
                      <li class="no-active open-help-in"><span>1366x768</span>
                        <div class="help help--gray">Нет вашего разрешения</div>
                      </li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">5x4</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x1024</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="wall-items clear">
                <div class="wall-image">
                  <div class="image-shadow">
                    <img alt="" src="app/img/content/w1.jpg" class="responsive-image image-prewiew" data-src-d="app/img/content/w1.jpg" data-src-t="app/img/content/w1.jpg" data-src-m="app/img/content/w1.jpg">
                  </div>
                </div>
                <div class="wall-content">
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">4x3</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1600x1200</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x980</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1024x768</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">800x600</a></li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">16x10</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1920x1200</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1680x1050</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание" class="active open-help-in"><a class="parent">1440x900</a>
                        <div class="help help--color2">Ваше разрешение</div>
                      </li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x800</a></li>
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">960x600</a></li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">16x9</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1920x1080</a></li>
                      <li class="no-active open-help-in"><span>1366x768</span>
                      <div class="help help--gray">Нет вашего разрешения</div>
                      </li>
                    </ul>
                  </div>
                  <div class="wall-size-item">
                    <div class="wall-size" data-type="">5x4</div>
                    <ul class="wall-size-list">
                      <li data-type-over-img="" data-type-over-desc=".desc-in-over" data-type-over-desc-desc="Описание"><a class="parent">1280x1024</a></li>
                    </ul>
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
        	<?php include "sections/aside_billboards.php"; ?>
        </section>
    </div>
  <?php include "sections/footer.php"; ?>
  <!-- &Load Other CSS ================================================== -->

  <!-- &Scripts ==================================================-->
  <?php include "sections/scripts.php"; ?>
  <!-- /Scripts-->
</body>
</html>
