<script src="/app/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/app/js/main.js"></script>
<script type="text/javascript" src="/app/js/calendar.js"></script>
<!-- bxSlider Javascript file -->
<script src="/app/js/plugins/bx/jquery.bxslider.js"></script>
<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      auto: true
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