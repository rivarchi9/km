<?php 
  $namePage = 'Персоналии Пользователя'; // название страницы
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
          
          <div class="list-content list-content-tile">
            <div class="row-list-tile clear">
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
              <div class="list-tile-item">
                <div class="list-tile-preview list-preview">
                  <a href="#">
                    <span>
                      <img class=" image-padding--white" src="app/img/content/nop.jpg" alt="">
                    </span>
                  </a>
                </div>
                <div class="list-tile-text">
                  <div class="list-tile-value list-tile-name"><a href="#">Том Хэнкс</a></div>
                  <div class="list-tile-value list-tile-name-eng"><a href="#">Tom Hanks</a></div>
                </div>
              </div>
            </div>
          </div>   
          <div class="outer-pagelist-more">
            <span class="pagelist-more sprite-before" data-type-openclose-button="hide-text"><span class="pagelist-more__text">Еще</span></span>
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
