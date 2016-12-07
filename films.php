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
            <?php include "sections/film_nav.php" ?>
          </div>
          <div class="caption-page clear">
            <div class="caption-page-item caption-page-image">
              <div class="outer-caption-page-image image-shadow">
                <a href="app/img/content/f1.jpg" class="image-cover-parent">
                  <img src="app/img/content/f1.jpg" alt="" class="image-cover">
                  <i class="image-hover"><span>Увеличить</span></i>
                </a>
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
                        <li class="value__name">Сборы (мир):</li>
                        <li>$150 000 000</li>
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
                        <li class="value__name">Количество сезонов:</li>
                        <li>25</li>
                      </ul>
                    </li>
                    <li>
                      <ul class="value">
                        <li class="value__name">Количество серий:</li>
                        <li>125</li>
                      </ul>
                    </li>
                    <li>
                      <ul class="value">
                        <li class="value__name">Продолжительность одной серии:</li>
                        <li>50 мин</li>
                      </ul>
                    </li>
                    <li>
                      <ul class="value">
                        <li class="value__name">На экранах:</li>
                        <li>с 1995 по 2016</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="caption-page-item caption-page-dop">
              <div class="caption-page-item-inner">
                <div class="page-title--big">CОЗДАТЕЛИ</div>
                <ul class="info-item-list">
                  <li>
                    <ul class="value">
                      <li class="value__name">Режиcсер:</li>
                      <li><a href="#">Фрэнк Дарабонт</a></li>
                    </ul>
                  </li>
                  <li>
                    <ul class="value">
                      <li class="value__name">Сценарий:</li>
                      <li><a href="#">Стивен Кинг</a></li>
                      <li><a href="#">Фрэнк Дарабонт</a></li>
                    </ul>
                  </li>
                  <li>
                    <ul class="value">
                      <li class="value__name">Продюсер:</li>
                      <li><a href="#">Фрэнк Дарабонт</a></li>
                      <li><a href="#">Дэвид Валдес</a></li>
                    </ul>
                  </li>
                  <li>
                    <ul class="value">
                      <li class="value__name">Продюсер:</li>
                      <li><a href="#">Фрэнк Дарабонт</a></li>
                      <li><a href="#">Дэвид Валдес</a></li>
                    </ul>
                  </li>
                  <li>
                    <ul class="value">
                      <li class="value__name">Продюсер:</li>
                      <li><a href="#">Фрэнк Дарабонт</a></li>
                      <li><a href="#">Дэвид Валдес</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="caption-page-item-inner">
                <div class="page-title--big">АКТЕРЫ</div>
                <div class="row-tile-preview clear">
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Фрэнк Дарабонт</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                  <div class="tile-preview-item clear">
                    <a href="#" class="tile-preview-item__image-link">
                      <img src="app/img/content/mp.jpg" alt="" class="tile-preview-item__image">
                    </a>
                    <div class="tile-preview-item__text">
                      <a href="#">Том Хэнкс</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="band-nav">
            <ul class="band-nav-list clear">
              <li class="band-nav__icon my-films"><a href="#"><span>Мои фильмы</span></a></li>
              <li class="band-nav__icon my-add-info"><a href="#"><span>Добавить информацию</span></a></li>
              <li class="band-nav__icon my-massage-error"><a href="#"><span>Сообщить об ошибке</span></a></li>
            </ul>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-raiting clear">
              <div class="row-raiting-item row-raiting--left">
                <ul class="raiting-item-list clear" data-type="kinomania">
                  <li class="raiting__value">9.1</li>
                  <li>
                    <ul>
                      <li class="raiting__name">Рейтинг «Киномании»</li>
                      <li class="raiting__number">Оценок: <span class="number">34</span></li>
                    </ul>
                  </li>
                </ul>
                <ul class="raiting-item-list clear" data-type="other">
                  <li class="raiting__value">8.5</li>
                  <li>
                    <ul>
                      <li class="raiting__name">Рейтинг IMDb</li>
                      <li class="raiting__number">Оценок: <span class="number">34</span></li>
                    </ul>
                  </li>
                </ul>
                <ul class="raiting-item-list clear" data-type="other">
                  <li class="raiting__value">9.1</li>
                  <li>
                    <ul>
                      <li class="raiting__name">Рейтинг «КиноПоиска»</li>
                      <li class="raiting__number">Оценок: <span class="number">34</span></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="row-raiting-item row-raiting--right">
                <div class="row-raiting-star">
                  <div class="raiting__name">Поставьте свою оценку </div>
                </div>
                <div class="row-raiting-star">
                  <div class="inner-raiting-star" data-fixed="fixed">
                    <span class="raiting-star__title">Ваш рейтинг</span>
                    <ul class="raiting-list-star clear">
                      <li class="star__item" data-value="1"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="2"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="3"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="4"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="5"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="6"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="7" data-active="select"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="8"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="9"><i class="icon__star"></i></li>
                      <li class="star__item" data-value="10"><i class="icon__star"></i></li>
                    </ul>
                    <span class="raiting-number"><span class="value">0</span> из 10</span>
                    <span class="result-star"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-session">
              <div class="row-tabs">
                <ul class="tabs-list clear">
                  <li class="tabs-list-name"><span>СМОТРЕТЬ</span></li>
                  <li class="active" data-type-sliderGroup="smotr" data-type-sliderButton="1"><a><span>В КИНО</span></a></li>
                  <li class="" data-type-sliderGroup="smotr" data-type-sliderButton="2"><a><span>ОНЛАЙН</span></a></li>
                  <li class="" data-type-sliderGroup="smotr" data-type-sliderButton="3"><a><span>НА ТВ</span></a></li>
                </ul>
              </div>
              <div class="mobile__select my-select">
                <span class="result">В КИНО</span>
                <ul class="result-list">
                  <li class="active" data-type-sliderGroup="smotr" data-type-sliderButton="1"><a><span>В КИНО</span></a></li>
                  <li class="" data-type-sliderGroup="smotr" data-type-sliderButton="2"><a><span>ОНЛАЙН</span></a></li>
                  <li class="" data-type-sliderGroup="smotr" data-type-sliderButton="3"><a><span>НА ТВ</span></a></li>
                </ul>
              </div>
              <div class="row-session-table active" data-type-sliderGroup="smotr" data-type-sliderElem="1">
                <form action="">
                  <div class="row-dropdown-input session-dropdown-input">
                    <select name="city" id="" class="">
                      <option value="name" selected="selected">Москва</option>
                    </select>
                    <select name="cinema" id="" class=""  >
                      <option value="1">Кинотеатр 1</option>
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
                <div class="session-table-title">Сеансы</div>
                <div class="session-table">
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
                </div>
                <div class="outer-pagelist-more">
                  <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                </div>
              </div>
              <div class="row-session-table row-session-tab-table " data-type-sliderGroup="smotr" data-type-sliderElem="2">
                <div class="tab-table-outer">
                  <div class="tab-table-head clear">
                    <div class="tab-table-col">Канал</div>
                    <div class="tab-table-col">Дата</div>
                    <div class="tab-table-col">Время</div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#">Первый</a></div>
                    <div class="tab-table-col">28 сентября, среда </div>
                    <div class="tab-table-col">20:35</div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#">Первый</a></div>
                    <div class="tab-table-col">28 сентября, среда </div>
                    <div class="tab-table-col">20:35</div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#">Первый</a></div>
                    <div class="tab-table-col">28 сентября, среда </div>
                    <div class="tab-table-col">20:35</div>
                  </div>
                </div>
              </div>
              <div class="row-session-table row-session-tab-table row-session-logo-table " data-type-sliderGroup="smotr" data-type-sliderElem="3">
                <div class="tab-table-outer">
                  <div class="tab-table-head clear">
                    <div class="tab-table-col">Онлайн-кинотеатр</div>
                    <div class="tab-table-col">Цена</div>
                    <div class="tab-table-col"></div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#" class="table-logo">
                      <img src="app/img/icon/logo/i1.png" alt="" class="table-logo-1">
                    </a></div>
                    <div class="tab-table-col tab-table-price">249 руб.
                    <a href="#" class="table-button-mobile button button2">СМОТРЕТЬ</a>
                    </div>
                    <div class="tab-table-col">
                      <a href="#" class="button button2">СМОТРЕТЬ</a>
                    </div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#" class="table-logo">
                      <img src="app/img/icon/logo/i2.png" alt="" class="table-logo-1">
                    </a></div>
                    <div class="tab-table-col tab-table-price">249 руб.
                    <a href="#" class="table-button-mobile button button2">СМОТРЕТЬ</a>
                    </div>
                    <div class="tab-table-col">
                      <a href="#" class="button button2">СМОТРЕТЬ</a>
                    </div>
                  </div>
                  <div class="tab-table-row clear">
                    <div class="tab-table-col tab-table-col-name"><a href="#" class="table-logo">
                      <img src="app/img/icon/logo/i3.png" alt="" class="table-logo-1">
                    </a></div>
                    <div class="tab-table-col tab-table-price">249 руб.
                    <a href="#" class="table-button-mobile button button2">СМОТРЕТЬ</a>
                    </div>
                    <div class="tab-table-col">
                      <a href="#" class="button button2">СМОТРЕТЬ</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-list-post-item">
                <div class="list-post-item">
                  <div class="list-post-item-title">
                    О ФИЛЬМЕ
                  </div>
                  <div class="list-post-item-content">
                    По мотивам произведения Стивена Кинга “Зеленая Миля”. Повествование в картине ведется от лица Пола Эджкомба, который, находясь в доме для престарелых, рассказывает своей подруге Эллен Коннели историю, произошедшую с ним 60 лет назад, когда он работал главным охранником в блоке смертников тюрьмы “Холодная гора”. Эджкомб (Tom Hanks) должен наблюдать за убийцами, приговоренными к казни на электрическом стуле, к которому ведет коридор, застланный зеленым покрытием, и из-за этого прозванный “Зеленая миля”. Он слегка циничен, но за долгие годы работы в тюрьме, каждый день наблюдая за тем, как люди живут и умирают, он уже готов потерять веру и рассудок. Он все чаще начинает задаваться вопросом “Имеет ли он право казнить людей ради зарплаты?”. Имеет ли он право брать на себя тяжкую роль бога? Но однажды на его жизненном пути встречается осужденный на смерть за убийство двух детей Джон Коффей (Michael Duncan). Коффей - человек огромного роста, у которого кулаки размером с вафельницу. Но несмотря на свой устрашающий вид он испуган как ребенок. Он боится спать ночью в камере без включенного ночника. К тому же выясняется, что он обладает особой мистической способностью к излечению людей. И Эджкомб и другие охранники теперь сочувствуют Джону и начинают расследование. Они убеждены, что этот сильный человек подобно Иисусу Христу был обвинен несправедливо и осужден на смерть.
                    <div data-type-openclose-element="hide-text" class="hide-text">
                      <p>Том Хэнкс родился 9 июля 1956 года в г. Конкорд, штат Калифорния, США. Его родители развелись, и большую часть детства Том провел с отцом, поваром по профессии. Они часто переезжали из города в город, мальчику постоянно приходилось привыкать к новым школам, новым знакомым, новым подругам отца.</p>
                      <p>Участвовать в театральных постановках Хэнкс начал, еще учась в школе. Для того, чтобы овладеть актерским ремеслом более профессионально, он поступил на отделение драмы в Калифорнийский Университет. 3 сезона Хэнкса приглашали играть на ежегодном “Шекспировском фестивале”, проходившем в Огайо, и Том даже получил там несколько театральных наград.</p>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before" data-type-openclose-button="hide-text"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
                <div class="list-post-item list-post-item-facts">
                  <div class="list-post-item-title">
                    ИНТЕРЕСНЫЕ ФАКТЫ О ФИЛЬМЕ «ЗЕЛЕНАЯ МИЛЯ»
                  </div>
                  <div class="list-post-item-content">
                    <p>Фильм снят по мотивам романа Стивена Кинга «Зеленая миля» (The Green Mile, 1996).</p>
                    <p>В фильме снялись сразу тридцать мышей, которые играют Мистера Джинглса. Все мыши были названы в честь актёров и членов съёмочной группы.</p>
                    <p>Съёмки проходили в США, в штатах Северная Каролина и Теннесси.</p>
                    <p>Роман писался частями, и вначале издавался отдельными брошюрами.</p>
                    <p>«Зеленая миля» Стивена Кинга получила премию «Stoker» в номинации «Лучший роман 1996-го года».</p>
                    <div data-type-openclose-element="hide-text" class="hide-text">
                      <p>Фильм снят по мотивам романа Стивена Кинга «Зеленая миля» (The Green Mile, 1996).</p>
                      <p>В фильме снялись сразу тридцать мышей, которые играют Мистера Джинглса. Все мыши были названы в честь актёров и членов съёмочной группы.</p>
                      <p>Съёмки проходили в США, в штатах Северная Каролина и Теннесси.</p>
                      <p>Роман писался частями, и вначале издавался отдельными брошюрами.</p>
                      <p>«Зеленая миля» Стивена Кинга получила премию «Stoker» в номинации «Лучший роман 1996-го года».</p>
                    </div>
                  </div>
                  <div class="outer-pagelist-more">
                    <span class="pagelist-more sprite-before" data-type-openclose-button="hide-text"><span class="pagelist-more__text">Еще</span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-black">
              <div class="inner-black section-video">
                <div class="inner-header-pagelist">
                  <div class="pagelist-title-black ">Трейлеры <span class="number--opacity">5</span></div>
                  <div class="section-video section-black-video">
                  <!-- <div class="video-prewiew__play ytp-large-play-button ytp-button"></div> -->
                  <div class="outer-trailer-item">
                    <div class="">
                      <div class="trailer-list-item">
                        <div class="video-prewiew">
                          <img alt="" src="/app/img/content/t1.jpg" class="responsive-image video-prewiew__item" data-src-d="/app/img/content/t1.jpg" data-src-t="/app/img/content/t1.jpg" data-src-m="/app/img/content/t1.jpg">
                          <!-- <iframe class="video" width="100%" height="100%" src="https://www.youtube.com/embed/4XmgYhOiKUs" frameborder="0" allowfullscreen></iframe> -->
                        </div>
                        <div class="head-desc clear">
                          <div class="trailer__title">
                            <p class="title"><a href="#">Трейлер №2 (рус)</a></p>
                            <p class="create__trailer-date">Добавлен: 10.06.2013 18:56</p>
                          </div>

                          <div class="item item2">
                            <span class="button button3"><i class="item__icon sprite"></i><span class="number">5</span>Комментировать</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="download download-trailer">
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
                  <div>
                    <a href="#" class="button button2">ВСЕ ТРЕЙЛЕРЫ</a>
                  </div>
                </div>
              </div>

              </div>
            </div>
            <div class="slider-load row-mini-slide row-mini-slide--gray">
              <div class="mini-slide-title"><a href="#" class="no-link">КАДРЫ <span class="number">38</span></a></div>
              <div class="row-bx-mini-slider">
                <div class="bx-mini-slider">
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                  <div class="slide"><img src="app/img/content/ps1.jpg"></div>
                </div>
              </div>
              <div class="all-slide">
                <div class="all-slide-item">
                  <a href="#">ВСЕ КАДРЫ</a>
                </div>
              </div>
            </div>
            <div class="pagelist-social no-mobile">
              <div class="outer-social clear">
                <ul class="social-list social-list--horizontal">
                  <li class="vk"><a href="#"><span class="number">856</span></a></li>
                  <li class="fb"><a href="#"><span class="number">856</span></a></li>
                  <li class="tw"><a href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="outer-other">
              <section class="inner-content outer-content-item parent-sticker outer-section-mini-prewiew">
                <div class="sticker">
                  <div class="sticker-item">НОВОСТИ О ФИЛЬМЕ</div>
                </div>
                <div class="section-mini-prewiew section-mini-prewiew--yellow ">
                  <div class="outer-section-mini-prewiew-item clear">
                    <div class="outer-pagelist-yellow">
                      <div class="pagelist-prewiew-item">
                        <div class="section-mini-prewiew-wrap-item">
                          <div class="section-mini-prewiew-item">
                            <a href="#"><img alt="" src="/app/img/content/3439.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/3439.jpg" data-src-t="/app/img/content/3439.jpg" data-src-m="/app/img/content/3439.jpg"></a>
                            <div class="section-mini-prewiew-item-text">
                              <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                              <a href="#" class="content-item-info-comment sprite-before">3</a>
                            </div>
                            <div class="section-mini-prewiew-item-desc">
                              <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pagelist-prewiew-item">
                        <div class="section-mini-prewiew-wrap-item">
                          <div class="section-mini-prewiew-item">
                            <a href="#"><img alt="" src="/app/img/content/3439.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/3439.jpg" data-src-t="/app/img/content/3439.jpg" data-src-m="/app/img/content/3439.jpg"></a>
                            <div class="section-mini-prewiew-item-text">
                              <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                              <a href="#" class="content-item-info-comment sprite-before">3</a>
                            </div>
                            <div class="section-mini-prewiew-item-desc">
                              <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pagelist-prewiew-item">
                        <div class="section-mini-prewiew-wrap-item">
                          <div class="section-mini-prewiew-item">
                            <a href="#"><img alt="" src="/app/img/content/3439.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/3439.jpg" data-src-t="/app/img/content/3439.jpg" data-src-m="/app/img/content/3439.jpg"></a>
                            <div class="section-mini-prewiew-item-text">
                              <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                              <a href="#" class="content-item-info-comment sprite-before">3</a>
                            </div>
                            <div class="section-mini-prewiew-item-desc">
                              <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="full-comments full-comments-reviews">
              <div class="full-comments-head">
                <div class="full-comments-text"><a href="#">РЕЦЕНЗИИ</a> <span class="number">2</span></div>
              </div>
              <div class="parent-author-full-comments row-author-full-comments kinomania">
                <div class="author-full-comments-image">
                  <a href="#"><img src="app/img/content/ra.jpg" alt=""></a>
                </div>
                <div class="author-full-comments-content">
                  <div class="author-comments-name author-reviews-name"><a href="#">Alex Gor</a></div>
                  <div class="author-comments-text">
                    <p>Это уже не первая работа Фрэнка Дарабонта по произведению Стивена Кинга. Мы все помним его прошлую картину - “Побег из Шоушенка”, тепло встреченную критиками, но на этот раз Дарабонт решил попробовать силы на одном из лучших произведений мастера. Незачем говорить, что работа очень ответственная, т.к. фильм должен соответствовать высокому уровню романа, иначе поклонники Кинга (а их не мало) его не простят, поэтому главное и самое важное, что необходимо было сделать, так это хотя бы не испортить шикарное произведение, и фильм бы уже получился. Дарабонту это удалось: к работе он подошел серьезно, и картина проработана до мельчайших деталей.</p>
                    <p>Лента построена, как воспоминания бывшего тюремщика /Том Хэнкс/ из команды приведения в исполнение смертных приговоров. В этих воспоминаниях описываются события 35 года, когда в тюрьму поступил особый заключенный. Весь фильм - это по сути последние дни заключенных перед казнью, наполненные переживаниями и муками совести, но в то же время есть и такие, которые не жалеют о содеянном, т.е. в картине речь идет про общечеловеческие ценности и отношения между людьми, последние минуты их жизни.</p>
                    <p>В целом Дарабонт поддержал свою марку на высоком уровне, доказав, что серьезные фильмы еще выпускают в Голливуде. Остается только ждать его следующей работы, но самое главное, что бы хватило терпения также качественно подойти к ней и не сорваться, выпустив ее в прокат сырой и недоделанной. Ценно и то, что Дарабонт не побоялся снять ленту на 3 часа и не повырезал различные эпизоды в угоду кому бы то ни было. Может кто-то считает, что фильм слишком затянут, но как по мне, то от этого картина только выигрывает и атмосфера внутреннего и нервного напряжения сохраняется все время. Кто не видел этого фильма - очень советую: он для самой широкой аудитории. Такое кино не пропускают.</p>
                  </div>
                  <div class="author-comments-info clear">
                    <ul class="author-comment-info-list">
                      <li class=" reply__like"><a href="#"><span>Мне нравится</span>
                        <i class="reply__icon reply__like_icon"></i>
                        <span class="value">3</span>
                      </a>
                      </li>
                      <li class="reply__comments">
                        <a href="#">
                          <span>Комментировать</span>
                          <i class="reply__icon reply__comment_icon"></i>
                          <span class="value">3</span>
                        </a>
                      </li>
                      <li class="date">29 сентября 2016, 23:07</li>
                    </ul>
                  </div>
                </div>
                <div class="sticker-mini">РЕЦЕНЗИЯ КИНОМАНИИ</div>
              </div>
              <div class="parent-author-full-comments row-author-full-comments">
                <div class="author-full-comments-image">
                  <a href="#"><img src="app/img/content/ra.jpg" alt=""></a>
                </div>
                <div class="author-full-comments-content">
                  <div class="author-comments-name author-reviews-name"><a href="#">Alex Gor</a></div>
                  <div class="author-comments-text">
                    <p>Это уже не первая работа Фрэнка Дарабонта по произведению Стивена Кинга. Мы все помним его прошлую картину - “Побег из Шоушенка”, тепло встреченную критиками, но на этот раз Дарабонт решил попробовать силы на одном из лучших произведений мастера. Незачем говорить, что работа очень ответственная, т.к. фильм должен соответствовать высокому уровню романа, иначе поклонники Кинга (а их не мало) его не простят, поэтому главное и самое важное, что необходимо было сделать, так это хотя бы не испортить шикарное произведение, и фильм бы уже получился. Дарабонту это удалось: к работе он подошел серьезно, и картина проработана до мельчайших деталей.</p>
                  </div>
                  <div class="author-comments-info clear">
                    <ul class="author-comment-info-list">
                      <li class=" reply__like"><a href="#"><span>Мне нравится</span>
                        <i class="reply__icon reply__like_icon"></i>
                        <span class="value">3</span>
                      </a>
                      </li>
                      <li class="reply__comments">
                        <a href="#">
                          <span>Комментировать</span>
                          <i class="reply__icon reply__comment_icon"></i>
                          <span class="value">3</span>
                        </a>
                      </li>
                      <li class="date">29 сентября 2016, 23:07</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="parent-author-full-comments row-author-full-comments">
                <div class="author-full-comments-image">
                  <a href="#"><img src="app/img/content/ra.jpg" alt=""></a>
                </div>
                <div class="author-full-comments-content">
                  <div class="author-comments-name author-reviews-name"><a href="#">Alex Gor</a></div>
                  <div class="author-comments-text">
                    <p>Это уже не первая работа Фрэнка Дарабонта по произведению Стивена Кинга. Мы все помним его прошлую картину - “Побег из Шоушенка”, тепло встреченную критиками, но на этот раз Дарабонт решил попробовать силы на одном из лучших произведений мастера. Незачем говорить, что работа очень ответственная, т.к. фильм должен соответствовать высокому уровню романа, иначе поклонники Кинга (а их не мало) его не простят, поэтому главное и самое важное, что необходимо было сделать, так это хотя бы не испортить шикарное произведение, и фильм бы уже получился. Дарабонту это удалось: к работе он подошел серьезно, и картина проработана до мельчайших деталей.</p>
                  </div>
                  <div class="author-comments-info clear">
                    <ul class="author-comment-info-list">
                      <li class=" reply__like"><a href="#"><span>Мне нравится</span>
                        <i class="reply__icon reply__like_icon"></i>
                        <span class="value">3</span>
                      </a>
                      </li>
                      <li class="reply__comments">
                        <a href="#">
                          <span>Комментировать</span>
                          <i class="reply__icon reply__comment_icon"></i>
                          <span class="value">3</span>
                        </a>
                      </li>
                      <li class="date">29 сентября 2016, 23:07</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="full-comments-head full-comments-foot">
                <div class="full-comments-text"><a href="#"><span>Все рецензии (113)</span></a></div>
              </div>
            </div>
            <div class="row-pagelist-ligin">
              <div class="pagelist__title pagelist-ligin__title">ОТПРАВИТЬ РЕЦЕНЗИЮ</div>
              <div class="pagelist-ligin">
                <div class="pagelist-ligin__item">
                  <div class="pagelist-ligin__social">
                    <ul class="pagelist-ligin__social-list">
                      <li class="vk"><a href="#"></a></li>
                      <li class="fb"><a href="#"></a></li>
                      <li class="tw"><a href="#"></a></li>
                    </ul>
                  </div>
                  <div class="pagelist-ligin-text">
                    <a href="#">Авторизуйтесь</a> или <a href="#">зарегистрируйтесь</a>,<br>чтобы оставлять комментарии
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
