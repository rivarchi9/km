
<?php 
  $namePage = 'НОВОСТИ Список'; // название страницы
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
        <a href="#"><img alt="" src="#" class="responsive-image banner__image" data-src-d="/app/img/content/banner.jpg" data-src-t="/app/img/content/banner.jpg" data-src-m="/app/img/content/banner.jpg"></a>
      </div>
      <div class="main-content-other-page clear">
        <!-- Контент -->
        <section class=" outer-section clear outer-content">
        	<!-- Контент -->
          <content class="page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          	<h1 class="pagetitle">НОВОСТИ КИНО</h1>
            <div class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta purus in enim luctus, rhoncus feugiat libero feugiat. Nunc accumsan pellentesque felis non lacinia. Nullam at euismod est, non rhoncus neque.
            </div>
            <div class="outer-pagelist-item clear">
              <div class="pagelist-item clear">
                <div class="pagelist-item-image news-pagelist-item-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class=" image-shadow ">
                    <a href="#"><img alt="" src="/app/img/content/3434.jpg" class="responsive-image  image-prewiew" data-src-d="/app/img/content/3434.jpg" data-src-t="/app/img/content/3434.jpg" data-src-m="/app/img/content/3434.jpg"></a>
                  </div>
                </div>
                <div class="pagelist-item-content news-pagelist-item-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="pagelist-item-title">
                    <a href="#">Фанаты киновселенной DC требуют закрыть Rotten Tomatoes</a>
                  </div>
                  <p>
                    На сайте Change.org <a href="#">собирают голоса</a> под петицией о закрытии сайта <a href="#">Rotten Tomatoes</a>. Причиной обструкции стали низкие оценки критиков, выставленные новому фильму киновселенной DC Comics «<a href="#">Отряд самоубийц</a>». 
                  </p>
                  <div class="pagelist-info">
                    <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                    <a href="#" class="pagelist__comments">8</a>
                  </div>
                  <a href="#" class="pagelist__link">Подробнее</a>
                </div>
              </div>
              <div class="pagelist-item clear">
                <div class="pagelist-item-image news-pagelist-item-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class=" image-shadow ">
                    <a href="#"><img alt="" src="/app/img/content/3434.jpg" class="responsive-image  image-prewiew" data-src-d="/app/img/content/3434.jpg" data-src-t="/app/img/content/3434.jpg" data-src-m="/app/img/content/3434.jpg"></a>
                  </div>
                </div>
                <div class="pagelist-item-content news-pagelist-item-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="pagelist-item-title">
                    <a href="#">Фанаты киновселенной DC требуют закрыть Rotten Tomatoes</a>
                  </div>
                  <p>
                    На сайте Change.org <a href="#">собирают голоса</a> под петицией о закрытии сайта <a href="#">Rotten Tomatoes</a>. Причиной обструкции стали низкие оценки критиков, выставленные новому фильму киновселенной DC Comics «<b><a href="#">Отряд самоубийц</a></b>». 
                  </p>
                  <div class="pagelist-info">
                    <span class="date__month">4 августа 2016</span>, <span class="date__hour">10:18</span>
                    <a href="#" class="pagelist__comments">8</a>
                  </div>
                  <a href="#" class="pagelist__link">Подробнее</a>
                </div>
              </div>
            </div>
            <div class="outer-pagelist-more">
              <span class="pagelist-more sprite-before"><span class="pagelist-more__text">Еще</span></span>
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
