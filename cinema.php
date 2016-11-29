<?php
  $namePage = 'Кинотеатр'; // название страницы
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
            <h1 class="pagetitle mini__pagetitle">KinoStar Нью-Йорк</h1>
          </div>
          <div class="row-cinema-info clear">
            <div class="cinema-info">
              <div class="cinema-info-inner">
                <div class="cinema-info-item">
                  <label>Город</label>
                  <span>Москва</span>
                </div>
                <div class="cinema-info-item">
                  <label>Адрес</label>
                  <span>14 км МКАД, ТЦ «МЕГА Белая дача»</span>
                </div>
                <div class="cinema-info-item">
                  <label>Метро</label>
                  <span>Кузьминки</span>
                  <span>Люблино</span>
                </div>
                <div class="cinema-info-item">
                  <label>Сайт</label>
                  <a href="http://www.cinemapark.ru/">http://www.cinemapark.ru/</a>
                </div>
                <div class="cinema-info-item">
                  <label>Телефоны</label>
                  <span>+7 (495) 644-41-11</span>
                </div>
              </div>
              <div class="parent-cinema-date">
                <div class="row-cinema-date clear">
                  <div class="cinema-date-item">
                    <div class="cinema-date">ВТОРНИК, 16 АВГУСТА</div>
                  </div>
                  <div class="cinema-date-item cinema-date-item--right">
                    <div class="row-drop-down-where">
                      <div class="drop-down-where">
                        Сегодня 22.07.2019
                      </div>
                      <div class="outer-calendar drop-down-where-calendar default">
                        <div class="datepicker datepicker-dropdown dropdown-menu datepicker-orient-left datepicker-orient-bottom" style="top: 40px; right: 0px; display: block;">
                          <div class="datepicker-days" style="display: block;">
                              <table class=" table-condensed">
                                  <thead>
                                      <tr>
                                          <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                      </tr>
                                      <tr class="date">
                                          <th class="prev" style="visibility: visible;">«</th>
                                          <th colspan="5" class="datepicker-switch">Октябрь 2016</th>
                                          <th class="next" style="visibility: visible;">»</th>
                                      </tr>
                                      <tr>
                                          <th class="dow">Пн</th>
                                          <th class="dow">Вт</th>
                                          <th class="dow">Ср</th>
                                          <th class="dow">Чт</th>
                                          <th class="dow">Пт</th>
                                          <th class="dow">Сб</th>
                                          <th class="dow">Вс</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cinema-map">
              <div id="YMapsID"  map-cardinate="37.84" map-cardinateTwo="55.65" map-zoom='11'></div>
            </div>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-reviews-list">
              <div class="row-cinema">
                <div class="session-table">
                  <div class="session-table-item clear">
                    <div class="cinema-table-item__name">
                      <div class="list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/b3.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="row-table-bill-info">
                        <div class="name"><a href="#">ОХОТНИКИ ЗА ПРИВИДЕНИЯМИ</a></div>
                        <div class="name__eng">GHOSTBUSTERS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">США</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="cinema-table-item__name">
                      <div class="list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/b3.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="row-table-bill-info">
                        <div class="name"><a href="#">ОХОТНИКИ ЗА ПРИВИДЕНИЯМИ</a></div>
                        <div class="name__eng">GHOSTBUSTERS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">США</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="cinema-table-item__name">
                      <div class="list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/b3.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="row-table-bill-info">
                        <div class="name"><a href="#">ОХОТНИКИ ЗА ПРИВИДЕНИЯМИ</a></div>
                        <div class="name__eng">GHOSTBUSTERS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">США</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="cinema-table-item__name">
                      <div class="list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/b3.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="row-table-bill-info">
                        <div class="name"><a href="#">ОХОТНИКИ ЗА ПРИВИДЕНИЯМИ</a></div>
                        <div class="name__eng">GHOSTBUSTERS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">США</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                      </ul>
                    </div>
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
