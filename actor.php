<?php
  $namePage = 'Актер'; // название страницы
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
  <div class="my-overlay">
    <form action="">
      <div class="my-overlay-item" data-type="overlay-add">
        <div class="my-overlay-bg"></div>
        <div class="row-inner-my-overlay">
          <div class="inner-my-overlay">
            <div class="war-title overlay-content-outside"><i class="content-icon content-icon-add"></i>ДОБАВИТЬ ИНФОРМАЦИЮ</div>
            <div class="war-title-content overlay-content-outside">
              <div class="">
                <h1 class="pagetitle mini__pagetitle">Зеленая миля</h1>
                <h2 class="name__page">Green Mile</h2>
              </div>
            </div>
            <div class="war-content">
              <div class="war-content-item">
                <label class="label-important">Информация <i></i></label>
                <textarea type="text" class="input-field"></textarea>
              </div>
              <div class="war-content-item">
                <label>Источник </label>
                <input type="text" class="input-field">
              </div>
              <div class="war-content-dop">
                Ссылка на сайт или наименование ресурса, подтверждающего верность информации
              </div>
              <div class="war-content-bottom clear">
                <div class="row-button-right">
                  <button class="button button4">Отправить</button>
                </div>
                <div class="row-button-left">
                  <button class="button button8">ВЫБЕРИТЕ ФАЙЛЫ</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-overlay-item" data-type="overlay-error">
        <div class="my-overlay-bg"></div>
        <div class="row-inner-my-overlay">
          <div class="inner-my-overlay">
            <div class="war-title overlay-content-outside"><i class="content-icon content-icon-error"></i>Сообщить об ошибке</div>
            <div class="war-title-content overlay-content-outside">
              <div class="">
                <h1 class="pagetitle mini__pagetitle">Зеленая миля</h1>
                <h2 class="name__page">Green Mile</h2>
              </div>
            </div>
            <div class="war-content">
              <div class="war-content-item">
                <label class="label-important">Информация <i></i></label>
                <textarea type="text" class="input-field"></textarea>
              </div>
              <div class="war-content-item">
                <label>Источник</label>
                <input type="text" class="input-field">
              </div>
              <div class="war-content-dop">
                Ссылка на сайт или наименование ресурса, подтверждающего верность информации
              </div>
              <div class="war-content-bottom clear">
                <div class="row-button-right">
                  <button class="button button4">Отправить</button>
                </div>
                <div class="row-button-left">
                  <button class="button button8">ВЫБЕРИТЕ ФАЙЛЫ</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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
          <div class="caption-page caption-page-actor clear">
            <div class="caption-page-item caption-page-image">
              <div class="outer-caption-page-image image-shadow">
                <a href="app/img/content/af.jpg" class="image-cover-parent">
                  <img alt="" src="#" class="responsive-image image-cover" data-src-d="app/img/content/af.jpg" data-src-t="app/img/content/af.jpg" data-src-m="app/img/content/af.jpg">
                  <i class="image-hover"><span>Увеличить</span></i>
                </a>
              </div>
            </div>
            <div class="caption-page-item caption-page-info">
              <div class="info-item">
                <div class="info-item-actor-title">КРАТКО</div>
                <div class="outer-info-item-list">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value">
                        <li class="value__name">Дата рождения:</li>
                        <li>09.07.1956 (59 лет)</li>
                      </ul></li>
                    <li>
                      <ul class="value">
                        <li class="value__name">Место рождения:</li>
                        <li>Конкорд, США</li>
                      </ul></li>
                    <li><ul class="value">
                      <li class="value__name">Профессия:</li>
                      <li>актер</li>
                      <li>режиссер</li>
                      <li>сценарист</li>
                      <li>продюсер</li>
                    </ul></li>
                    <li>
                      <ul class="value">
                        <li class="value__name">Рост:</li>
                        <li>183 см</li>
                      </ul>
                    </li>
                    <li>
                      <ul class="value">
                        <li class="value__name">Семейное положение:</li>
                        <li>в браке с <a href="#">Рита Уилсон</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="outer-info-item-list outer-info-item-list-social">
                  <ul class="info-item-list">
                    <li>
                      <ul class="value mini-social-list">
                        <li class="value__name">Соцсети:</li>
                        <li><a href="#"><i class="mini-social-icon mini-social-icon--fb"></i></a></li>
                        <li><a href="#"><i class="mini-social-icon mini-social-icon--tw"></i></a></li>
                        <li><a href="#"><i class="mini-social-icon mini-social-icon--inst"></i></a></li>
                        <li><a href="#"><i class="mini-social-icon mini-social-icon--vk"></i></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="outer-info-item-list">
                  <div class="info-item-actor-title">Награды <span class="number">37</span></div>
                  <ul class="awords-list">
                    <li>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw1.jpg" alt=""></li>
                        <li>
                          <a href="#" class="awords-list-name name">
                            ОСКАР
                            <span class="awords-list-name dop-name">
                              ACADEMY AWARDS <span class="value">2/5</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw2.jpg" alt=""></li>
                        <li>
                          <a href="#" class="awords-list-name name">
                            MTV (США)
                            <span class="awords-list-name dop-name">
                              MTV (USA) <span class="value">1/13</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw3.jpg" alt=""></li>
                        <li>
                          <a href="#" class="awords-list-name name">
                            ЗОЛОТОЙ ГЛОБУС
                            <span class="awords-list-name dop-name">
                              GOLDEN GLOBE <span class="value">4/8</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw4.jpg" alt=""></li>
                        <li>
                          <a href="#" class="awords-list-name name">
                            БЕРЛИНСКИЙ КИНОФЕСТИВАЛЬ
                            <span class="awords-list-name dop-name">
                              BERLIN INTERNATIONAL FILM FESTIVAL <span class="value">1/1</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="caption-page-item caption-page-dop caption-page-tab">
              <div class="aside__title">Посмотреть фильм<br>с этим актером</div>
              <ul class="aside-list clear">
                <li class="active" data-type-slidergroup="novelty_2" data-type-sliderbutton="1">В КИНО</li>
                <li class="default" data-type-slidergroup="novelty_2" data-type-sliderbutton="2">ОНЛАЙН</li>
                <li class="default" data-type-slidergroup="novelty_2" data-type-sliderbutton="3">НА ТВ</li>
              </ul>
              <div class="caption-page-tab-content active" data-type-slidergroup="novelty_2" data-type-sliderelem="1">
                <div class="caption-page-tab-item">
                  <div class="list-preview">
                    <a href="#">
                      <span>
                      <img alt="" src="#" class="responsive-image image-padding--white" data-src-d="app/img/content/in1.jpg">
                      </span>
                    </a>
                  </div>
                  <div class="caption-page-tab-name"><a href="#">ИНФЕРНО</a></div>
                  <div class="caption-page-tab-name__eng">INFERNO</div>
                  <div class="caption-page-tab-info">
                    <span class="caption-page-tab-info-item">США, Великобритания, Канада, 2016</span>
                    <ul class="clear caption-page-tab-info-item">
                      <li>Режиссер:</li>
                      <li><a href="#">Рон Ховард</a></li>
                    </ul>
                    <ul class="clear caption-page-tab-info-item">
                      <li>В ролях:</li>
                      <li><a href="#">Том Хэнкс</a></li>
                      <li><a href="#">Фелисити Джонс</a></li>
                      <li><a href="#">Бен Фостер</a></li>
                      <li><a href="#">Ирфан Кхан</a></li>
                      <li><a href="#">Омар Си</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="caption-page-tab-content" data-type-slidergroup="novelty_2" data-type-sliderelem="2">
                <div class="aside-result__item">
                  <p class="aside-result__title">
                    <span class="aside-result__title-text">IVI</span>
                  </p>
                  <div class="price-films cinema-price-films">
                    <span class="price-films__text">Цена: от <span class="price-films__number ">260 руб.</span></span>
                  </div>
                  <a href="#" class="button button2 button-mini-two">СМОТРЕТЬ</a>
                </div>
                <div class="aside-result__item">
                  <p class="aside-result__title">
                    <span class="aside-result__title-text">MEGOGO</span>
                  </p>
                  <div class="price-films cinema-price-films">
                    <span class="price-films__text">Цена: <span class="price-films__number free">бесплатно</span></span>
                  </div>
                  <a href="#" class="button button2 button-mini-two">СМОТРЕТЬ</a>
                </div>
                <div class="aside-result__item">
                  <p class="aside-result__title">
                    <span class="aside-result__title-text">OKKO</span>
                  </p>
                  <div class="price-films cinema-price-films">
                    <span class="price-films__text">Цена: от <span class="price-films__number ">260 руб.</span></span>
                  </div>
                  <a href="#" class="button button2 button-mini-two">СМОТРЕТЬ</a>
                </div>
              </div>
              <div class="caption-page-tab-content" data-type-slidergroup="novelty_2" data-type-sliderelem="3">
                <div class="aside-result__item">
                  <p class="aside-result__title">
                    <span class="aside-result__title-text">Первый</span>
                  </p>
                  <p class="aside-result__dop">5 декабря, пн., 13:30</p>
                </div>
                <div class="aside-result__item">
                  <p class="aside-result__title">
                    <span class="aside-result__title-text">Россия 1</span>
                  </p>
                  <p class="aside-result__dop">7 декабря, ср., 14:20</p>
                </div>
              </div>
            </div>
          </div>
          <div class="band-nav">
            <ul class="band-nav-list clear">
              <li class="band-nav__icon my-films">
                <a class="folder-icon-two"><span>Мои фильмы</span></a>
                <div class="row-dropdown-folder">
                  <div class="dropdown-folder dropdown-folder-content">
                    <div class="dropdown-folder-title"><span>В избранное</span></div>
                    <ul class="dropdown-folder-list">
                      <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                      <li><i class="dropdown-folder-content-icon"><span>2</span></i><span class="name-icon">Избранное</span></li>
                      <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                      <li><i class="dropdown-folder-content-icon"><span>4</span></i><span class="name-icon">Избранное</span></li>
                    </ul>
                  </div>
                  <div class="dropdown-folder dropdown-folder-setting">
                    <a href="#" class="clear">
                      <!-- <i class="setting-icon"></i> -->
                      <span>Управление папками</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="band-nav__icon my-add-info"><a><span>Добавить информацию</span></a></li>
              <li class="band-nav__icon my-massage-error"><a><span>Сообщить об ошибке</span></a></li>
            </ul>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-actor">
              <div class="actor-caption">
                <p>Том Хэнкс родился 9 июля 1956 года в г. Конкорд, штат Калифорния, США. Его родители развелись, и большую часть детства Том провел с отцом, поваром по профессии. Они часто переезжали из города в город, мальчику постоянно приходилось привыкать к новым школам, новым знакомым, новым подругам отца.</p>
                <p>Участвовать в театральных постановках Хэнкс начал, еще учась в школе. Для того, чтобы овладеть актерским ремеслом более профессионально, он поступил на отделение драмы в Калифорнийский Университет. 3 сезона Хэнкса приглашали играть на ежегодном “Шекспировском фестивале”, проходившем в Огайо, и Том даже получил там несколько театральных наград.</p>
                <div data-type-openclose-element="hide-text" class="hide-text">
                  <p>Том Хэнкс родился 9 июля 1956 года в г. Конкорд, штат Калифорния, США. Его родители развелись, и большую часть детства Том провел с отцом, поваром по профессии. Они часто переезжали из города в город, мальчику постоянно приходилось привыкать к новым школам, новым знакомым, новым подругам отца.</p>
                  <p>Участвовать в театральных постановках Хэнкс начал, еще учась в школе. Для того, чтобы овладеть актерским ремеслом более профессионально, он поступил на отделение драмы в Калифорнийский Университет. 3 сезона Хэнкса приглашали играть на ежегодном “Шекспировском фестивале”, проходившем в Огайо, и Том даже получил там несколько театральных наград.</p>
                </div>
              </div>
              <div class="outer-pagelist-more">
                <span class="pagelist-more sprite-before" data-type-openclose-button="hide-text"><span class="pagelist-more__text">Еще</span></span>
              </div>
              <div class="row-actor-about">
                <div class="row-tabs">
                  <ul class="tabs-list clear">
                    <li class="active" data-type-sliderGroup="tab" data-type-sliderButton="1"><a><span>ФИЛЬМОГРАФИЯ</span></a></li>
                    <li class="tabs-list-name"><span>СМОТРЕТЬ</span></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="2"><a><span>В КИНО</span></a></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="3"><a><span>ОНЛАЙН</span></a></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="4"><a><span>НА ТВ</span></a></li>
                  </ul>
                </div>
                <div class="mobile__select my-select">
                  <span class="result">ФИЛЬМОГРАФИЯ</span>
                  <ul class="result-list">
                    <li class="active" data-type-sliderGroup="tab" data-type-sliderButton="1"><a><span>ФИЛЬМОГРАФИЯ</span></a></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="2"><a><span>В КИНО</span></a></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="3"><a><span>ОНЛАЙН</span></a></li>
                    <li class="" data-type-sliderGroup="tab" data-type-sliderButton="4"><a><span>НА ТВ</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="row-list-about adaptive-tile active" data-type-sliderGroup="tab" data-type-sliderElem="1">
                <div class="parent-list-about">
                  <div class="shadow-list-about">
                    <div class="list-about-item clear" data-type-openclose-button="1">
                      <div class="list-about-item-tile">
                        <span class="list-about-item__title animated">АКТЕР</span>
                        <span class="list-about-item__number">8 работ</span>
                      </div>
                      <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                    </div>
                  </div>
                  <div class="row-list-about-result active" data-type-openclose-element="1">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="row-chief-title clear">
                          <div class="section-result-item section-result-item-years ">2016</div>
                          <div class="section-result-item section-result-item-actor">
                            <div class="list-preview">
                              <a href="#">
                                <span>
                                  <img class=" image-padding--white" src="app/img/content/c1.jpg" alt="">
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="section-result-item item2 clear">
                          <div class="row-result-tabs-item row-result-tabs-item--left">
                            <div class="name"><a href="#">ГОЛОГРАММА ДЛЯ КОРОЛЯ</a></div>
                            <div class="name__eng">HOLOGRAM FOR THE KING</div>
                            <div class="section-result-info">
                              <div class="actors-info-content">
                                <ul>
                                  <li class="actors-info-role">Роль — Alan Clay</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row-result-tabs-item--right">
                            <div class="result-tabs-image">
                              <div class="list-preview" gallery-number="1">
                                <a href="app/img/content/ap2.jpg" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                                </a>
                                <a href="app/img/content/ap1.jpg" class="parent hidden"></a>
                              </div>
                            </div>
                            <div class="row-info-list-cinema">
                              <div class="main-folder-icon">
                                <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                  <a class="folder__icon icon"></a>
                                  <div class="hint">Добавить в Избранное</div>
                                  <div class="row-dropdown-folder">
                                    <div class="dropdown-folder dropdown-folder-content">
                                      <div class="dropdown-folder-title"><span>В избранное</span></div>
                                      <ul class="dropdown-folder-list">
                                        <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>2</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>4</span></i><span class="name-icon">Избранное</span></li>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <div class="star__icon icon hint-block-open">
                                    <div class="hint-block">
                                     <div class="hint-inner-block">
                                        <div class="hint-inner-block__title">
                                          <i class="star__icon icon"></i>Мой рейтинг
                                        </div>
                                        <div class="row-raiting-star">
                                         <div class="inner-raiting-star" data-fixed="fixed">
                                           <ul class="raiting-list-star clear">
                                             <li class="star__item active" data-value="1"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="2"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="3"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="4"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="5"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="6"><i class="icon__star"></i></li>
                                             <li class="star__item active" data-value="7" data-active="select"><i class="icon__star"></i><span class="select-star default">ваша оценка</span><span class="select-star default">ваша оценка</span></li>
                                             <li class="star__item" data-value="8"><i class="icon__star"></i></li>
                                             <li class="star__item" data-value="9"><i class="icon__star"></i></li>
                                             <li class="star__item" data-value="10"><i class="icon__star"></i></li>
                                           </ul>
                                           <span class="raiting-number"><span class="value">7</span> из 10</span>
                                           <span class="result-star"></span>
                                         </div>
                                       </div>
                                     </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row-mini-raiting-number">
                                Рейтинг: <span class="number">8.4</span>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="row-chief-title clear">
                          <div class="section-result-item section-result-item-years ">2016</div>
                          <div class="section-result-item section-result-item-actor">
                            <div class="list-preview">
                              <a href="#">
                                <span>
                                  <img class=" image-padding--white" src="app/img/content/c1.jpg" alt="">
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="section-result-item item2 clear">
                          <div class="row-result-tabs-item row-result-tabs-item--left">
                            <div class="name"><a href="#">ГОЛОГРАММА ДЛЯ КОРОЛЯ</a></div>
                            <div class="name__eng">HOLOGRAM FOR THE KING</div>
                            <div class="section-result-info">
                              <div class="actors-info-content">
                                <ul>
                                  <li class="actors-info-role">Роль — Alan Clay</li>
                                </ul>
                              </div>
                            </div>
                            <a href="#" class="button button2">КУПИТЬ БИЛЕТ</a>
                          </div>
                          <div class="row-result-tabs-item--right">
                            <div class="result-tabs-image">
                              <div class="list-preview" gallery-number="2">
                                <a href="app/img/content/ap2.jpg" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                                </a>
                                <a href="app/img/content/ap1.jpg" class="parent hidden"></a>
                              </div>
                            </div>
                            <div class="row-info-list-cinema">
                              <div class="main-folder-icon">
                                <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                  <a class="folder__icon icon"></a>
                                  <div class="hint">Добавить в Избранное</div>
                                  <div class="row-dropdown-folder">
                                    <div class="dropdown-folder dropdown-folder-content">
                                      <div class="dropdown-folder-title"><span>В избранное</span></div>
                                      <ul class="dropdown-folder-list">
                                        <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>2</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>4</span></i><span class="name-icon">Избранное</span></li>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                <div class="star__icon icon hint-block-open">
                                  <div class="hint-block">
                                   <div class="hint-inner-block">
                                      <div class="hint-inner-block__title">
                                        <i class="star__icon icon"></i>Мой рейтинг
                                      </div>
                                      <div class="row-raiting-star">
                                       <div class="inner-raiting-star" data-fixed="fixed">
                                         <ul class="raiting-list-star clear">
                                           <li class="star__item active" data-value="1"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="2"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="3"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="4"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="5"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="6"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="7" data-active="select"><i class="icon__star"></i><span class="select-star default">ваша оценка</span><span class="select-star default">ваша оценка</span></li>
                                           <li class="star__item" data-value="8"><i class="icon__star"></i></li>
                                           <li class="star__item" data-value="9"><i class="icon__star"></i></li>
                                           <li class="star__item" data-value="10"><i class="icon__star"></i></li>
                                         </ul>
                                         <span class="raiting-number"><span class="value">7</span> из 10</span>
                                         <span class="result-star"></span>
                                       </div>
                                     </div>
                                   </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="row-mini-raiting-number">
                                Рейтинг: <span class="number">8.4</span>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="row-chief-title clear">
                          <div class="section-result-item section-result-item-years ">2016</div>
                          <div class="section-result-item section-result-item-actor">
                            <div class="list-preview">
                              <a href="#">
                                <span>
                                  <img class=" image-padding--white" src="app/img/content/c1.jpg" alt="">
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="section-result-item item2 clear">
                          <div class="row-result-tabs-item row-result-tabs-item--left">
                            <div class="name"><a href="#">ГОЛОГРАММА ДЛЯ КОРОЛЯ</a></div>
                            <div class="name__eng">HOLOGRAM FOR THE KING</div>
                            <div class="section-result-info">
                              <div class="actors-info-content">
                                <ul>
                                  <li class="actors-info-role">Роль — Alan Clay</li>
                                </ul>
                              </div>
                            </div>
                            <button class="button button4 animated">СМОТРЕТЬ ОНЛАЙН</button>
                          </div>
                          <div class="row-result-tabs-item--right">
                            <div class="result-tabs-image">
                              <div class="list-preview" gallery-number="3">
                                <a href="app/img/content/ap2.jpg" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                                </a>
                                <a href="app/img/content/ap1.jpg" class="parent hidden"></a>
                              </div>
                            </div>
                            <div class="row-info-list-cinema">
                              <div class="main-folder-icon">
                                <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                  <a class="folder__icon icon"></a>
                                  <div class="hint">Добавить в Избранное</div>
                                  <div class="row-dropdown-folder">
                                    <div class="dropdown-folder dropdown-folder-content">
                                      <div class="dropdown-folder-title"><span>В избранное</span></div>
                                      <ul class="dropdown-folder-list">
                                        <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>2</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                        <li><i class="dropdown-folder-content-icon"><span>4</span></i><span class="name-icon">Избранное</span></li>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                <div class="star__icon icon hint-block-open">
                                  <div class="hint-block">
                                   <div class="hint-inner-block">
                                      <div class="hint-inner-block__title">
                                        <i class="star__icon icon"></i>Мой рейтинг
                                      </div>
                                      <div class="row-raiting-star">
                                       <div class="inner-raiting-star" data-fixed="fixed">
                                         <ul class="raiting-list-star clear">
                                           <li class="star__item active" data-value="1"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="2"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="3"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="4"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="5"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="6"><i class="icon__star"></i></li>
                                           <li class="star__item active" data-value="7" data-active="select"><i class="icon__star"></i><span class="select-star default">ваша оценка</span><span class="select-star default">ваша оценка</span></li>
                                           <li class="star__item" data-value="8"><i class="icon__star"></i></li>
                                           <li class="star__item" data-value="9"><i class="icon__star"></i></li>
                                           <li class="star__item" data-value="10"><i class="icon__star"></i></li>
                                         </ul>
                                         <span class="raiting-number"><span class="value">7</span> из 10</span>
                                         <span class="result-star"></span>
                                       </div>
                                     </div>
                                   </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="row-mini-raiting-number">
                                Рейтинг: <span class="number">8.4</span>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="outer-pagelist-more">
                      <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                    </div>
                  </div>
                </div>
                <div class="parent-list-about">
                  <div class="shadow-list-about">
                    <div class="list-about-item clear" data-type-openclose-button="2">
                      <div class="list-about-item-tile">
                        <span class="list-about-item__title animated">РЕЖИССЕР</span>
                        <span class="list-about-item__number">8 работ</span>
                      </div>
                      <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                    </div>
                  </div>
                  <div class="row-list-about-result" data-type-openclose-element="2"></div>
                </div>
                <div class="parent-list-about">
                  <div class="shadow-list-about">
                    <div class="list-about-item clear" data-type-openclose-button="3">
                      <div class="list-about-item-tile">
                        <span class="list-about-item__title animated">СЦЕНАРИСТ</span>
                        <span class="list-about-item__number">8 работ</span>
                      </div>
                      <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                    </div>
                  </div>
                  <div class="row-list-about-result" data-type-openclose-element="3"></div>
                </div>
                <div class="parent-list-about">
                  <div class="shadow-list-about">
                    <div class="list-about-item clear" data-type-openclose-button="4">
                      <div class="list-about-item-tile">
                        <span class="list-about-item__title animated">ПРОДЮСЕР</span>
                        <span class="list-about-item__number">8 работ</span>
                      </div>
                      <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                    </div>
                  </div>
                  <div class="row-list-about-result" data-type-openclose-element="4"></div>
                </div>
              </div>
              <div class="row-list-about row-session-table" data-type-sliderGroup="tab" data-type-sliderElem="2">
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
                <div class="session-table-title">Сеансы <a href="#">Инферно</a></div>
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
              <div class="row-list-about row-session-table row-session-tab-table" data-type-sliderGroup="tab" data-type-sliderElem="3">
               <div class="tab-table-outer tab-table-outer-online">
                  <div class="tab-table-head clear">
                    <div class="tab-table-col">Онлайн-кинотеатр</div>
                    <div class="tab-table-col">Цена</div>
                    <div class="tab-table-col"></div>
                  </div>
                  <div class="outer-cinema-online">
                    <div class="link-cinema"><a href="#">Инферно</a></div>
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
                  <div class="outer-cinema-online">
                    <div class="link-cinema"><a href="#">Инферно</a></div>
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
              </div>
              <div class="row-list-about row-session-table row-session-tab-table row-session-logo-table row-session-logo-table-channel" data-type-sliderGroup="tab" data-type-sliderElem="4">
                <div class="tab-table-outer">
                  <div class="tab-table-head clear">
                    <div class="tab-table-col">Канал</div>
                    <div class="tab-table-col">Дата</div>
                    <div class="tab-table-col">Время</div>
                  </div>
                  <div class="outer-cinema-online">
                    <div class="link-cinema"><a href="#">Инферно</a></div>
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
                  <div class="outer-cinema-online">
                    <div class="link-cinema"><a href="#">Инферно</a></div>
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
            <div class="outer-other">
              <section class="inner-content outer-content-item parent-sticker outer-section-mini-prewiew">
                <div class="sticker">
                  <div class="sticker-item">ПОСЛЕДНИЕ НОВОСТИ О ПЕРСОНЕ</div>
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
                            <a href="#"><img alt="" src="/app/img/content/3439.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/3439.jpg" data-src-t="/app/img/content/3439.jpg" data-src-m=""></a>
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
                            <a href="#"><img alt="" src="/app/img/content/3439.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/3439.jpg" data-src-t="/app/img/content/3439.jpg" data-src-m=""></a>
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
            <div class="full-comments full-comments-reviews full-comments-reviews-answer">
              <div class="full-comments-head">
                <div class="full-comments-text"><a href="#">Отзывы</a> <span class="number">2</span></div>
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
                <div class="full-comments-text"><a href="#"><span>Все отзывы (113)</span></a></div>
              </div>
            </div>
            <div class="row-pagelist-ligin">
              <div class="pagelist__title pagelist-ligin__title">ОТПРАВИТЬ ОТЗЫВ</div>
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
