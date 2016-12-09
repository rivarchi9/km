
<?php
  $namePage = 'Актер Постеры'; // название страницы
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
          	<h1 class="pagetitle trailers-pagetitle">ВСЕ ПОСТЕРЫ</h1>
            <div class="outer-selection-trailers">
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
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item language">
                    <div class="selection-trailers__name">Язык:</div>
                    <div class="selection-trailers__value">
                      <ul class="selection-trailers__value-list">
                        <li><a href="#">оригинальный</a></li>
                        <li><a href="#">локализованный</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="item type">
                    <div class="selection-trailers__name">Тип:</div>
                    <div class="selection-trailers__value">
                      <ul class="selection-trailers__value-list">
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
                        <li><a href="#">трейлер</a></li>
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
            <div class="row-mini-slide row-mini-slide--two row-posters-mini-slide  row-mini-slide--gray">
              <div class="mini-slide-title no-hover-slide-title">ПОПУЛЯРНЫЕ</div>
              <div class="row-bx-mini-slider">
                <div class="bx-mini-slider bx-mini-slider-posters posters--hover">
                  <div class="slide"><a href="#" class=""><img src="app/img/content/po4.jpg"></a>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="slide"><a href="#"><img src="app/img/content/po4.jpg"></a>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="slide"><a href="#"><img src="app/img/content/po4.jpg"></a>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="slide"><a href="#"><img src="app/img/content/po4.jpg"></a>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="scripts-list-item">
              <div class="content-page__titile">
                <h2>НОВЫЕ</h2>
              </div>
              <div class="row-posters-page posters--hover">
                <div class="row row-tile-block">
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po1.jpg" data-src-t="app/img/content/po1.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po2.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po2.jpg" data-src-t="app/img/content/po2.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Черепашки-ниндзя 2</a></div>
                      <div class="poster-title-eng">Teenage Mutant Ninja Turtles: Out of the Shadows</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po3.jpg" data-src-t="app/img/content/po3.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po1.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po1.jpg" data-src-t="app/img/content/po1.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po2.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po2.jpg" data-src-t="app/img/content/po2.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Черепашки-ниндзя 2</a></div>
                      <div class="poster-title-eng">Teenage Mutant Ninja Turtles: Out of the Shadows</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                  <div class="posters-item posters-item-tile">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="image-shadow-poster posters__image">
                          <img alt="" src="app/img/content/po3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/po3.jpg" data-src-t="app/img/content/po3.jpg" data-src-m="app/img/content/po1.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="posters-caption">
                      <div class="poster-title"><a href="#">Дорога чести</a></div>
                      <div class="poster-title-eng">Road to Paloma</div>
                      <div class="poster-number"><span class="value">6</span> постеров</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-big-posters posters--hover">
                <div class="big-poster-item">
                  <a href="#">
                    <div class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/bp1.jpg" class="parent resbpnsive-image image-prewiew" data-src-d="app/img/content/bp1.jpg" data-src-t="app/img/content/bp1.jpg" data-src-m="app/img/content/po1.jpg">
                    </div>
                  </a>
                  <div class="posters-caption">
                    <div class="poster-title"><a href="#">Дорога чести</a></div>
                    <div class="poster-title-eng">Road to Paloma</div>
                    <div class="poster-number"><span class="value">6</span> постеров</div>
                  </div>
                </div>
                <div class="big-poster-item">
                  <a href="#">
                    <div class="image-shadow-poster posters__image">
                      <img alt="" src="app/img/content/bp2.jpg" class="parent resbpnsive-image image-prewiew" data-src-d="app/img/content/bp2.jpg" data-src-t="app/img/content/bp2.jpg" data-src-m="app/img/content/po1.jpg">
                    </div>
                  </a>
                  <div class="posters-caption">
                    <div class="poster-title"><a href="#">Дорога чести</a></div>
                    <div class="poster-title-eng">Road to Paloma</div>
                    <div class="poster-number"><span class="value">6</span> постеров</div>
                  </div>
                </div>
              </div>
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
