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
            <ul class="nav-content-list clear">
              <li class="nav-content-item active"><a href="actor.php">Фильмография</a></li>
              <li class="nav-content-item"><a href="actor_otziv.php">Отзывы</a></li>
              <li class="nav-content-item"><a href="actor_photo.php">Фото <span class="number">45</span></a></li>
              <li class="nav-content-item"><a href="actor_wall.php">Обои <span class="number">11</span></a></li>
              <li class="nav-content-item"><a href="actor_box.php">Кадры <span class="number">616</span></a></li>
              <li class="nav-content-item"><a href="actor_awards.php">Награды</a></li>
              <li class="nav-content-item"><a href="actor_news.php">Новости <span class="number">142</span></a></li>
              <li class="nav-content-item-add"><a href="actor_news.php">Смотреть <span class="number">22</span></a></li>
            </ul>
          </div>
          <div class="caption-page caption-page-actor clear">
            <div class="caption-page-item caption-page-image">
              <div class="outer-caption-page-image image-shadow">
                <img src="app/img/content/af.jpg" alt="" class="image-cover">
                <i class="image-hover"><span>Увеличить</span></i>
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
                <div class="outer-info-item-list">
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
                          <span class="awords-list-name name">
                            ОСКАР
                          </span>
                          <span class="awords-list-name dop-name">
                            ACADEMY AWARDS <span class="value">2/5</span>
                          </span>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw2.jpg" alt=""></li>
                        <li>
                          <span class="awords-list-name name">
                            MTV (США)
                          </span>
                          <span class="awords-list-name dop-name">
                            MTV (USA) <span class="value">1/13</span>
                          </span>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw3.jpg" alt=""></li>
                        <li>
                          <span class="awords-list-name name">
                            ЗОЛОТОЙ ГЛОБУС
                          </span>
                          <span class="awords-list-name dop-name">
                            GOLDEN GLOBE <span class="value">4/8</span>
                          </span>
                        </li>
                      </ul>
                      <ul class="awords-list-value clear">
                        <li class="awords-list__image"><img src="app/img/icon/aw4.jpg" alt=""></li>
                        <li>
                          <span class="awords-list-name name">
                            БЕРЛИНСКИЙ КИНОФЕСТИВАЛЬ
                          </span>
                          <span class="awords-list-name dop-name">
                            BERLIN INTERNATIONAL FILM FESTIVAL <span class="value">1/1</span>
                          </span>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="caption-page-item caption-page-dop caption-page-tab">
              <div class="caption-page-item-title"></div>
              <ul class="aside-list clear">
                <li class="active" data-type-slidergroup="novelty" data-type-sliderbutton="cinema">КИНО</li>
                <li class="default" data-type-slidergroup="novelty" data-type-sliderbutton="trailers">ТРЕЙЛЕРЫ</li>
                <li class="default" data-type-slidergroup="novelty" data-type-sliderbutton="wallpapers">ОБОИ</li>
              </ul>
              <div class="caption-page-tab-content active" data-type="1">
                <div class="caption-page-tab-item">
                  <div class="list-preview">
                    <a href="#">
                      <span>
                        <img class=" image-padding--white" src="app/img/content/in1.jpg" alt="">
                      </span>
                    </a>
                  </div>
                  <div class="caption-page-tab-name"><a href="#">ИНФЕРНО</a></div>
                  <div class="caption-page-tab-name__eng">INFERNO</div>
                  <div class="caption-page-tab-info">
                    <span class="caption-page-tab-info-item">США, Великобритания, Канада, 2016</span>
                    <ul class="clear caption-page-tab-info-item">
                      <li>Режиссёр:</li>
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
              <div class="caption-page-tab-content" data-type="2">2</div>
              <div class="caption-page-tab-content" data-type="3">3</div>
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
            <div class="row-actor">
              <div class="actor-caption">
                <p>Том Хэнкс родился 9 июля 1956 года в г. Конкорд, штат Калифорния, США. Его родители развелись, и большую часть детства Том провел с отцом, поваром по профессии. Они часто переезжали из города в город, мальчику постоянно приходилось привыкать к новым школам, новым знакомым, новым подругам отца.</p>
                <p>Участвовать в театральных постановках Хэнкс начал, еще учась в школе. Для того, чтобы овладеть актерским ремеслом более профессионально, он поступил на отделение драмы в Калифорнийский Университет. 3 сезона Хэнкса приглашали играть на ежегодном “Шекспировском фестивале”, проходившем в Огайо, и Том даже получил там несколько театральных наград.</p>
              </div>
              <div class="outer-pagelist-more">
                <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
              </div>
              <div class="row-actor-about">
                <div class="row-tabs">
                  <ul class="tabs-list clear">
                    <li class="active"><a href=""><span>ФИЛЬМОГРАФИЯ</span></a></li>
                    <li class="tabs-list-name"><span>СМОТРЕТЬ</span></li>
                    <li class=""><a href=""><span>В КИНО</span></a></li>
                    <li class=""><a href=""><span>ОНЛАЙН</span></a></li>
                    <li class=""><a href=""><span>НА ТВ</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row-list-about">
              <div class="parent-list-about">
                <div class="shadow-list-about">
                  <div class="list-about-item clear">
                    <div class="list-about-item-tile">
                      <span class="list-about-item__title animated">РЕЖИССЕР</span>
                      <span class="list-about-item__number">8 работ</span>
                    </div>
                    <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                  </div>
                </div>
                <div class="row-list-about-result active">
                  <div class="list-content-item-inner">
                    <div class="section-result-content clear">
                      <div class="row-chief-title clear">
                        <div class="section-result-item">2016</div>
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
                            <div class="list-preview">
                              <a href="#" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                              </a>
                            </div>
                          </div>
                          <div class="row-info-list-cinema">
                            <div class="main-folder-icon">
                              <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                <a href="#" class="folder__icon icon"></a>
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
                                <a href="#" class="star__icon icon"></a>
                                <div class="hint">Поставить оценку</div>
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
                        <div class="section-result-item">2016</div>
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
                            <div class="list-preview">
                              <a href="#" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                              </a>
                            </div>
                          </div>
                          <div class="row-info-list-cinema">
                            <div class="main-folder-icon">
                              <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                <a href="#" class="folder__icon icon"></a>
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
                                <a href="#" class="star__icon icon"></a>
                                <div class="hint">Поставить оценку</div>
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
                        <div class="section-result-item">2016</div>
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
                            <div class="list-preview">
                              <a href="#" class="parent"><img src="app/img/content/ap2.jpg" alt="" class="">
                              </a>
                            </div>
                          </div>
                          <div class="row-info-list-cinema">
                            <div class="main-folder-icon">
                              <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                                <a href="#" class="folder__icon icon"></a>
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
                                <a href="#" class="star__icon icon"></a>
                                <div class="hint">Поставить оценку</div>
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
                  <div class="list-about-item clear">
                    <div class="list-about-item-tile">
                      <span class="list-about-item__title animated">РЕЖИССЕР</span>
                      <span class="list-about-item__number">8 работ</span>
                    </div>
                    <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                  </div>
                </div>
                <div class="row-list-about-result">
                  2
                </div>
              </div>
              <div class="parent-list-about">
                <div class="shadow-list-about">
                  <div class="list-about-item clear">
                    <div class="list-about-item-tile">
                      <span class="list-about-item__title animated">РЕЖИССЕР</span>
                      <span class="list-about-item__number">8 работ</span>
                    </div>
                    <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                  </div>
                </div>
                <div class="row-list-about-result">
                  2
                </div>
              </div>
              <div class="parent-list-about">
                <div class="shadow-list-about">
                  <div class="list-about-item clear">
                    <div class="list-about-item-tile">
                      <span class="list-about-item__title animated">РЕЖИССЕР</span>
                      <span class="list-about-item__number">8 работ</span>
                    </div>
                    <div class="list-about-item-tile list-about-item-tile--right"><span class="list-about-item__button animated">РАЗВЕРНУТЬ</span></div>
                  </div>
                </div>
                <div class="row-list-about-result">
                  2
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
            <div class="outer-other no-mobile">
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
                <div class="full-comments-text">РЕЦЕНЗИИ <span class="number">2</span></div>
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
                      </a>
                      </li>
                      <li class="reply__comments">
                        <a href="#">
                          <span>Комментировать</span>
                          <i class="reply__icon reply__comment_icon"></i>
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
                      </a>
                      </li>
                      <li class="reply__comments">
                        <a href="#">
                          <span>Комментировать</span>
                          <i class="reply__icon reply__comment_icon"></i>
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
