
<?php
  $namePage = 'Релизы'; // название страницы
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
        <section class=" outer-section clear outer-content">
        	<!-- Контент -->
          <content class="page-section-content section-content content-outer content-top--padding col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row-list-nav-three">
              <ul class="list-nav-second clear">
                <li class="active"><a href="">ПРЕМЬЕРЫ РФ</a></li>
                <li><a href="">ПРЕМЬЕРЫ США</a></li>
              </ul>
            </div>
          	<h1 class="pagetitle pagetitle-two">ГРАФИК ПРЕМЬЕР РФ</h1>
            <div class="row-releases">
              <div class="row-outside row-outside-releases bg-color-one row-outside-art clear">
                <div class="inner-outside ">
                  <!--  -->
                  <div class="row-bill-input row-releases-input">
                    <div class="row-form-input">
                      <div class="form-input-item clear">
                        <div class="row-input row-input-inline">
                          <div class="row-dropdown-input clear">
                            <div class="bill-input-item">
                              <select name="month" id="" class="">
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11" selected="selected">Ноябрь</option>
                                <option value="12">Декабрь</option>
                              </select>
                            </div>
                            <div class="bill-input-item">
                              <select name="years" id="" class="">
                                <option value="name" selected="selected">2016</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-releases-content">
                <div class="content-page__titile content-page__titile-border">
                  <h2>БЛИЖАЙШИЕ ПРЕМЬЕРЫ</h2>
                </div>
                <div class="row-releases-item">
                  <div class="releases-item">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="section-result-item item1  list-preview">
                          <a href="#">
                            <span>
                              <img class=" image-padding--white" src="app/img/content/1_d.jpg" alt="">
                            </span>
                          </a>
                        </div>
                        <div class="section-result-item item2 clear">
                          <div class="bill-result-info bill-result-info-one">
                            <div class="name"><a href="#">ТАЙНАЯ ЖИЗНЬ ДОМАШНИХ ЖИВОТНЫХ</a></div>
                            <div class="name__eng">SECRET LIFE OF PETS</div>
                            <div class="section-result-info">
                              <div class="cinema">
                                <span>США, Япония, 2016, Реж.</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Ярроу Чейни</a></li>
                                  <li><a href="#">Крис Рено</a></li>
                                </ul>
                              </div>
                              <div class="releases-ganre">
                                <ul class="releases-ganre-list">
                                  <li>Комедия</li>
                                  <li>мультфильм</li>
                                  <li>приключения</li>
                                </ul>
                              </div>
                              <div class="cinema">
                                <span>В ролях</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Луис С.К</a></li>
                                  <li><a href="#">Эрик Стоунстрит</a></li>
                                  <li><a href="#">Кевин Харт</a></li>
                                  <li><a href="#">Дженни Слейт</a></li>
                                  <li><a href="#">Элли Кемпер</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="bill-result-info bill-result-info-two">
                            <div class="row-info-list-cinema">
                              <div class="releases-date">
                                <div class="releases-date-number">27</div>
                                <div class="releases-date-info">
                                  <div class="releases-date-month">ОКТ</div>
                                  <div class="releases-date-years">2016</div>
                                </div>
                              </div>
                              <div class="releases-made">
                                <a href="#">20th Century Fox</a>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <a class="star__icon icon"></a>
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
                  </div>
                  <div class="releases-item">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="section-result-item item1  list-preview">
                          <a href="#">
                            <span>
                              <img class=" image-padding--white" src="app/img/content/1_d.jpg" alt="">
                            </span>
                          </a>
                        </div>
                        <div class="section-result-item item2 clear">
                          <div class="bill-result-info bill-result-info-one">
                            <div class="name"><a href="#">ТАЙНАЯ ЖИЗНЬ ДОМАШНИХ ЖИВОТНЫХ</a></div>
                            <div class="name__eng">SECRET LIFE OF PETS</div>
                            <div class="section-result-info">
                              <div class="cinema">
                                <span>США, Япония, 2016, Реж.</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Ярроу Чейни</a></li>
                                  <li><a href="#">Крис Рено</a></li>
                                </ul>
                              </div>
                              <div class="releases-ganre">
                                <ul class="releases-ganre-list">
                                  <li>Комедия</li>
                                  <li>мультфильм</li>
                                  <li>приключения</li>
                                </ul>
                              </div>
                              <div class="cinema">
                                <span>В ролях</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Луис С.К</a></li>
                                  <li><a href="#">Эрик Стоунстрит</a></li>
                                  <li><a href="#">Кевин Харт</a></li>
                                  <li><a href="#">Дженни Слейт</a></li>
                                  <li><a href="#">Элли Кемпер</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="bill-result-info bill-result-info-two">
                            <div class="row-info-list-cinema">
                              <div class="releases-date">
                                <div class="releases-date-number">27</div>
                                <div class="releases-date-info">
                                  <div class="releases-date-month">ОКТ</div>
                                  <div class="releases-date-years">2016</div>
                                </div>
                              </div>
                              <div class="releases-made">
                                <a href="#">20th Century Fox</a>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <a class="star__icon icon"></a>
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
                  </div>
                  <div class="releases-item">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="section-result-item item1  list-preview">
                          <a href="#">
                            <span>
                              <img class=" image-padding--white" src="app/img/content/1_d.jpg" alt="">
                            </span>
                          </a>
                        </div>
                        <div class="section-result-item item2 clear">
                          <div class="bill-result-info bill-result-info-one">
                            <div class="name"><a href="#">ТАЙНАЯ ЖИЗНЬ ДОМАШНИХ ЖИВОТНЫХ</a></div>
                            <div class="name__eng">SECRET LIFE OF PETS</div>
                            <div class="section-result-info">
                              <div class="cinema">
                                <span>США, Япония, 2016, Реж.</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Ярроу Чейни</a></li>
                                  <li><a href="#">Крис Рено</a></li>
                                </ul>
                              </div>
                              <div class="releases-ganre">
                                <ul class="releases-ganre-list">
                                  <li>Комедия</li>
                                  <li>мультфильм</li>
                                  <li>приключения</li>
                                </ul>
                              </div>
                              <div class="cinema">
                                <span>В ролях</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Луис С.К</a></li>
                                  <li><a href="#">Эрик Стоунстрит</a></li>
                                  <li><a href="#">Кевин Харт</a></li>
                                  <li><a href="#">Дженни Слейт</a></li>
                                  <li><a href="#">Элли Кемпер</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="bill-result-info bill-result-info-two">
                            <div class="row-info-list-cinema">
                              <div class="releases-date">
                                <div class="releases-date-number"></div>
                                <div class="releases-date-info">
                                  <div class="releases-date-month">осень</div>
                                  <div class="releases-date-years">2016</div>
                                </div>
                              </div>
                              <div class="releases-made">
                                <a href="#">20th Century Fox</a>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <a class="star__icon icon"></a>
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
                  </div>
                  <div class="releases-item">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="section-result-item item1  list-preview">
                          <a href="#">
                            <span>
                              <img class=" image-padding--white" src="app/img/content/1_d.jpg" alt="">
                            </span>
                          </a>
                        </div>
                        <div class="section-result-item item2 clear">
                          <div class="bill-result-info bill-result-info-one">
                            <div class="name"><a href="#">ТАЙНАЯ ЖИЗНЬ ДОМАШНИХ ЖИВОТНЫХ</a></div>
                            <div class="name__eng">SECRET LIFE OF PETS</div>
                            <div class="section-result-info">
                              <div class="cinema">
                                <span>США, Япония, 2016, Реж.</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Ярроу Чейни</a></li>
                                  <li><a href="#">Крис Рено</a></li>
                                </ul>
                              </div>
                              <div class="releases-ganre">
                                <ul class="releases-ganre-list">
                                  <li>Комедия</li>
                                  <li>мультфильм</li>
                                  <li>приключения</li>
                                </ul>
                              </div>
                              <div class="cinema">
                                <span>В ролях</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Луис С.К</a></li>
                                  <li><a href="#">Эрик Стоунстрит</a></li>
                                  <li><a href="#">Кевин Харт</a></li>
                                  <li><a href="#">Дженни Слейт</a></li>
                                  <li><a href="#">Элли Кемпер</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="bill-result-info bill-result-info-two">
                            <div class="row-info-list-cinema">
                              <div class="releases-date">
                                <div class="releases-date-number"></div>
                                <div class="releases-date-info">
                                  <div class="releases-date-month">осень</div>
                                  <div class="releases-date-years">2016</div>
                                </div>
                              </div>
                              <div class="releases-made">
                                <a href="#">20th Century Fox</a>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <a class="star__icon icon"></a>
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
                  </div>
                  <div class="releases-item">
                    <div class="list-content-item-inner">
                      <div class="section-result-content clear">
                        <div class="section-result-item item1  list-preview">
                          <a href="#">
                            <span>
                              <img class=" image-padding--white" src="app/img/content/1_d.jpg" alt="">
                            </span>
                          </a>
                        </div>
                        <div class="section-result-item item2 clear">
                          <div class="bill-result-info bill-result-info-one">
                            <div class="name"><a href="#">ТАЙНАЯ ЖИЗНЬ ДОМАШНИХ ЖИВОТНЫХ</a></div>
                            <div class="name__eng">SECRET LIFE OF PETS</div>
                            <div class="section-result-info">
                              <div class="cinema">
                                <span>США, Япония, 2016, Реж.</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Ярроу Чейни</a></li>
                                  <li><a href="#">Крис Рено</a></li>
                                </ul>
                              </div>
                              <div class="releases-ganre">
                                <ul class="releases-ganre-list">
                                  <li>Комедия</li>
                                  <li>мультфильм</li>
                                  <li>приключения</li>
                                </ul>
                              </div>
                              <div class="cinema">
                                <span>В ролях</span>
                                <ul class="cinema-list list--horizontal">
                                  <li><a href="#">Луис С.К</a></li>
                                  <li><a href="#">Эрик Стоунстрит</a></li>
                                  <li><a href="#">Кевин Харт</a></li>
                                  <li><a href="#">Дженни Слейт</a></li>
                                  <li><a href="#">Элли Кемпер</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="bill-result-info bill-result-info-two">
                            <div class="row-info-list-cinema">
                              <div class="releases-date">
                                <div class="releases-date-number"></div>
                                <div class="releases-date-info">
                                  <div class="releases-date-month">осень</div>
                                  <div class="releases-date-years">2016</div>
                                </div>
                              </div>
                              <div class="releases-made">
                                <a href="#">20th Century Fox</a>
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
                                <div class="row-icon-add row-icon-add--white icon-star">
                                  <a class="star__icon icon"></a>
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
                  </div>
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
