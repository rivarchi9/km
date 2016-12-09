<?php 
  $namePage = 'Регистрированный Пользователь'; // название страницы
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
          <div class="info-user">
            <h1 class="pagetitle mini__pagetitle login__user">Stanislav_Nikulin</h1>
            <h2 class="name__page">Станислав Никулин</h2>
          </div>
          <div class="nav-content">
            <?php include "sections/user_nav.php" ?>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->

          <content class="page-section-content profile-section-content section-content content-outercol-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          
          <div class="list-content">
            <div class="user-head row-profile-item profile-item-chief">
              <div class="user-head--left">
                <div class="section-result-item list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/u1.jpg" alt="">
                    </span>
                  </a>
                </div>
              </div>
              <div class="user-head--right">
                <div class="profile-item profile-item-chief">
                  <div class="profile profile__title">ПРОФИЛЬ</div>
                  <ul class="profile-value-list">
                    <li class="date__user">Дата рождения: <span class="value">6 августа 1981 (35 лет)</span></li>
                    <li class="date-registration">Дата регистрации: <span class="value">19 сентября 2008</span></li>
                    <li class="gender">Пол: <span class="value">мужчина</span></li>
                    <li class="city">Город: <span class="value">Москва</span></li>
                  </ul>
                </div>
                <div class="profile-item">
                  <div class="profile profile__title">О СЕБЕ</div>
                  <ul class="profile-value-list">
                    <li><span class="value">Информация отсутствует</span></li>
                  </ul>
                </div>
                <div class="profile-item">
                  <div class="profile profile__title">ИНТЕРЕСЫ</div>
                  <ul class="profile-value-list">
                    <li><span class="value">Информация отсутствует</span></li>
                  </ul>
                </div>
                <div class="profile-item">
                  <div class="profile profile__title">СОЦСЕТИ</div>
                  <ul class="profile-value-list profile-value-list__social pagelist-ligin__social-list">
                    <li class="vk"><a href="#"></a></li>
                    <li class="fb"><a href="#"></a></li>
                    <li class="tw"><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row-profile-item row-profile-item-wihtsteacker ">
              <div class="inner parent-sticker">
                <div class="sticker">
                  <div class="sticker-item">РЕКОМЕНДУЕМ ПОСМОТРЕТЬ</div>
                </div>
                <div class="row-user-content-list-item row-user-content-with-sticker">
                  <div class="user-content-list-item">
                    <div class="user-content-list-item__title">
                      <a href="#">В КИНО</a>
                    </div>
                    <div class="user-content-list-item-content">
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
                              <div class="row-mini-raiting-number">
                                Рейтинг: <span class="number">8.4</span>
                              </div>
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
                              <div class="row-mini-raiting-number">
                                Рейтинг: <span class="number">8.4</span>
                              </div>
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
                  <div class="user-content-list-item">
                    <div class="user-content-list-item__title">
                      <a href="#">ОНЛАЙН</a>
                    </div>
                    <div class="user-content-list-item-content">
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
                              <div class="price-films cinema-price-films">
                                <span class="price-films__text">Цена: от <span class="price-films__number ">260 руб.</span></span>
                              </div>
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
                              <div class="price-films cinema-price-films">
                                <span class="price-films__text">Цена: <span class="price-films__number free">бесплатно</span></span>
                              </div>
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
                              <div class="price-films cinema-price-films">
                                <span class="price-films__text">Цена: от <span class="price-films__number ">260 руб.</span></span>
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
              </div>
            </div>
            <!--  -->
            <div class="row-profile-item row-profile-item-wihtsteacker row-user-last">
              <div class="inner parent-sticker">
                <div class="sticker">
                  <div class="sticker-item">ВАМ ТАКЖЕ ПОНРАВИТСЯ</div>
                </div>
                <div class="row-user-content-list-item row-user-content-with-sticker">
                  <div class="row-list-tile clear">
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/pf1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/pf1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/pf1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/pf1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/pf1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                    <div class="list-tile-item">
                      <div class="list-tile-preview list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/nof.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="list-tile-text">
                        <div class="list-tile-value list-tile-name"><a href="#">Умница Уилл Хантинг</a></div>
                        <div class="list-tile-value list-tile-name-eng"><a href="#">Good Will Hunting</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pagelist-social profile-pagelist-social">
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
        	<?php include "sections/aside3.php"; ?>  
        </section>
    </div>
  <?php include "sections/footer.php"; ?>
  <!-- &Load Other CSS ================================================== -->

  <!-- &Scripts ==================================================-->
  <?php include "sections/scripts.php"; ?>
  <!-- /Scripts-->
</body>
</html>
