
<?php 
  $namePage = 'ПОИСК АКТЕРОВ'; // название страницы
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
          <content class="page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h1 class="pagetitle">ПОИСК АКТЕРОВ</h1> 
          	<form action="">
              <div class="row-casting-filters clear">
               <div class="casting-filters-item casting-filters-left">
                 <div class="row-input row-input-table">
                   <label class="filters-input filters-input-name">Пол</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                     <div class="row-checkbox">
                      <div class="checkbox">
                        <input type="checkbox">
                        <ins class="checkbox-icon"></ins>
                      </div>
                      <div class="checkbox-name">Мужской</div>
                     </div>
                     <div class="row-checkbox">
                      <div class="checkbox">
                        <input type="checkbox">
                        <ins class="checkbox-icon"></ins>
                      </div>
                      <div class="checkbox-name">Женский</div>
                     </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table">
                   <label class="filters-input filters-input-name">Возраст</label>
                   <div class="filters-input filters-input-value clear-inline-block input-with-caption">
                     <div class="row-table-input">
                       <span class="table-input-name">от</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                     <div class="row-table-input">
                       <span class="table-input-name">до</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table">
                   <div class="filters-input filters-input-name">Наличие</div>
                   <div class="filters-input filters-input-value clear-inline-block">
                     <div class="row-checkbox">
                      <div class="checkbox">
                        <input type="checkbox">
                        <ins class="checkbox-icon"></ins>
                      </div>
                      <div class="checkbox-name">Фото</div>
                     </div>
                     <div class="row-checkbox">
                      <div class="checkbox">
                        <input type="checkbox">
                        <ins class="checkbox-icon"></ins>
                      </div>
                      <div class="checkbox-name">Видео</div>
                     </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table">
                   <label class="filters-input filters-input-name">Рост</label>
                   <div class="filters-input filters-input-value clear-inline-block input-with-caption">
                     <div class="row-table-input">
                       <span class="table-input-name">от</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                     <div class="row-table-input">
                       <span class="table-input-name">до</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table">
                   <label class="filters-input filters-input-name">Вес</label>
                   <div class="filters-input filters-input-value clear-inline-block input-with-caption">
                     <div class="row-table-input">
                       <span class="table-input-name">от</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                     <div class="row-table-input">
                       <span class="table-input-name">до</span>
                       <input type="text" class="input-field field--mini">
                     </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name">Этнический тип</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input">
                      <select name="name__value">
                        <option value="name" selected="selected" title="1">Любой</option>
                      </select>
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name">Цвет волос</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input">
                      <select name="name__value">
                        <option value="name" selected="selected" title="1">Любой</option>
                      </select>
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name">Цвет глаз</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input">
                      <select name="name__value">
                        <option value="name" selected="selected" title="1">Любой</option>
                      </select>
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name required">Спорт</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input row-dropdown-input-text">
                      <!-- <select name="name__value">
                        <option value="name" selected="selected" title="1">Выберите из списка</option>
                      </select> -->
                      <input type="text" class="input-field field--mini">
                    </div>

                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name required">Ин. язык</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input row-dropdown-input-text">
                      <input type="text" class="input-field field--mini">
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name required">Муз. инструмент</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input row-dropdown-input-text">
                      <input type="text" class="input-field field--mini">
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name required">Танец</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input row-dropdown-input-text">
                      <input type="text" class="input-field field--mini">
                    </div>
                   </div>
                 </div>
                 <div class="row-input row-input-table row-input-select">
                   <label class="filters-input filters-input-name required">Пение</label>
                   <div class="filters-input filters-input-value clear-inline-block">
                    <div class="row-dropdown-input row-dropdown-input-text">
                      <input type="text" class="input-field field--mini">
                    </div>
                   </div>
                 </div>
               </div>
               <div class="casting-filters-item casting-filters-right casting-filters-items">
                 <label class="filters-input filters-input-name">Кастинг агенства</label>
                 <!--  -->
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox" checked="checked">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Sevensense</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Талантино</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Startup Project</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Жар-птица</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Лены Хван</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Март</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Киногород</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Агни Кино</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Аг-во Бочаровой</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Товарищ-во “КВ”</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Лучший кастинг</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Аг-во Лапшиной</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">London</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">VBG Cast</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">face-фильм</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">БЕРЕГ</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Август</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Distar Group</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">МАКС</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">NEKSTUDIO</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">GM Consulting & Production</div>
                  </div>
                  <div class="row-checkbox row-checkbox-block">
                    <div class="checkbox">
                      <input type="checkbox">
                      <ins class="checkbox-icon"></ins>
                    </div>
                    <div class="checkbox-name">Casting-cinema</div>
                  </div>
                 <!--  -->
               </div>
              </div>
              <div class="input-table-place">
                 <div class="warning-lable">Поля поддерживают ввод нескольких значений через запятую</div>
                 <button class="button button4">ИСКАТЬ</button>
               </div>
            </form>
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
