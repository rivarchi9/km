
<?php 
  $namePage = 'Вход и регистрация'; // название страницы
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
      <div class="banner no-mobile">
        <a href="#"><img alt="" src="#" class="responsive-image banner__image" data-src-d="/app/img/content/banner.jpg" data-src-t="/app/img/content/banner.jpg" data-src-m="/app/img/content/banner.jpg"></a>
      </div>
      <div class="main-content-other-page clear">
        <!-- Контент -->
        <section class=" outer-section clear outer-content">
        	<!-- Контент -->
          <content class="page-section-content page-no-aside section-content content-outer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="outer-form login">
              <div class="form-title pagetitle">ВХОД</div>
              <div class="form-content">
                <form>
                  <ul>
                    <li><span>Логин:</span> <input type="text"> </li>
                    <li><span>Пароль:</span> <input type="text">  </li>
                  </ul>
                  <button class="button button4">войти</button>
                  <div class="row-forgot-password"><a href="#" class="forgot-password">Забыли пароль?</a></div>
                </form>
                <div class="reg">Еще нет аккаунта? <a href="#">Пожалуйста, зарегистрируйтесь</a></div>
              </div>
              <div class="form-add">
                <div class="form-social-text">Или войдите через акканут социальных сетей:</div>
                <div class="form-social">
                  <ul>
                    <li class="form-social-icon"><a href="#" class="vk"></a></li>
                    <li class="form-social-icon"><a href="#" class="fb"></a></li>
                    <li class="form-social-icon"><a href="#" class="ok"></a></li>
                    <li class="form-social-icon"><a href="#" class="tw"></a></li>
                    <li class="form-social-icon"><a href="#" class="gplus"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="outer-form registration">
              <div class="form-title pagetitle">РЕГИСТРАЦИЯ</div>
              <div class="form-welcome">
                <div class="form-welcome-title">Добро пожаловать на KINOMANIA.RU!</div>
                <div class="form-welcome-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet congue tellus ac hendrerit. Morbi aliquam tincidunt ipsum. Sed congue lorem eget quam lacinia consequat.</div>
              </div>
              <div class="form-content">
                <form>
                  <ul>
                    <li><span>Логин:</span> <input type="text"> </li>
                    <li><span>Пароль:</span> <input type="text">  </li>
                    <li><span>Email:</span> <input type="text">  </li>
                  </ul>
                  <button class="button button4">создать аккаунт</button>
                </form>
              </div>
              <div class="form-add">
                <div class="form-social-text">Или войдите через акканут социальных сетей:</div>
                <div class="form-social">
                  <ul>
                    <li class="form-social-icon"><a href="#" class="vk"></a></li>
                    <li class="form-social-icon"><a href="#" class="fb"></a></li>
                    <li class="form-social-icon"><a href="#" class="ok"></a></li>
                    <li class="form-social-icon"><a href="#" class="tw"></a></li>
                    <li class="form-social-icon"><a href="#" class="gplus"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </content> 
        </section>
    </div>
  <?php include "sections/footer.php"; ?>
  <!-- &Load Other CSS ================================================== -->

  <!-- &Scripts ==================================================-->
  <?php include "sections/scripts.php"; ?>
  <!-- /Scripts-->
</body>
</html>
