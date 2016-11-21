<?php
  $namePage = 'Блог Статья'; // название страницы
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
          <content class="pagelist page-section-content section-content content-outer outer-vert col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="row-blog-item">
            <div class="page-item-title">На первый, второй — рассчитайсь!</div>
            <div class="page-item-info clear">
              <div class="page-item-info--left">
                <div class="page-item-info__author">
                  <a href="#" class="author blog-author"><img src="app/img/content/author.jpg" alt="Автор" title="Автор"></a> <a href="#" class="author__name">Станислав Никулин</a>
                </div>
              </div>
              <div class="page-item-info--right">
                <div class="page-item-info__date blog-date-author">29 февраля 2016, 21:07</div>
              </div>
            </div>
            <div class="page-item-content clear">
              <div class=" image-shadow page-item__image">
                <a href="news-item.php"><img alt="" src="/app/img/content/b1.jpg" class="responsive-image  image-prewiew" data-src-d="/app/img/content/b1.jpg" data-src-t="/app/img/content/b1.jpg" data-src-m="/app/img/content/b1.jpg"></a>
              </div>
              <div class="page-content-text">
                <p>Так вот про «Оскар». Если не ходить вокруг да около, что имеем в сухом остатке: 1. Лучшим фильмом стал фильм-расследование, основанный на реальных событиях и заставляющий задуматься о том, что происходит здесь-и-сейчас, в реальном мире, а не в фантазиях (пусть и великолепно перенесённых на экран) голливудских сценаристов. 2. <a href="#">Ди Каприо</a> наконец получил «Оскар». 3. «Безумный Макс» собрал больше всех статуэток. 4. Прекрасный фильм «Из машины» получил награду в самой неожиданной для себя номинации. 5. Гениальному Морриконе будет чем гвоздь в квартире забить. </p>
                <p>Если чуть подробнее, то вручением «В центре внимания» главной награды церемонии Киноакадемия сформулировала вполне внятный месседж, и он (месседж) во всех смыслах правилен и важен. Изначально было ясно, что по-настоящему в номинации «Лучший фильм» соревнуются три ленты — «Выживший», «Игр на понижение» и, собственно, победитель. Пожалуй, самым грустным исходом был бы «Оскар» фильму Иньярриту. Фильму любопытному, но в творческой биографии режиссёра фактически проходному. </p>
                <p>Ди Каприо, признаться, несколько жаль (насколько вообще может быть жаль одного из триумфаторов церемонии). Он, вне всяких сомнений, артист с большой буквы, к началу 2016 года доказавший всем абсолютно всё. Вся эта мем-история у-лео-нет-оскара — остроумна лишь на первый взгляд. На самом деле, школьное мальчишество. Сегодня случилось ровно то же самое, что и в 2007-м со Скорсезе, когда режиссёру фильмов <i>«Таксист», «Бешеный бык», «Последнее искушение Христа», «Славные парни» и «Казино»</i> дали желанную награду за крепкую (но не более) криминальную драму «Отступники». Истории про то, что Ди Каприо самолично ел, спал и плавал на съёмочной площадке оставим для впечатлительных и наивных зрителей (ни одна страховая компания не пошла бы на такие риски, а руководство 20th Century Fox лично расчленило бы бренное тело Иньярриту, если бы со звездой уровня Ди Каприо случилось хоть что-то, выходящее за рамки банальной простуды).</p>
                <p>«Безумный Макс» умницы Миллера взял ровно то, что и должен был взять. Ни больше, ни меньше. Австралиец на наших глазах снял абсолютное <b>cult classic</b>. Шесть «Оскаров», в этом смысле, не более, чем приятный десерт после царского ужина. По логике вещей у «Макса» могла случиться и ещё одна статуэтка, за лучшие спецэффекты. Но тут академики решили немного соригинальничать. На самом деле, спецэффектыв режиссёрском дебюте Алекса Гарланда очень хороши. Как известно, лучшие из них те, которых не видно. По такому принципу, очевидно, и вручили. </p>
                <p>Если бы гениальный Морриконе сегодня ничего не получил — не страшно! Думается, Тарантино готов забивать любые гвозди в квартире маэстро до скончания веков. Но он получил. Что прекрасно.</p>
              </div>
            </div>
          </div>
          <div class="tags blog-tags clear">
            <div class="inner-blog-tags inner-blog-tags--left">
              <a href="#" class="all-posts-author">Все посты автора</a>
            </div>
            <div class="inner-blog-tags inner-blog-tags--right">
              <div class="inner-tags">Тэги:
                <ul class="list-tags">
                  <li><a href="#">интервью</a></li>
                  <li><a href="#">вестерны</a></li>
                  <li><a href="#">антуан фукуа</a></li>
                  <li><a href="#">великолепная семерка</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="pagelist-social blog-pagelist-social">
            <div class="outer-social clear">
              <ul class="social-list social-list--horizontal">
                <li class="vk"><a href="#"><span class="number">856</span></a></li>
                <li class="fb"><a href="#"><span class="number">856</span></a></li>
                <li class="tw"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="outer-other no-mobile">
            <section class="inner-content outer-content-item parent-sticker outer-section-mini-prewiew">
              <div class="sticker">
                <div class="sticker-item">ДРУГИЕ БЛОГИ</div>
              </div>
              <div class="section-mini-prewiew section-mini-prewiew--yellow ">
                <div class="outer-section-mini-prewiew-item clear">
                  <div class="outer-pagelist-yellow">
                    <div class="pagelist-prewiew-item">
                      <div class="section-mini-prewiew-wrap-item">
                        <div class="section-mini-prewiew-item">
                          <a href="#"><img alt="" src="/app/img/content/b2.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg"></a>
                          <div class="section-mini-prewiew-item-text">
                            <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                            <a href="#" class="content-item-info-comment sprite-before">3</a>
                          </div>
                          <div class="section-mini-prewiew-item-desc">
                            <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pagelist-prewiew-item">
                      <div class="section-mini-prewiew-wrap-item">
                        <div class="section-mini-prewiew-item">
                          <a href="#"><img alt="" src="/app/img/content/b2.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg"></a>
                          <div class="section-mini-prewiew-item-text">
                            <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                            <a href="#" class="content-item-info-comment sprite-before">3</a>
                          </div>
                          <div class="section-mini-prewiew-item-desc">
                            <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pagelist-prewiew-item">
                      <div class="section-mini-prewiew-wrap-item">
                        <div class="section-mini-prewiew-item">
                          <a href="#"><img alt="" src="/app/img/content/b2.jpg" class="responsive-image section-mini-prewiew-item__image" data-src-d="/app/img/content/b2.jpg" data-src-t="/app/img/content/b2.jpg" data-src-m="/app/img/content/b2.jpg"></a>
                          <div class="section-mini-prewiew-item-text">
                            <a href="#">Павел Руминов: «Настоящее кино должно содержать нелепость»</a>
                            <a href="#" class="content-item-info-comment sprite-before">3</a>
                          </div>
                          <div class="section-mini-prewiew-item-desc">
                            <p>«Книга джунглей» отстояла первую строчку в американском бокс-офисе. Единственный конкурент за «золото» «Белоснежка и Охотник 2» провалил старт, заработав чуть больше трети от премьерных сборов своего предшественника 2012 года. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="full-comments">
            <div class="full-comments-head">
              <div class="full-comments-text">КОММЕНТАРИИ <span class="number">2</span></div>
            </div>
            <div class="parent-author-full-comments row-author-full-comments with-answer">
              <div class="author-full-comments-image">
                <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
              </div>
              <div class="author-full-comments-content">
                <div class="author-comments-name"><a href="#">fishman</a></div>
                <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                <div class="author-comments-info clear">
                  <ul class="author-comment-info-list">
                    <li class="reply"><a href="#">Комментировать</a></li>
                    <li class="quote"><a href="#">Цитировать</a></li>
                    <li class="date">29 сентября 2016, 23:07</li>
                  </ul>
                <div class="like-button clear">
                    <span class="like active"></span>
                    <span class="number" data-type="more">1</span>
                    <!-- data-type="more & less & default" -->
                    <span class="dislike"></span>
                    <span class="number" data-type="less">100</span>
                  </div>
                </div>
              </div>

              <!-- comments inside -->
              <div class="row-author-full-comments answer with-answer">
                <div class="author-full-comments-image">
                  <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
                </div>
                <div class="author-full-comments-content">
                  <div class="author-comments-name"><a href="#">fishman</a></div>
                  <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                  <div class="author-comments-info clear">
                    <ul class="author-comment-info-list">
                      <li class="reply"><a href="#">Комментировать</a></li>
                      <li class="quote"><a href="#">Цитировать</a></li>
                      <li class="date">29 сентября 2016, 23:07</li>
                    </ul>
                    <div class="like-button clear">
                      <span class="like"></span>
                      <span class="number" data-type="default">0</span>
                      <!-- data-type="more & less & default" -->
                      <span class="dislike"></span>
                      <span class="number" data-type="default">0</span>
                    </div>
                  </div>
                </div>
                <!-- answer -->
                <div class="row-author-full-comments answer with-answer">
                  <div class="author-full-comments-image">
                    <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
                  </div>
                  <div class="author-full-comments-content">
                    <div class="author-comments-name"><a href="#">fishman</a></div>
                    <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                    <div class="author-comments-info clear">
                      <ul class="author-comment-info-list">
                        <li class="reply"><a href="#">Комментировать</a></li>
                        <li class="quote"><a href="#">Цитировать</a></li>
                        <li class="date">29 сентября 2016, 23:07</li>
                      </ul>
                      <div class="like-button clear">
                        <span class="like"></span>
                        <span class="number" data-type="default">0</span>
                        <!-- data-type="more & less & default" -->
                        <span class="dislike"></span>
                        <span class="number" data-type="default">0</span>
                      </div>
                    </div>
                  </div>
                  <!-- answer -->
                  <div class="row-author-full-comments answer">
                    <div class="author-full-comments-image">
                      <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
                    </div>
                    <div class="author-full-comments-content">
                      <div class="author-comments-name"><a href="#">fishman</a></div>
                      <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                      <div class="author-comments-info clear">
                        <ul class="author-comment-info-list">
                          <li class="reply"><a href="#">Комментировать</a></li>
                          <li class="quote"><a href="#">Цитировать</a></li>
                          <li class="date">29 сентября 2016, 23:07</li>
                        </ul>
                        <div class="like-button clear">
                          <span class="like"></span>
                          <span class="number" data-type="default">0</span>
                          <!-- data-type="more & less & default" -->
                          <span class="dislike"></span>
                          <span class="number" data-type="default">0</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- answer -->
                <div class="row-author-full-comments answer with-answer">
                  <div class="author-full-comments-image">
                    <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
                  </div>
                  <div class="author-full-comments-content">
                    <div class="author-comments-name"><a href="#">fishman</a></div>
                    <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                    <div class="author-comments-info clear">
                      <ul class="author-comment-info-list">
                        <li class="reply"><a href="#">Комментировать</a></li>
                        <li class="quote"><a href="#">Цитировать</a></li>
                        <li class="date">29 сентября 2016, 23:07</li>
                      </ul>
                      <div class="like-button clear">
                        <span class="like"></span>
                        <span class="number" data-type="default">0</span>
                        <!-- data-type="more & less & default" -->
                        <span class="dislike"></span>
                        <span class="number" data-type="default">0</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="parent-author-full-comments row-author-full-comments with-answer">
              <div class="author-full-comments-image">
                <a href="#"><img src="app/img/content/author-c.jpg" alt=""></a>
              </div>
              <div class="author-full-comments-content">
                <div class="author-comments-name"><a href="#">fishman</a></div>
                <div class="author-comments-text">сильный режиссер, каждый его фильм можно смело вносить в энциклопедию мирового кинематографа! Товарищ Фукуа, здоровья вам и разнообразия идей!</div>
                <div class="author-comments-info clear">
                  <ul class="author-comment-info-list">
                    <li class="reply"><a href="#">Комментировать</a></li>
                    <li class="quote"><a href="#">Цитировать</a></li>
                    <li class="date">29 сентября 2016, 23:07</li>
                  </ul>
                  <div class="like-button clear">
                    <span class="like"></span>
                    <span class="number" data-type="more">1</span>
                    <!-- data-type="more & less & default" -->
                    <span class="dislike"></span>
                    <span class="number" data-type="less">100</span>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div class="row-pagelist-ligin">
            <div class="pagelist__title pagelist-ligin__title">ОТПРАВИТЬ КОММЕНТАРИЙ</div>
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
