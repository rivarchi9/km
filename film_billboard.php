
<?php 
  $namePage = 'Билборды Фильма'; // название страницы
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
        <div class="head-content">
          <div class="info-user">
              <h1 class="pagetitle mini__pagetitle login__user">Стартрек: Бесконечность</h1>
              <h2 class="name__page">Star Trek Beyond</h2>
          </div>
          <div class="nav-content">
            <?php include "sections/film_nav.php" ?>
          </div>
        </div>
        <!-- Контент -->
        <section class=" outer-section clear outer-content">
        	<!-- Контент -->
          <content class="page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="row-billboard">
            <form action="">
              <div class="row-dropdown-input session-dropdown-input session-dropdown-input-padding">
                <select name="city" id="" class="bill__select">
                  <option value="name" selected="selected">Москва</option>
                </select>
                <select name="cinema" id="" class="bill__select"  >
                  <option value="1" selected="selected">Выберите кинотеатр</option>
                  <option value="2">Кинотеатр 2</option>
                  <option value="3">Кинотеатр 3</option>
                </select>
                <div class="row-drop-down-where">
                  <div class="drop-down-where">
                    22.07.2019
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
            </form>
            <div class="description text--gray">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer placerat turpis non ex placerat mollis. Proin arcu nulla, pretium in nisl eget, auctor venenatis nisi. In id neque in leo dignissim pellentesque. Donec felis turpis, sodales porta lorem sit amet, ornare tristique urna. Aenean tortor lacus, auctor luctus neque id, porttitor efficitur risus. Morbi augue augue, maximus sed metus et, facilisis tincidunt tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent feugiat risus quis dolor vestibulum, in rhoncus dui feugiat.
            </div>
            <div class="row-bill-result">
              <div class="bill-result-item">
                <div class="content-page__titile">
                  <h2 class="date-bill">ВТОРНИК, 26 ИЮЛЯ</h2>
                </div>
                <div class="session-table bill-session-table">
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
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
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
              </div>
              <div class="bill-result-item">
                <div class="content-page__titile">
                  <h2 class="date-bill">Среда, 26 ИЮЛЯ</h2>
                </div>
                <div class="session-table bill-session-table">
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
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
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
              </div>
              <div class="bill-result-item">
                <div class="content-page__titile">
                  <h2 class="date-bill">Четверг, 26 ИЮЛЯ</h2>
                </div>
                <div class="session-table bill-session-table">
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
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
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
              </div>
              <div class="bill-result-item">
                <div class="content-page__titile">
                  <h2 class="date-bill">Пятница, 26 ИЮЛЯ</h2>
                </div>
                <div class="session-table bill-session-table">
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
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
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
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
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="session-table-item clear">
                    <div class="session-table-item__name"><a href="#">Amigos</a></div>
                    <div class="session-table-item-list">
                      <ul class="time-list time-list--normal clear">
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li class="active open-help-in"><span>10:00</span>
                          <div class="help help--color2">Купить билет</div>
                        </li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                        <li><span>10:00</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
              </div>
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
