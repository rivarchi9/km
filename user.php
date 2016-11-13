<?php 
  $namePage = 'Пользователь'; // название страницы
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
            <ul class="nav-content-list clear">
              <li class="nav-content-item active"><a href="user.php">Профиль</a></li>
              <li class="nav-content-item no-active"><span>Рецензии</span></li>
              <li class="nav-content-item no-active"><span>Отзывы</span></li>
              <li class="nav-content-item"><a href="userComments.php">Комментарии <span class="number">38</span></a></li>
              <li class="nav-content-item"><a href="userRaiting.php">Оценки <span class="number">8</span></a></li>
              <li class="nav-content-item"><a href="userFilms.php">Фильмы <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="userPeople.php">Персоналии <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="userSetting.php">Настройки</a></li>
            </ul>
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
                  <div class="sticker-item">БЛОГ</div>
                </div>
              </div>
              <div class="row-profile-item-content">
                <div class="profile-post-item">
                  <a href="#" class="profile-post-item__title">No Country for Old Men</a>
                  <div class="profile-post-item__content">Друзья, товарищи, братья и сёстры (как недавно <a href="#">выяснилось</a>, все братья — сёстры). Имеется небольшое объявление по «распорядку дня», которое без продолжительных вступлений и хотелось бы озвучить. </div>
                  <div class="profile-post-item__date">
                    <div class="pagelist-info">
                      <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                      <a href="#" class="pagelist__comments">8</a>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="pagelist__link">Подробнее</a>
                  </div>
                </div>
                <div class="profile-post-item">
                  <a href="#" class="profile-post-item__title">No Country for Old Men</a>
                  <div class="profile-post-item__content">Так вот про «Оскар». Если не ходить вокруг да около, что имеем в сухом остатке: 1. Лучшим фильмом стал фильм-расследование, основанный на реальных событиях и заставляющий задуматься о том, что происходит здесь-и-сейчас, в реальном мире, а не в фантазиях (пусть и великолепно перенесённых на экран) голливудских сценаристов. 2. Ди Каприо наконец получил «Оскар». 3. «Безумный Макс» собрал больше всех статуэток.4. Прекрасный фильм «Из машины» получил награду в самой неожиданной для себя номинации. 5. Гениальному Морриконе будет чем гвоздь в квартире забить.  </div>
                  <div class="profile-post-item__date">
                    <div class="pagelist-info">
                      <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                      <a href="#" class="pagelist__comments">8</a>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="pagelist__link">Подробнее</a>
                  </div>
                </div>
                <div class="profile-post-item">
                  <a href="#" class="profile-post-item__title">No Country for Old Men</a>
                  <div class="profile-post-item__content">Так вот про «Оскар». Если не ходить вокруг да около, что имеем в сухом остатке: 1. Лучшим фильмом стал фильм-расследование, основанный на реальных событиях и заставляющий задуматься о том, что происходит здесь-и-сейчас, в реальном мире, а не в фантазиях (пусть и великолепно перенесённых на экран) голливудских сценаристов. 2. Ди Каприо наконец получил «Оскар». 3. «Безумный Макс» собрал больше всех статуэток.4. Прекрасный фильм «Из машины» получил награду в самой неожиданной для себя номинации. 5. Гениальному Морриконе будет чем гвоздь в квартире забить.  </div>
                  <div class="profile-post-item__date">
                    <div class="pagelist-info">
                      <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                      <a href="#" class="pagelist__comments">8</a>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="pagelist__link">Подробнее</a>
                  </div>
                </div>
                <div class="profile-post-item">
                  <a href="#" class="profile-post-item__title">No Country for Old Men</a>
                  <div class="profile-post-item__content">Так вот про «Оскар». Если не ходить вокруг да около, что имеем в сухом остатке: 1. Лучшим фильмом стал фильм-расследование, основанный на реальных событиях и заставляющий задуматься о том, что происходит здесь-и-сейчас, в реальном мире, а не в фантазиях (пусть и великолепно перенесённых на экран) голливудских сценаристов. 2. Ди Каприо наконец получил «Оскар». 3. «Безумный Макс» собрал больше всех статуэток.4. Прекрасный фильм «Из машины» получил награду в самой неожиданной для себя номинации. 5. Гениальному Морриконе будет чем гвоздь в квартире забить.  </div>
                  <div class="profile-post-item__date">
                    <div class="pagelist-info">
                      <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                      <a href="#" class="pagelist__comments">8</a>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="pagelist__link">Подробнее</a>
                  </div>
                </div>
                <div class="outer-pagelist-more">
                  <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                </div>
              </div>
            </div>
            <div class="row-profile-item row-profile-item-wihtsteacker ">
              <div class="inner parent-sticker">
                <div class="sticker">
                  <div class="sticker-item">КОММЕНТАРИИ</div>
                </div>
              </div>
              <div class="row-profile-item-content">
                <div class="profile-comments profile-section-item">
                  <div class="profile-comments__item clear">
                    <div class="profile-comment-preview profile-comment--left">
                      <div class="profile-comment-heading">К статье</div>
                      <a href="#"><img src="app/img/content/cimg.jpg" alt="" class="profile-comment-image"></a>
                      <div class="profile-comment-title">
                        <a href="#">Коротко о главном</a>
                      </div>
                    </div>
                    <div class="profile-comment-content profile-comment--right">
                      <div class="profile-comment-heading">28 февраля 2016, 17:17</div>
                      <div class="profile-comment-value">
                        Нет.
                      </div>
                    </div>
                  </div>
                  <div class="profile-comments__item clear">
                    <div class="profile-comment-preview profile-comment--left">
                      <div class="profile-comment-heading">К статье</div>
                      <a href="#"><img src="app/img/content/cimg.jpg" alt="" class="profile-comment-image"></a>
                      <div class="profile-comment-title">
                        <a href="#">Коротко о главном</a>
                      </div>
                    </div>
                    <div class="profile-comment-content profile-comment--right">
                      <div class="profile-comment-heading">28 февраля 2016, 17:17</div>
                      <div class="profile-comment-value">
                        В каждом сезоне классических X-Files была одна серия, которая явно выпадала из контекста. В этом был свой шарм, но там и серий было от 20 до 25. А когда у тебя в колоде всего 6 карт (серий), выглядят такие “выходки” куда менее однозначно.
                      </div>
                    </div>
                  </div>
                  <div class="profile-comments__item clear">
                    <div class="profile-comment-preview profile-comment--left">
                      <div class="profile-comment-heading">К статье</div>
                      <a href="#"><img src="app/img/content/cimg.jpg" alt="" class="profile-comment-image"></a>
                      <div class="profile-comment-title">
                        <a href="#">Коротко о главном</a>
                      </div>
                    </div>
                    <div class="profile-comment-content profile-comment--right">
                      <div class="profile-comment-heading">28 февраля 2016, 17:17</div>
                      <div class="profile-comment-value">
                        <blockquote>Не очень понял P.S. Айзэк вроде давно таковым является. Неужели в «Мохаве» что-то принципиально новое преподносит?!</blockquote>
                        На мой взгляд, он ещё в процессе. “Мохаве” это только подтверждает.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="outer-pagelist-more">
                  <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
                </div>
              </div>
            </div> 
            <div class="row-profile-item row-profile-item-wihtsteacker ">
              <div class="inner parent-sticker">
                <div class="sticker">
                  <div class="sticker-item">ОЦЕНКИ</div>
                </div>
              </div>
              <div class="row-profile-item-content">
                <div class="rating-profile profile-section-item">
                  <div class="rating-profile-item">
                    <div class="section-result-content clear">
                      <div class="section-result-item item1  list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/r1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="section-result-item item2">
                        <div class="profile-cinema-heading">28 февраля 2016, 17:17</div>
                        <div class="name"><a href="#">МАСКА</a></div>
                        <div class="name__eng">MASK</div>
                        <div class="star-rating">
                          <span class="number">10</span>
                          из 10
                        </div>
                        <div class="main-raiting">Общий рейтинг фильма: <span class="number">869</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="rating-profile-item">
                    <div class="section-result-content clear">
                      <div class="section-result-item item1  list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/r1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="section-result-item item2">
                        <div class="profile-cinema-heading">28 февраля 2016, 17:17</div>
                        <div class="name"><a href="#">МАСКА</a></div>
                        <div class="name__eng">MASK</div>
                        <div class="star-rating">
                          <span class="number">10</span>
                          из 10
                        </div>
                        <div class="main-raiting">Общий рейтинг фильма: <span class="number">869</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="rating-profile-item">
                    <div class="section-result-content clear">
                      <div class="section-result-item item1  list-preview">
                        <a href="#">
                          <span>
                            <img class=" image-padding--white" src="app/img/content/r1.jpg" alt="">
                          </span>
                        </a>
                      </div>
                      <div class="section-result-item item2">
                        <div class="profile-cinema-heading">28 февраля 2016, 17:17</div>
                        <div class="name"><a href="#">МАСКА</a></div>
                        <div class="name__eng">MASK</div>
                        <div class="star-rating">
                          <span class="number">10</span>
                          из 10
                        </div>
                        <div class="main-raiting">Общий рейтинг фильма: <span class="number">869</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="outer-pagelist-more">
                  <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
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
