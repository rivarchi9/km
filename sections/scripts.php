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
    $('.happy-carousel').bxSlider({
      slideWidth: 300,
      maxSlides: 2,
      minSlides: 2,
      infiniteLoop: true,
      slideMargin: 70,
      pager: false
    });
  });
</script>