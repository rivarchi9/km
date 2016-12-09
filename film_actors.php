<?php
  $namePage = 'Актеры'; // название страницы
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
        </div>
        <section class="outer-section clear outer-content">
        	<!-- Контент -->
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-actors">
              <div class="row-tabs">
                <ul class="tabs-list clear">
                  <li class="active" data-type-sliderGroup="actors_creaters" data-type-sliderButton="1"><a><span>АКТЕРЫ</span></a></li>
                  <li class=""  data-type-sliderGroup="actors_creaters" data-type-sliderButton="2"><a><span>СОЗДАТЕЛИ</span></a></li>
                </ul>
              </div>
              <div class="row-result-tabs active" data-type-sliderGroup="actors_creaters" data-type-sliderElem="1">
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
                        <div class="result-tabs-image">
                          <div class="list-preview" gallery-number="1">
                            <a href="app/img/content/ap1.jpg" class="parent">
                              <img src="app/img/content/ap1.jpg" alt="" class="">
                            </a>
                            <a href="app/img/content/ap2.jpg" class="parent hidden"></a>
                          </div>
                          <div class="result-tabs-caption"><a href="#">23 кадра, 1 видео</a></div>
                        </div>
                        <div class="main-folder-icon">
                          <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                            <a class="folder__icon icon"></a>
                            <div class="hint">Добавить в Избранное</div>
                            <div class="row-dropdown-folder">
                              <div class="dropdown-folder dropdown-folder-content">
                                <div class="dropdown-folder-title"><span>В избранное</span></div>
                                <ul class="dropdown-folder-list">
                                  <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
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
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
                        <div class="result-tabs-image">
                          <div class="list-preview" gallery-number="2">
                            <a href="app/img/content/ap1.jpg" class="parent">
                              <img src="app/img/content/ap1.jpg" alt="" class="">
                            </a>
                            <a href="app/img/content/ap2.jpg" class="parent hidden"></a>
                          </div>
                          <div class="result-tabs-caption"><a href="#">23 кадра, 1 видео</a></div>
                        </div>
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
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
                        <div class="result-tabs-image">
                          <div class="list-preview" gallery-number="3">
                            <a href="app/img/content/ap1.jpg" class="parent">
                              <img src="app/img/content/ap1.jpg" alt="" class="">
                            </a>
                            <a href="app/img/content/ap2.jpg" class="parent hidden"></a>
                          </div>
                          <div class="result-tabs-caption"><a href="#">23 кадра, 1 видео</a></div>
                        </div>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-result-tabs" data-type-sliderGroup="actors_creaters" data-type-sliderElem="2">
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
                        <div class="main-folder-icon">
                          <div class="parent-dropdown-folder row-icon-add row-icon-add--white icon-folder">
                            <a class="folder__icon icon"></a>
                            <div class="hint">Добавить в Избранное</div>
                            <div class="row-dropdown-folder">
                              <div class="dropdown-folder dropdown-folder-content">
                                <div class="dropdown-folder-title"><span>В избранное</span></div>
                                <ul class="dropdown-folder-list">
                                  <li><i class="dropdown-folder-content-icon"><span>1</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>25</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>3</span></i><span class="name-icon">Избранное</span></li>
                                  <li><i class="dropdown-folder-content-icon"><span>488</span></i><span class="name-icon">Избранное</span></li>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item section-result-item-actor   list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/s1.jpg" alt="">
                        </span>
                      </a>
                    </div>
                    <div class="section-result-item item2 clear">
                      <div class="row-result-tabs-item row-result-tabs-item--left">
                        <div class="name"><a href="actor.php">СТИВ ХЭНКС</a></div>
                        <div class="name__eng">STEVE HANKS</div>
                        <div class="section-result-info">
                          <div class="actors-info-content">
                            <ul>
                              <li class="actors-info-role">Роль - Paul Edgecomb</li>
                              <li class="actors-info-year">1999</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row-result-tabs-item--right">
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
