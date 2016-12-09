
<?php
  $namePage = 'Обои'; // название страницы
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
            <div class="row-wallpapers">
              <div class="row-list-nav-second">
                <ul class="list-nav-second clear">
                  <li ><a href="wallpapers.php">Фильмы</a></li>
                  <li ><a href="wallpapers_actor.php">Актеры</a></li>
                  <li class="active"><a href="wallpapers_actress.php">Актрисы</a></li>
                </ul>
              </div>
              <h1 class="pagetitle trailers-pagetitle">ВСЕ ОБОИ</h1>
              <div class="outer-selection-trailers">
                <div data-type-openclose-button="open_close" data-type-openclose-class="active" class="button__selection-trailers"><span>Подбор по параметрам</span></div>
                <div class="selection-trailers">
                  <div class="row-selection-hide" data-type-openclose-element="open_close">
                    <div class="selection-trailers-item clear">
                      <div class="item type">
                        <div class="selection-trailers__value selection-trailers__value-two">
                          <ul class="selection-trailers__value-list">
                            <li><a href="#">российские</a></li>
                            <li><a href="#">иностранные</a></li>
                          </ul>
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
                          <li>0 - 9</li>
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
                          <li>0 - 9</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-mini-slide row-mini-slide--two row-posters-mini-slide  row-mini-slide--gray">
                <div class="mini-slide-title no-hover-slide-title">ПОПУЛЯРНЫЕ</div>
                <div class="row-wall-tile">
                  <div class="wall-tile-item posters--hover">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="posters__image">
                          <img alt="" src="app/img/content/w3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w3.jpg" data-src-t="app/img/content/w3.jpg" data-src-m="app/img/content/w3.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дженнифер Лоуренс</a></div>
                      <div class="poster-title-eng">Jennifer Lawrence</div>
                      <div class="poster-number"><span class="value">6</span> шт.</div>
                    </div>
                  </div>
                  <div class="wall-tile-item posters--hover">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="posters__image">
                          <img alt="" src="app/img/content/w3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w3.jpg" data-src-t="app/img/content/w3.jpg" data-src-m="app/img/content/w3.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дженнифер Лоуренс</a></div>
                      <div class="poster-title-eng">Jennifer Lawrence</div>
                      <div class="poster-number"><span class="value">6</span> шт.</div>
                    </div>
                  </div>
                  <div class="wall-tile-item posters--hover">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="posters__image">
                          <img alt="" src="app/img/content/w3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w3.jpg" data-src-t="app/img/content/w3.jpg" data-src-m="app/img/content/w3.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дженнифер Лоуренс</a></div>
                      <div class="poster-title-eng">Jennifer Lawrence</div>
                      <div class="poster-number"><span class="value">6</span> шт.</div>
                    </div>
                  </div>
                  <div class="wall-tile-item posters--hover">
                    <div class="row-posters__image">
                      <a href="#">
                        <div class="posters__image">
                          <img alt="" src="app/img/content/w3.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w3.jpg" data-src-t="app/img/content/w3.jpg" data-src-m="app/img/content/w3.jpg">
                        </div>
                      </a>
                    </div>
                    <div class="bx-mini-slider-caption">
                      <div class="poster-title"><a href="#">Дженнифер Лоуренс</a></div>
                      <div class="poster-title-eng">Jennifer Lawrence</div>
                      <div class="poster-number"><span class="value">6</span> шт.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="scripts-list-item">
                <div class="content-page__titile">
                  <h2>НОВЫЕ</h2>
                </div>
                <div class="row-posters-page row-posters-wall posters--hover">
                  <div class="row row-tile-block">
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                    <div class="posters-item posters-item-tile">
                      <div class="row-posters__image">
                        <a href="#">
                          <div class="image-shadow-poster posters__image">
                            <img alt="" src="app/img/content/w4.jpg" class="parent responsive-image image-prewiew" data-src-d="app/img/content/w4.jpg" data-src-t="app/img/content/w4.jpg" data-src-m="app/img/content/w3.jpg">
                          </div>
                        </a>
                      </div>
                      <div class="posters-caption">
                        <div class="poster-title"><a href="#">Кэтрин Уотерстон</a></div>
                        <div class="poster-title-eng">Katherine Waterston</div>
                        <div class="poster-number"><span class="value">6</span> шт.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="outer-pagelist-more">
                  <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
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
