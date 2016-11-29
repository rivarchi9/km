<?php 
  $namePage = 'Настройки Пользователя'; // название страницы
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
            <form action="">
              <div class="list-info-content">
                <div class="list-info-content__title list-content-title">АВАТАР</div>
                <div class="row-list-info-item clear">
                  <div class="row-avatar-profile">
                    <div class="avatar-profile">
                      <div class="section-result-item list-preview">
                          <span class="image-portair">
                            <img class=" image-padding--white" src="app/img/content/no-avatar.jpg" alt="">
                          </span>
                      </div>
                    </div>
                    <div class="avatar-profile-add">
                      <div class="avatar-profile--mini-image avatar-profile-m"><img src="app/img/content/no-avatar-m.jpg" alt=""></div>
                      <div class="avatar-profile--mini-image avatar-profile-mm"><img src="app/img/content/no-avatar-mm.jpg" alt=""></div>
                    </div>
                  </div>
                  <div class="row-avatar-content">
                    <div class="avatar-upload-file">
                      <input type="file">
                      <p class="avatar-upload-warning">
                        Допустимы форматы: GIF, JPG, PNG.<br>Не более 5 Мб.<br>Не более 1600 px по большей стороне.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-info-content">
                <div class="list-info-content__title list-content-title">ЛОГИН И ПАРОЛЬ</div>
                <div class="row-list-info-item clear">
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Email</div>
                      <div class="row-input">
                        <input type="text" class="input-field" data-type="no-edit" value="Blokh@mail.ru" disabled>
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="field-add-icon field-add-icon-edit" data-type="edit"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Логин</div>
                      <div class="row-input">
                        <input type="text" class="input-field" value="Blokh" data-type="no-edit" disabled>
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="field-add-icon field-add-icon-edit" data-type="edit"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Текущий пароль</div>
                      <div class="row-input">
                        <input type="password" data-type="hide" class="input-field" value="Blokh">
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="check-hide" data-type="view"><input type="checkbox" checked >Скрыть</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Новый пароль</div>
                      <div class="row-input">
                        <input type="password" data-type="hide" class="input-field" value="Blokh">
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="check-hide" data-type="view"><input type="checkbox" checked >Скрыть</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Повтор пароля</div>
                      <div class="row-input">
                        <input type="password" data-type="hide" class="input-field" value="Blokh">
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="check-hide" data-type="view"><input type="checkbox" checked >Скрыть</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-button-form"><button class="button button4">СОХРАНИТЬ</button></div>
                </div>
              </div>
            </form>
            <form action="">
              <div class="list-info-content data-profile">
                <div class="list-info-content__title list-content-title">ДАННЫЕ ПОЛЬЗОВАТЕЛЯ</div>
                <div class="row-list-info-item clear">
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Имя</div>
                      <div class="row-input">
                        <input type="text" class="input-field" data-type="no-edit" value="Blokh" disabled>
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="field-add-icon field-add-icon-edit" data-type="edit"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Фамилия</div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Пол</div>
                      <div class="row-input">
                        <div class="row-radio-my">
                          <div class="radio-my active">
                            <div class="inner-radio">
                              <input type="radio">
                              <i class="my-radio"></i>
                            </div>
                            Мужской
                          </div>
                          <div class="radio-my">
                            <div class="inner-radio">
                              <input type="radio">
                              <i class="my-radio"></i>
                            </div>
                            Женский
                          </div>
                        </div>
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Дата рождения</div>
                      <div class="row-input">
                        <div class="row-dropdown-input">
                          <select name="day" id="" class="">
                            <option value="name" selected="selected">День</option>
                          </select> 
                          <select name="month" id="" class="">
                            <option value="name" selected="selected" title="1">Месяц</option>
                            <option value="1">Январь - January</option>
                            <option value="2">Февраль - February</option>
                            <option value="3">Март - March</option>
                            <option value="4">Апрель - April</option>
                            <option value="5">Май - May</option>
                            <option value="6">Июнь - June</option>
                            <option value="7">Июль - July</option>
                            <option value="8">Август - August</option>
                            <option value="9">Сентябрь - September</option>
                            <option value="10">Октябрь - October</option>
                            <option value="11">Ноябрь - November</option>
                            <option value="12">Декабрь - December</option>
                          </select> 
                          <select name="years" id="" class="">
                            <option value="name" selected="selected">Год</option>
                          </select> 
                        </div>
                        <div class="error-massage">
                          Ошибка в поле
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Город</div>
                      <div class="row-input">
                        <input type="text" class="input-field" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">О себе</div>
                      <div class="row-input">
                        <textarea type="text" class="input-field"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name">Интересы</div>
                      <div class="row-input">
                        <textarea type="text" class="input-field"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-vk"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="field-add-icon field-add-icon-link" data-type="link"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-fb"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                      <div class="row-field-add-icon">
                        <ul class="field-add-icon-list">
                          <li class="field-add-icon field-add-icon-link" data-type="link"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-mail"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-inst"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-tg"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-tw"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-gp"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-lj"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-icq"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-ok"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-form-input">
                    <div class="form-input-item clear">
                      <div class="value-name value-name-social value-name-social-sk"></div>
                      <div class="row-input">
                        <input type="text" class="input-field">
                      </div>
                    </div>
                  </div>
                  <div class="row-button-form"><button class="button button4">СОХРАНИТЬ</button></div>
                </div>
              </div>
            </form>
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
