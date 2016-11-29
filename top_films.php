
<?php 
  $namePage = 'Топ Фильмов'; // название страницы
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
          <div class="row-top-films">
              <h1 class="pagetitle">100 ЛУЧШИХ ФИЛЬМОВ</h1>
              <div class="description">
                Рейтинг составлен на основе оценок читателей Киномании.
              </div>
              <div class="row-top">
                <div class="top-forms">
                  <form action="">
                    <div class="row-dropdown-input session-dropdown-input">
                      <select name="ganre" id="" class="">
                        <option value="name" selected="selected">Выберите жанр</option>
                      </select>
                      <select name="city" id="" class=""  >
                        <option value="1" selected="selected">Выберите страну</option>
                        <option value="2">Россия</option>
                      </select>
                      <select name="years-two" id="" class="">
                        <option value="name" selected="selected">По десятилетиям</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row-table-top">
                <div class="session-table">
                  <div class="session-table-item table-top-item clear">
                    <div class="table-top-info-one">
                      <div class="table-number">1</div>
                      <div class="session-table-item__name">
                        <div class="table-top-title"><a href="#">Побег из Шоушенка (1994)</a></div>
                        <div class="table-top-title-eng">The Shawshank Redemption</div>
                      </div>
                    </div>
                    <div class="table-top-info">
                      <div class="row-button-list">
                        <a href="#" class="button button2 button--mini">КУПИТЬ БИЛЕТ</a>
                      </div>
                      <span class="table-top-info-text table-top-info-raiting">9,198</span>
                      <div class="table-top-info-text table-top-info-views open-help-in">387 670
                        <div class="help help--gray">Количество оценок</div>
                      </div>
                      <div class="main-folder-icon">
                        <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                          <a class="folder__icon icon"></a>
                          <div class="hint">Добавить в Избранное</div>
                          <div class="row-dropdown-folder">
                            <div class="dropdown-folder dropdown-folder-content">
                              <div class="dropdown-folder-title"><span>В избранное</span></div>
                              <ul class="dropdown-folder-list">
                                <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
                              </ul>
                            </div>
                            <div class="dropdown-folder dropdown-folder-setting">
                              <a href="#" class="clear">
                                <!-- <i class="setting-icon"></i> -->
                                <span>Управление папками</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="session-table-item table-top-item clear">
                    <div class="table-top-info-one">
                      <div class="table-number">2</div>
                      <div class="session-table-item__name">
                        <div class="table-top-title"><a href="#">Побег из Шоушенка (1994)</a></div>
                        <div class="table-top-title-eng">The Shawshank Redemption</div>
                      </div>
                    </div>
                    <div class="table-top-info">
                      <div class="row-button-list">
                        <a href="#" class="button button7 button--mini animated">СМОТРЕТЬ ОНЛАЙН</a>
                        <a href="#" class="button button2 button--mini">КУПИТЬ БИЛЕТ</a>
                      </div>
                      <span class="table-top-info-text table-top-info-raiting">9,198</span>
                      <div class="table-top-info-text table-top-info-views open-help-in">387 670
                        <div class="help help--gray">Количество оценок</div>
                      </div>
                      <div class="main-folder-icon">
                        <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                          <a class="folder__icon icon"></a>
                          <div class="hint">Добавить в Избранное</div>
                          <div class="row-dropdown-folder">
                            <div class="dropdown-folder dropdown-folder-content">
                              <div class="dropdown-folder-title"><span>В избранное</span></div>
                              <ul class="dropdown-folder-list">
                                <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
                              </ul>
                            </div>
                            <div class="dropdown-folder dropdown-folder-setting">
                              <a href="#" class="clear">
                                <!-- <i class="setting-icon"></i> -->
                                <span>Управление папками</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="session-table-item table-top-item clear">
                    <div class="table-top-info-one">
                      <div class="table-number">3</div>
                      <div class="session-table-item__name">
                        <div class="table-top-title"><a href="#">Побег из Шоушенка (1994)</a></div>
                        <div class="table-top-title-eng">The Shawshank Redemption</div>
                      </div>
                    </div>
                    <div class="table-top-info">
                      <span class="table-top-info-text table-top-info-raiting">9,198</span>
                      <div class="table-top-info-text table-top-info-views open-help-in">387 670
                        <div class="help help--gray">Количество оценок</div>
                      </div>
                      <div class="main-folder-icon">
                        <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                          <a class="folder__icon icon"></a>
                          <div class="hint">Добавить в Избранное</div>
                          <div class="row-dropdown-folder">
                            <div class="dropdown-folder dropdown-folder-content">
                              <div class="dropdown-folder-title"><span>В избранное</span></div>
                              <ul class="dropdown-folder-list">
                                <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
                              </ul>
                            </div>
                            <div class="dropdown-folder dropdown-folder-setting">
                              <a href="#" class="clear">
                                <!-- <i class="setting-icon"></i> -->
                                <span>Управление папками</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="session-table-item table-top-item clear">
                    <div class="table-top-info-one">
                      <div class="table-number">4</div>
                      <div class="session-table-item__name">
                        <div class="table-top-title"><a href="#">Побег из Шоушенка (1994)</a></div>
                        <div class="table-top-title-eng">The Shawshank Redemption</div>
                      </div>
                    </div>
                    <div class="table-top-info">
                      <span class="table-top-info-text table-top-info-raiting">9,198</span>
                      <div class="table-top-info-text table-top-info-views open-help-in">387 670
                        <div class="help help--gray">Количество оценок</div>
                      </div>
                      <div class="main-folder-icon">
                        <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                          <a class="folder__icon icon"></a>
                          <div class="hint">Добавить в Избранное</div>
                          <div class="row-dropdown-folder">
                            <div class="dropdown-folder dropdown-folder-content">
                              <div class="dropdown-folder-title"><span>В избранное</span></div>
                              <ul class="dropdown-folder-list">
                                <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
                              </ul>
                            </div>
                            <div class="dropdown-folder dropdown-folder-setting">
                              <a href="#" class="clear">
                                <!-- <i class="setting-icon"></i> -->
                                <span>Управление папками</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="session-table-item table-top-item clear">
                    <div class="table-top-info-one">
                      <div class="table-number">123</div>
                      <div class="session-table-item__name">
                        <div class="table-top-title"><a href="#">Побег из Шоушенка (1994)</a></div>
                        <div class="table-top-title-eng">The Shawshank Redemption</div>
                      </div>
                    </div>
                    <div class="table-top-info">
                      <span class="table-top-info-text table-top-info-raiting">9,198</span>
                      <div class="table-top-info-text table-top-info-views open-help-in">387 670
                        <div class="help help--gray">Количество оценок</div>
                      </div>
                      <div class="main-folder-icon">
                        <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                          <a class="folder__icon icon"></a>
                          <div class="hint">Добавить в Избранное</div>
                          <div class="row-dropdown-folder">
                            <div class="dropdown-folder dropdown-folder-content">
                              <div class="dropdown-folder-title"><span>В избранное</span></div>
                              <ul class="dropdown-folder-list">
                                <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
                              </ul>
                            </div>
                            <div class="dropdown-folder dropdown-folder-setting">
                              <a href="#" class="clear">
                                <!-- <i class="setting-icon"></i> -->
                                <span>Управление папками</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="outer-pagelist-more">
                <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Следующие 20 фильмов</span></span>
              </div>
              <!-- ww -->
              <section class="no-mobile inner-content outer-content-item parent-sticker outer-section-mini-prewiew art-yellow">
                <div class="section-mini-prewiew section-mini-prewiew--yellow section-mini-prewiew-two">
                  <div class="outer-section-mini-prewiew-item clear">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/b2.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg">
                        </a>
                      </div>
                      <div class="section-mini-prewiew-item-text">
                        <a href="#">5 лучших мелодрам, финал которых вас удивит</a>
                      </div>
                      <div class="section-mini-prewiew-item-text prewiew-item-art-text">
                        «Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. 
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/b2.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg">
                        </a>
                      </div>
                      <div class="section-mini-prewiew-item-text">
                        <a href="#">5 лучших мелодрам, финал которых вас удивит</a>
                      </div>
                      <div class="section-mini-prewiew-item-text prewiew-item-art-text">
                        «Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. 
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/b2.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg">
                        </a>
                      </div>
                      <div class="section-mini-prewiew-item-text">
                        <a href="#">5 лучших мелодрам, финал которых вас удивит</a>
                      </div>
                      <div class="section-mini-prewiew-item-text prewiew-item-art-text">
                        «Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sticker">
                  <div class="sticker-item">ПОДБОРКИ ОТ КИНОМАНИИ</div>
                </div>
              </section>
              <div class="row-outside outside-top bg-color-one row-outside-art clear">
                <div class="inner-outside parent-sticker">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/po6.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/po6.jpg" data-src-t="/app/img/content/po6.jpg" data-src-m="/app/img/content/po6.jpg">
                        </a>
                      </div>
                      <div class="art-title">
                        <a href="#">Хэллоуин Мэдеи</a>
                      </div>
                      <div class="art-desc top-desc">
                        Jack Reacher: Never Go Back
                      </div>
                      <div class="row-art-list">
                        <ul class="art-list">
                          <li>
                            <ul>
                              <li class="art-list-name">Режиcсер:</li>
                              <li><a href="#">Вуди Аллен</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li class="art-list-name">В ролях:</li>
                              <li><a href="#">Андре Тайнси</a></li>
                              <li><a href="#">Норман Роуз</a></li>
                              <li><a href="#">Rebecca Potok</a></li>
                              <li><a href="#">Jacob Witkin</a></li>
                              <li><a href="#">Гленн Уильямс</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <a href="#" class="button button2 button--mini">КУПИТЬ БИЛЕТ</a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/po6.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/po6.jpg" data-src-t="/app/img/content/po6.jpg" data-src-m="/app/img/content/po6.jpg">
                        </a>
                      </div>
                      <div class="art-title">
                        <a href="#">Хэллоуин Мэдеи</a>
                      </div>
                      <div class="art-desc top-desc">
                        Jack Reacher: Never Go Back
                      </div>
                      <div class="row-art-list">
                        <ul class="art-list">
                          <li>
                            <ul>
                              <li class="art-list-name">Режиcсер:</li>
                              <li><a href="#">Вуди Аллен</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li class="art-list-name">В ролях:</li>
                              <li><a href="#">Андре Тайнси</a></li>
                              <li><a href="#">Норман Роуз</a></li>
                              <li><a href="#">Rebecca Potok</a></li>
                              <li><a href="#">Jacob Witkin</a></li>
                              <li><a href="#">Гленн Уильямс</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <a href="#" class="button button2 button--mini">КУПИТЬ БИЛЕТ</a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="image-shadow">
                        <a href="#">
                          <img alt="" src="/app/img/content/po6.jpg" class="responsive-image image-prewiew" data-src-d="/app/img/content/po6.jpg" data-src-t="/app/img/content/po6.jpg" data-src-m="/app/img/content/po6.jpg">
                        </a>
                      </div>
                      <div class="art-title">
                        <a href="#">Хэллоуин Мэдеи</a>
                      </div>
                      <div class="art-desc top-desc">
                        Jack Reacher: Never Go Back
                      </div>
                      <div class="row-art-list">
                        <ul class="art-list">
                          <li>
                            <ul>
                              <li class="art-list-name">Режиcсер:</li>
                              <li><a href="#">Вуди Аллен</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li class="art-list-name">В ролях:</li>
                              <li><a href="#">Андре Тайнси</a></li>
                              <li><a href="#">Норман Роуз</a></li>
                              <li><a href="#">Rebecca Potok</a></li>
                              <li><a href="#">Jacob Witkin</a></li>
                              <li><a href="#">Гленн Уильямс</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <a href="#" class="button button2 button--mini">КУПИТЬ БИЛЕТ</a>
                    </div>
                  </div>
                  <div class="sticker">
                    <div class="sticker-item">СЕЙЧАС В КИНОТЕАТРАХ</div>
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
