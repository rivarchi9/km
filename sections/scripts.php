<script src="/app/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/app/js/main.js"></script>
<script type="text/javascript" src="/app/js/calendar.js"></script>
<!-- bxSlider Javascript file -->
<script src="/app/js/plugins/bx/jquery.bxslider.js"></script>
<script>
  $(document).ready(function(){
    $('.slider-load').css('display', 'block');
    $('.bxslider-home').bxSlider({
      auto: false
    });
    w = window.innerWidth;
    $('.bxslider-part').bxSlider({
      auto: false,
      minSlides: 1,
      maxSlides: 1,
      nextText: '',
      prevText: '',
      pager: false
    });

    var bx_tv_slider;
    create_bx_tv_slider();
    $(window).resize(function(){
      create_bx_tv_slider();
    });
    function create_bx_tv_slider (){
      if($(bx_tv_slider).html() != undefined){
        bx_tv_slider.destroySlider();
      }

      if(w < 768){
        bx_tv_slider = {
          minSlides: 1,
          maxSlides: 1
        };
      } else if(w < 992){
        bx_tv_slider = {
          slideWidth: 275,
          minSlides: 3,
          maxSlides: 3
        };
      } else {
        bx_tv_slider = {
          slideWidth: 275,
          minSlides: 4,
          maxSlides: 4
        };
      }
      param_def = {
        auto: false,
        slideMargin: 15,
        nextText: '',
        prevText: '',
        pager: false
      };

      var param_def = $.extend(param_def, bx_tv_slider);
      bx_tv_slider = $('.bx-tv-slider').bxSlider(param_def);
    }


    $('.bx-mini-slider').bxSlider({
      slideWidth: 215,
      minSlides: 1,
      maxSlides: 3,
      slideMargin: 15,
      pager: false,
      nextText: '',
      prevText: ''
    });

    if (w <= 992) {
       $('.happy-carousel').bxSlider({
        slideWidth: 0,
        maxSlides: 2,
        minSlides: 2,
        infiniteLoop: true,
        slideMargin: 70,
        pager: false
      });
    } else {
      $('.happy-carousel').bxSlider({
        slideWidth: 300,
        maxSlides: 2,
        minSlides: 2,
        infiniteLoop: true,
        slideMargin: 70,
        pager: false
      });
    }
  });
</script>
<script type="text/javascript">

    // Создает обработчик события window.onLoad
    YMaps.jQuery(function () {
        var mapFunc = $('#YMapsID').attr('map-cardinate');
        var mapFuncTwo = $('#YMapsID').attr('map-cardinateTwo');
        if (!$('#YMapsID').is('[map-zoom]')){
          var mapZoom = 10;
        } else {
          var mapZoom = $('#YMapsID').attr('map-zoom');
          // alert(mapZoom);
        }
        // alert(mapFunc);
        // alert(mapFuncTWo);
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        map.setCenter(new YMaps.GeoPoint(mapFunc,mapFuncTwo), mapZoom);
    })
</script>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="/app/js/plugins/mp/magnific-popup.css">

<!-- Magnific Popup core JS file -->
<script src="/app/js/plugins/mp/jquery.magnific-popup.js"></script>
<script>
  $(document).ready(function() {
    $('.image-cover-parent').magnificPopup({
      type: 'image'
    });
    $("[gallery-number]").each(function(i, item){
      var num = $(item).attr('gallery-number');
      $('[gallery-number='+num+'] > a').magnificPopup({
    		type: 'image',
    		tLoading: 'Loading image #%curr%...',
    		mainClass: 'mfp-img-mobile',
    		gallery: {
    			enabled: true,
    			navigateByImgClick: true,
    			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    		},
    		image: {
    			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    		}
      });
    });
    $('.popup-gallery-list-trailers').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
        }
      }
    });
});
</script>
