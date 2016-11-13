<script src="/app/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/app/js/main.js"></script>
<script type="text/javascript" src="/app/js/calendar.js"></script>
<!-- bxSlider Javascript file -->
<script src="/app/js/plugins/bx/jquery.bxslider.js"></script>
<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      auto: false
    });
    w = window.innerWidth;
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


<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="/app/js/plugins/mp/magnific-popup.css">

<!-- Magnific Popup core JS file -->
<script src="/app/js/plugins/mp/jquery.magnific-popup.js"></script>

<script>
  $(document).ready(function() {
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