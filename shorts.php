
<?php
  $namePage = 'Shorts'; // название страницы
  include "sections/head.php"; // вывод head
?>
<body>
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
        <section class=" outer-section clear outer-content">
        	<!-- Контент -->
          <content class="page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          	<div class="row-header-page-item header-page--color1 parent-sticker parent-sticker-not-outside">
              <div class="header-page-text">Лучшие короткометражные фильмы со всего света.</div>
              <div class="sticker">
                <div class="sticker-item">SHORTЫ</div>
              </div>
            </div>
            <div class="outer-selection-trailers outer-selection-trailers-shorts">
              <div data-type-openclose-button="open_close" data-type-openclose-class="active" class="button__selection-trailers"><span>Подбор по параметрам</span></div>
              <div class="selection-trailers">
                <div class="row-selection-hide" data-type-openclose-element="open_close">
                  <div class="selection-trailers-item clear">
                    <div class="item ganre">
                      <div class="selection-trailers__name">Жанр:</div>
                      <div class="selection-trailers__value">
                        <ul class="selection-trailers__value-list">
                          <li><a href="#">комедия</a></li>
                          <li><a href="#">биография</a></li>
                          <li><a href="#">ужасы</a></li>
                          <li><a href="#">драма</a></li>
                          <li><a href="#">боевик</a></li>
                          <li><a href="#">военный</a></li>
                          <li><a href="#">фантастика</a></li>
                          <li><a href="#">мультфильм</a></li>
                          <li><a href="#">приключения</a></li>
                          <li><a href="#">мелодрама</a></li>
                          <li><a href="#">триллер</a></li>
                          <li><a href="#">фэнтези</a></li>
                          <li><a href="#">криминал</a></li>
                          <li><a href="#">фильм-нуар</a></li>
                          <li><a href="#">семейный</a></li>
                          <li><a href="#">детектив</a></li>
                          <li><a href="#">вестерн</a></li>
                          <li><a href="#">спорт</a></li>
                          <li><a href="#">мюзикл</a></li>
                          <li><a href="#">музыка</a></li>
                          <li><a href="#">исторический</a></li>
                          <li><a href="#">документальный</a></li>
                          <li><a href="#">рекламный ролик</a></li>
                          <li><a href="#">музыкальный клип</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="item language">
                      <div class="selection-trailers__name">Язык:</div>
                      <div class="selection-trailers__value">
                        <ul class="selection-trailers__value-list">
                          <li><a href="#">русский</a></li>
                          <li><a href="#">иностранный</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="selection-trailers-item clear">
                    <div class="item years" data-type="slider" data-type-slider-min="1930" data-type-slider-max="2016">
                      <div class="selection-trailers__name">Года:</div>
                      <div class="selection-trailers__value">
                        <div class="outer-time-bar clear">
                          <div class="time-bar-years">
                            <ul>
                              <li>1930</li>
                              <li>1970</li>
                              <li>2016</li>
                            </ul>
                          </div>
                          <div class="time-bar-slide">
                            <div class="slide-bar-bottom" data-type-slider="bg">
                              <div class="slide-bar-top" data-type-slider="fr"></div>
                              <div class="slide-bar-controls">
                                <div class="slide-bar-controls__item slide-bar-controls__left" data-type-slider="left_controller"></div>
                                <div class="slide-bar-controls__item slide-bar-controls__right" data-type-slider="right_controller"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="outer-time-value clear">
                          <span>с</span>
                          <input type="text" class="time-value-after" data-type-slider="input_left" value="1993">
                          <span>по</span>
                          <input type="text" class="time-value-before" data-type-slider="input_right" value="2006">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="selection-trailers-item">
                  <div class="item letters">
                    <div class="letters-select">
                      <ul class="tab-list clear">
                        <li class="active" data-type-sliderGroup="lang" data-type-sliderButton="ru">RU</li>
                        <li class="default" data-type-sliderGroup="lang" data-type-sliderButton="eng">ENG</li>
                      </ul>
                    </div>
                    <div class="letters-text">
                      <ul class="letters-text-list active" data-type-sliderGroup="lang" data-type-sliderElem="ru">
                        <li>А</li>
                        <li>Б</li>
                        <li>В</li>
                        <li>Г</li>
                        <li>Д</li>
                        <li>Е</li>
                        <li>Ё</li>
                        <li>Ж</li>
                        <li>З</li>
                        <li>И</li>
                        <li>Й</li>
                        <li>К</li>
                        <li>Л</li>
                        <li>М</li>
                        <li>Н</li>
                        <li>О</li>
                        <li>П</li>
                        <li>Р</li>
                        <li>С</li>
                        <li>Т</li>
                        <li>У</li>
                        <li>Ф</li>
                        <li>Х</li>
                        <li>Ц</li>
                        <li>Ч</li>
                        <li>Ш</li>
                        <li>Щ</li>
                        <li>Ъ</li>
                        <li>Ы</li>
                        <li>Ь</li>
                        <li>Э</li>
                        <li>Ю</li>
                        <li>Я</li>
                      </ul>
                      <ul class="letters-text-list" data-type-sliderGroup="lang" data-type-sliderElem="eng">
                        <li>A</li>
                        <li>B</li>
                        <li>C</li>
                        <li>D</li>
                        <li>E</li>
                        <li>F</li>
                        <li>G</li>
                        <li>H</li>
                        <li>I</li>
                        <li>J</li>
                        <li>K</li>
                        <li>L</li>
                        <li>M</li>
                        <li>N</li>
                        <li>O</li>
                        <li>P</li>
                        <li>Q</li>
                        <li>R</li>
                        <li>S</li>
                        <li>T</li>
                        <li>U</li>
                        <li>V</li>
                        <li>W</li>
                        <li>X</li>
                        <li>Y</li>
                        <li>Z</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-box">
              <div class="pagelist-item clear">
                <div class="pagelist-item-image news-pagelist-item-image box-list-item-one">
                  <div class=" image-shadow ">
                    <a href="news-item.php"><img alt="" src="/app/img/content/bx1.jpg" class="responsive-image  image-prewiew" data-src-d="/app/img/content/bx1.jpg" data-src-t="/app/img/content/bx1.jpg" data-src-m="/app/img/content/bx1.jpg"></a>
                  </div>
                </div>
                <div class="pagelist-item-content news-pagelist-item-content box-list-item-two">
                  <div class="pagelist-item-title">
                    <a href="news-item.php">Рекламная короткометражка Дэвида О. Рассела для Prada</a>
                  </div>
                  <p>
                    Дэвид О. Рассел, режиссер «Аферы по-американски», «Бойца» и «Мой парень — псих», снял футуристическую нуар-фантазию Past Forward для дома моды Prada. 
                  </p>
                  <div class="pagelist-info">
                    <a href="#" class="author-post-list">Kinomania.ru</a>,
                    <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                    <a href="#" class="pagelist__comments">8</a>
                  </div>
                  <a href="#" class="pagelist__link">Подробнее</a>
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
