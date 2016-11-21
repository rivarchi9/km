<?php
  $namePage = 'Рецензии'; // название страницы
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
            <ul class="nav-content-list clear">
              <li class="nav-content-item"><a href="films.php">О фильме</a></li>
              <li class="nav-content-item active"><a href="film_reviews.php">Рецензии<span class="number"></span></a></li>
              <li class="nav-content-item "><a href="film_actors.php">Актеры и создатели<span class="number"></span></a></li>
              <li class="nav-content-item "><a href="film_lightbox.php">Кадры <span class="number">38</span></a></li>
              <li class="nav-content-item "><a href="film_wall.php">Обои <span class="number">8</span></a></li>
              <li class="nav-content-item"><a href="film_trailers.php">Трейлеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="film_music.php">Саундтрек <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="film_poster.php">Постеры <span class="number">4</span></a></li>
              <li class="nav-content-item"><a href="film_awords.php">Награды <span class="number">4</span></a></li>
            </ul>
          </div>
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-reviews-list full-comments-reviews">
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
            <div class="row-pagelist-ligin">
              <div class="pagelist__title pagelist-ligin__title">ДОБАВИТЬ РЕЦЕНЗИЮ</div>
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
