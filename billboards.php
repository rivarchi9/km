
<?php 
  $namePage = 'АФИША'; // название страницы
  include "sections/head.php"; // вывод head
  $classAside = 'no-display';
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
          <content class="page-section-content section-content content-outer col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="row-page">
            <h1 class="pagetitle">АФИША</h1>
            <div class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta purus in enim luctus, rhoncus feugiat libero feugiat. Nunc accumsan pellentesque felis non lacinia.
            </div>
            <div class="row-outside row-outside-bill bg-color-one row-outside-art clear">
              <div class="inner-outside ">
                <div class="bill-nav">
                  <ul class="part-filter-list clear">
                    <li class="part-filter-list__name">Сортировать</li>
                    <li class="active"><a href=""><span>по количеству сеансов</span></a></li>
                    <li><a href=""><span>самое новое</span></a></li>
                    <li><a href=""><span>по алфавиту</span></a></li>
                  </ul>
                </div>
                <!--  -->
                <div class="row-bill-input">
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="row-input">
                        <div class="row-dropdown-input">
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
                          <select name="time" id="" class="">
                              <option value="name" selected="selected" title="1">Время сеанса</option>
                            </select> </div>
                          <div class="bill-input-item">
                            <select name="ganre" id="" class="">
                              <option value="name" selected="selected">Жанр фильма</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-bill-result tile-bill-result--normal">
              <div class="bill-result-item">
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
                          <div class="row-section-result-nav">
                            <ul class="section-result-nav section-result-nav--black">
                              <li><a href="#">О фильме <span class="number"></span></a></li>
                              <li><a href="#">Кадры <span class="number">(30)</span></a></li>
                              <li><a href="#">Обои <span class="number">(45)</span></a></li>
                              <li><a href="#">Трейлеры <span class="number">(10)</span></a></li>
                              <li><a href="#">Саундтреки <span class="number">(1)</span></a></li>
                              <li><a href="#">Постеры <span class="number">(39)</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="bill-result-info bill-result-info-two">
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
              <div class="bill-result-item">
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item item1  list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/bb1.jpg" alt="">
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
                          <div class="row-section-result-nav">
                            <ul class="section-result-nav section-result-nav--black">
                              <li><a href="#">О фильме <span class="number"></span></a></li>
                              <li><a href="#">Кадры <span class="number">(30)</span></a></li>
                              <li><a href="#">Обои <span class="number">(45)</span></a></li>
                              <li><a href="#">Трейлеры <span class="number">(10)</span></a></li>
                              <li><a href="#">Саундтреки <span class="number">(1)</span></a></li>
                              <li><a href="#">Постеры <span class="number">(39)</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="bill-result-info bill-result-info-two">
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
              <div class="bill-result-item">
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item item1  list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/bb1.jpg" alt="">
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
                          <div class="row-section-result-nav">
                            <ul class="section-result-nav section-result-nav--black">
                              <li><a href="#">О фильме <span class="number"></span></a></li>
                              <li><a href="#">Кадры <span class="number">(30)</span></a></li>
                              <li><a href="#">Обои <span class="number">(45)</span></a></li>
                              <li><a href="#">Трейлеры <span class="number">(10)</span></a></li>
                              <li><a href="#">Саундтреки <span class="number">(1)</span></a></li>
                              <li><a href="#">Постеры <span class="number">(39)</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="bill-result-info bill-result-info-two">
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
              <div class="bill-result-item">
                <div class="list-content-item-inner">
                  <div class="section-result-content clear">
                    <div class="section-result-item item1  list-preview">
                      <a href="#">
                        <span>
                          <img class=" image-padding--white" src="app/img/content/bb1.jpg" alt="">
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
                          <div class="row-section-result-nav">
                            <ul class="section-result-nav section-result-nav--black">
                              <li><a href="#">О фильме <span class="number"></span></a></li>
                              <li><a href="#">Кадры <span class="number">(30)</span></a></li>
                              <li><a href="#">Обои <span class="number">(45)</span></a></li>
                              <li><a href="#">Трейлеры <span class="number">(10)</span></a></li>
                              <li><a href="#">Саундтреки <span class="number">(1)</span></a></li>
                              <li><a href="#">Постеры <span class="number">(39)</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="bill-result-info bill-result-info-two">
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
            </div>
            <div class="row-add__link row-bill-add__link">
              <a href="#" class="add__link"><span>Показать еще</span></a>
            </div>
            <div class="pagelist-social style-pagelist-social">
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
