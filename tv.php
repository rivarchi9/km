<?php
  $namePage = 'ТВ'; // название страницы
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
        <div class="head-content">
          <div class="info-user head-two">
            <h1 class="pagetitle">ТВ</h1>
            <div class="row-tv-slider">
              <div class="bx-tv-slider">
                <div class="slide">
                  <a href="">
                  <div class="bx-tv-slider__image"><img src="app/img/content/bs1.jpg" alt=""></div>
                  <div class="bx-tv-slider__caption">
                    <div class="item1">Терминатор: Да придёт спаситель</div>
                    <div class="item2"><span class="tv-time">11:20</span>, <span class="tv-channel">Городской телеканал</span></div>
                  </div>
                  </a>
                </div>
                <div class="slide">
                  <a href="">
                  <div class="bx-tv-slider__image"><img src="app/img/content/bs2.jpg" alt=""></div>
                  <div class="bx-tv-slider__caption">
                    <div class="item1">Терминатор: Да придёт спаситель</div>
                    <div class="item2"><span class="tv-time">11:20</span>, <span class="tv-channel">Городской телеканал</span></div>
                  </div>
                  </a>
                </div>
                <div class="slide">
                  <a href="">
                  <div class="bx-tv-slider__image"><img src="app/img/content/bs1.jpg" alt=""></div>
                  <div class="bx-tv-slider__caption">
                    <div class="item1">Терминатор: Да придёт спаситель</div>
                    <div class="item2"><span class="tv-time">11:20</span>, <span class="tv-channel">Городской телеканал</span></div>
                  </div>
                  </a>
                </div>
                <div class="slide">
                  <a href="">
                  <div class="bx-tv-slider__image"><img src="app/img/content/bs2.jpg" alt=""></div>
                  <div class="bx-tv-slider__caption">
                    <div class="item1">Терминатор: Да придёт спаситель</div>
                    <div class="item2"><span class="tv-time">11:20</span>, <span class="tv-channel">Городской телеканал</span></div>
                  </div>
                  </a>
                </div>
                <div class="slide">
                  <a href="">
                  <div class="bx-tv-slider__image"><img src="app/img/content/bs2.jpg" alt=""></div>
                  <div class="bx-tv-slider__caption">
                    <div class="item1">Терминатор: Да придёт спаситель</div>
                    <div class="item2"><span class="tv-time">11:20</span>, <span class="tv-channel">Городской телеканал</span></div>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="outer-section clear outer-content">
          <!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-tv">
              <div class="row-outside row-outside-bill bg-color-one row-outside-art clear">
                <div class="inner-outside ">
                  <div class="bill-nav">
                    <ul class="part-filter-list clear">
                      <li class="part-filter-list__name">Сортировать</li>
                      <li class="active"><a href=""><span>фильмы</span></a></li>
                      <li><a href=""><span>сериалы</span></a></li>
                      <li><a href=""><span>кино для детей</span></a></li>
                    </ul>
                  </div>
                  <!--  -->
                  <div class="row-bill-input row-tv-input">
                    <div class="row-form-input clear">
                      <div class="form-input-item clear">
                        <div class="row-input">
                          <div class="row-dropdown-input clear">
                            <div class="bill-input-item"><select name="city" id="" class="">
                                <option value="name" selected="selected">Москва</option>
                              </select> </div>
                            <!--  -->
                            <div class="row-drop-down-where bill-input-item">
                              <div class="drop-down-where">
                                Сегодня
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
                            <!--  -->
                            <div class="bill-input-item">
                              <select name="channel" id="" class="">
                                <option value="name" selected="selected">Основные каналы</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-tv-result">
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-1"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Первый</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес
                        <span class="programm__liked"><span class="programm__liked-text">Избранное</span></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-2"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Россия 1</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-3"></a>
                    <div class="channel-item-head__name">
                      <a href="#">НТВ</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-4"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Пятый канал</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-5"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Карусель</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-6"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Общественное телевидение России</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-7"></a>
                    <div class="channel-item-head__name">
                      <a href="#">СТС</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-8"></a>
                    <div class="channel-item-head__name">
                      <a href="#">ТНТ</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-9"></a>
                    <div class="channel-item-head__name">
                      <a href="#">РЕН ТВ</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-10"></a>
                    <div class="channel-item-head__name">
                      <a href="#">ТВ Центр</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-11"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Домашний</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="channel-item">
                  <div class="channel-item-head">
                    <a href="#" class="channel-item-head__image channel__image-12"></a>
                    <div class="channel-item-head__name">
                      <a href="#">Мир</a>
                    </div>
                    <div class="row-icon-channel">
                      <i class="icon-channel icon-channel__pick open-help-in">
                        <div class="help help--gray">Добавить в избранное</div>
                      </i>
                    </div>
                  </div>
                  <div class="channel-item-content">
                    <ul class="channel-list">
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Телеканал “Доброе утро”</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Контрольная закупка</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Модный приговор</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Новости с субтитрами</a>
                      </li>
                      <li class="past-programm">
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Жить здорово!</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа<span class="programm__liked"><span class="programm__liked-text">Избранное</span></span></a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Мужское / Женское. И мычит,и лает</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">18:45”Человек и закон” с Алексеем Пимановым. Выпуск от 26 августа</a>
                      </li>
                      <li>
                        <span class="channel-item__time"><span class="channel-item-inner__time">09:50</span></span>
                        <a href="#" class="channel-item__name">Поле чудес</a>
                      </li>
                    </ul>
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
