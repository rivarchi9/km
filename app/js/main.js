$(window).load(function() {
	sliderNavigation();
	sliderNavigationButton();
});

$(window).resize(function() {

	imageResize();
	sliderNavigation();
	sliderNavigationButton();

	pickPosition();

	// Фиксим баг на слайдере, при перевороте телефона
	$('[data-type-slider=input_left] , [data-type-slider=input_right]').each(function(){
		edit_left_width_slider(this);
	});

	w = window.innerWidth;
	if (w > 768 ) {
			$('.outer-mobile-nav').removeClass('active');
			$('.outer-mobile-nav').addClass('default');
			$('body').css('overflow-y', 'scroll');
	}
});

$(document).ready(function() {
	// $('body').css('max-width', $('body').width() );

	w = window.innerWidth;
	imageResize();

	// Добавляем актив в красненькое меню
	var url = location.href
	$('.nav-content-list .nav-content-item a').each(function(){
		if(url.indexOf( $(this).attr('href') )+1){
			$(this).parents('.nav-content-item').addClass('active');
		}
	});
	// И сразу же для мобильной версии
	$('.nav-content-list .mobile__select .result').html( $('.nav-content-list .mobile__select').find('.active a').html() );

	// Setttings
	var inputRowEdit = $('.row-input');

	$(inputRowEdit).click(function() {
		thisInput = $(this).find('.input-field[data-type = no-edit]');
		if (thisInput.length != 0) {
			thisInput.next().addClass('active').html('Разблокируйте поле');
		}
	});

	$('.check-hide input').click(function() {
		findInputHide = $(this).parents('.form-input-item').find('input[data-type = hide]');
		if ($(this).is(':checked')){
			findInputHide.attr('type', 'password');
		}else {
			findInputHide.attr('type', 'text');
		}
	});

	$('.field-add-icon[data-type = edit]').click(function() {
		var findParentsInput = $(this).parents('.form-input-item').find('.input-field[data-type = no-edit]');
		findParentsInput.removeAttr('disabled').removeAttr('data-type');
		findParentsInput.next().removeClass('active').html('');
	});
	minDays = 1;
	while (minDays <= 31){
		$('select[name = day]').append('<option value="'+minDays+'">'+minDays+'</option>');
		minDays++
	}
	maxYears = 2016;
	while (maxYears >= 1920){
		$('select[name = years]').append('<option value="'+maxYears+'">'+maxYears+'</option>');
		maxYears--
	}

	$('.add-folder-button').click(function() {
		$('.add-folder-button').removeClass('active');
		$(this).addClass('active');
	});


	// Мобильное меню
	$(".mobile-nav-button, .mobile-nav-button__close").on('click',function(){
		if ($('.outer-mobile-nav').is('.default')) {
			$('.outer-mobile-nav').removeClass('default');
			$('.outer-mobile-nav').addClass('active');
			$('body').css('overflow-y', 'hidden');
		} else if ($('.outer-mobile-nav').is('.active')) {
			$('.outer-mobile-nav').removeClass('active');
			$('.outer-mobile-nav').addClass('default');
			$('body').css('overflow-y', 'scroll');
		}
	});

	// Новинки и Лидеры проката
	$("[data-type-sliderButton]").on('click',function () {
		elem = $(this).attr('data-type-sliderButton');
		group = $(this).attr('data-type-sliderGroup');
		mobile_select = $(this).parents('.mobile__select');
		if(group){
			toggleClass('default',"[data-type-sliderGroup = "+group+"]");
			toggleClass('active',"[data-type-sliderGroup = "+group+"][data-type-sliderButton = "+elem+"]");
			toggleClass('active',"[data-type-sliderGroup = "+group+"][data-type-sliderElem = "+elem+"]");
		}
		if($(mobile_select).html() != undefined){
			$(mobile_select).children('.result').html( $(this).html() );
			$(mobile_select).children('.result-list').slideUp();
		}
	});

	// ====Слайдер для менб трейлеров
	// == Секции Пк версия
	$("[data-type-trailersSectionButton]").on('click',function () {
		section = $(this).attr('data-type-trailersSectionButton');
		sliderTrailers(section);
		// меняет содержимое селектора для моб. версии
		html_r = $(this).html();
		$(".mobile__select .result").html(html_r);
		$(".mobile__select .result-list").css('display','none');
	});
	// == Тип ПК версия
	$("[data-type-trailersTypeButton]").on('click',function () {
		type = $(this).attr('data-type-trailersTypeButton');
		section = $(this).parents("[data-type-trailersSection]").attr('data-type-trailersSection');
		sliderTrailers(section, type);
	});
	// == Трейлеры ПК версия
	$("[data-type-trailersTrailerButton]").on('click',function () {
		trailer = $(this).attr('data-type-trailersTrailerButton');
		type = $(this).parents("[data-type-trailersType]").attr('data-type-trailersType');
		section = $(this).parents("[data-type-trailersType]").parents("[data-type-trailersSection]").attr('data-type-trailersSection');
		sliderTrailers(section, type, trailer);
	});
	// == Открытие селектора мобильной версии
	$(".mobile__select .result").on('click',function () {
		$(".mobile__select .result-list").slideToggle();
	});

	// Открытие/закрытие календаря
	$(".content-item-dop-date, .drop-down-where").on('click',function () {
		$(".outer-calendar").slideToggle(50);

		$(".outer-calendar").find('.prev').attr('onmousedown','return false');
		$(".outer-calendar").find('.prev').attr('onselectstart','return false');
		$(".outer-calendar").find('.next').attr('onmousedown','return false');
		$(".outer-calendar").find('.next').attr('onselectstart','return false');
	});
	// Выбод даты в календаре
	$(document).on('click',".day",function () {
		toggleClass('default','.day');
		if(!$(this).is(".today")){
			toggleClass('active',this);
		}
		$(".outer-calendar").slideUp(50);
		mn = new Array('Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентрября','Октября','Ноября','Декабря');
		$(".content-item-dop-date").html();
		var date = ("0"+$(this).html()).slice(-2)+"."+("0"+(calMonth + 1)).slice(-2)+"."+(calYear+1900);
		$(".drop-down-where").html(date);
	});
	// Если календарь открыт, то закрываем его по клику вне календаря
	$(document).mouseup(function (e) {
    if ($('.outer-calendar').css('display') == 'block') {
      var container = $(".row-drop-down-where");
      if (container.has(e.target).length === 0){
          $(".outer-calendar").slideUp(50);
      }
    }
	});

	// Строим календарь
	createMonth();

	// Слующий и предыдущий месяц календаря
	$(".date > .prev , .date > .next").on('click',function(){
		if($(this).is(".next")){
			createMonth(calYear,calMonth+1);
		}
		if($(this).is(".prev")){
			createMonth(calYear,calMonth-1);
		}
	});
});

function sliderNavigation(){
	var w = window.innerWidth;
	if (w < 768) {
		topp = Math.round($(".section-news img").height()*0.85)-24;
	} else {
		topp = Math.round($(".section-news img").height()*0.85)-14;
	}
	$(".bx-default-pager").css('top',topp+"px");
}
function sliderNavigationButton(){
	var w = window.innerWidth;
	if (w < 320) {
		topp = Math.round($(".section-news img").height()*0.85)-40;
	}else if (w < 544) {
		topp = Math.round($(".section-news img").height()*0.85)-40;
	}else if (w < 768) {
		topp = Math.round($(".section-news img").height()*0.85)-100;
	}else if (w < 992) {
		topp = Math.round($(".section-news img").height()*0.85)-100;
	} else {
		topp = Math.round($(".section-news img").height()*0.85)-114;
	}
	$(".section-news .bx-controls-direction a").css('top',topp+"px");
}

function toggleClass(status, selector, children_1, children_2){
	if(status == 'default'){
		do_1 = 'default';
		do_2 = 'active';
	}else if(status == 'active'){
		do_1 = 'active';
		do_2 = 'default';
	}
	if(selector && !children_1 && !children_2){
		$(selector).addClass(do_1);
		$(selector).removeClass(do_2);
	}
	if(selector && children_1 && !children_2){
		$(selector).children(children_1).addClass(do_1);
		$(selector).children(children_1).removeClass(do_2);
	}
	if(selector && children_1 && children_2){
		$(selector).children(children_1).children(children_2).addClass(do_1);
		$(selector).children(children_1).children(children_2).removeClass(do_2);
	}
}

function sliderTrailers (section, type, trailer){
	toggleClass('default',"[data-type-trailersSection]");
	toggleClass('default',"[data-type-trailersSectionButton]");
	toggleClass('default',"[data-type-trailersType]");
	toggleClass('default',"[data-type-trailersTypeButton]");
	toggleClass('default',"[data-type-trailersTrailer]");
	toggleClass('default',"[data-type-trailersTrailerButton]");

	if(!section){
		section = $("[data-type-trailersSection]:first").attr('data-type-trailersSection');
	}
	if(!type){
		type = $("[data-type-trailersSection = "+section+"]").children("[data-type-trailersType]:first").attr('data-type-trailersType');
	}
	if(!trailer){
		trailer = $("[data-type-trailersSection = "+section+"]").children("[data-type-trailersType = "+type+"]").children("[data-type-trailersTrailer]:first").attr('data-type-trailersTrailer');
	}

	toggleClass('active',"[data-type-trailersSectionButton = "+section+"]");
	toggleClass('active',"[data-type-trailersSection = "+section+"]");
	toggleClass('active',"[data-type-trailersSection = "+section+"]","[data-type-trailersTypeButton = "+type+"]");
	toggleClass('active',"[data-type-trailersSection = "+section+"]","[data-type-trailersType = "+type+"]");
	toggleClass('active',"[data-type-trailersSection = "+section+"]","[data-type-trailersType = "+type+"]","[data-type-trailersTrailerButton = "+trailer+"]");
	toggleClass('active',"[data-type-trailersSection = "+section+"]","[data-type-trailersType = "+type+"]","[data-type-trailersTrailer = "+trailer+"]");
}

function imageResize(){

	w = window.innerWidth;
	$('.responsive-image').each(function(index, el) {
		// var mobile = $(this).attr('data-src-x');
		if (w < 544 && $(this).is('[data-src-x]')  ) {
				$(this).attr('src',$(this).attr('data-src-x'));
		} else if (w < 768 ) {
				$(this).attr('src',$(this).attr('data-src-m'));
		} else if (w < 992) {
				$(this).attr('src',$(this).attr('data-src-t'));
		} else {
				$(this).attr('src',$(this).attr('data-src-d'));
		}
	});
}

// ==============================================
// ============= FILM LIGHTBOX ==================
// ==============================================
var obj;
function open_over(object){
	$("body").css('overflow-y','hidden');
	$(".overlay-photo").addClass('active');

	$(".inner-overlay-image img").attr('src',$(object).attr('data-type-over-img') );
	$(".inner-overlay-caption").html(
		$(object).find(".trailer-caption-hide").html()
	);
	if($(object).is('[data-type-over-desc]')){
		$(".inner-overlay-caption").html( $( $(object).attr('data-type-over-desc') ).html() );
		$(".inner-overlay-caption").children('.link').attr('href', $(object).attr('data-type-over-img') );
		$(".inner-overlay-caption").children('.desc').html( $(object).attr('data-type-over-desc-desc') );
	}
}
$(document).ready(function() {

	$("[data-type-over-img]").on('click',function(){
		//obj = $(this).parents('[data-type-over-img]');
		obj = this;
		open_over( obj );
	});

	//	след кадр
	$(".overlay-photo .next").on('click',function(){

		var parent = $(obj).parents( $(obj).attr('data-type-over-parent') );
		var size = $(parent).find('[data-type-over-img]').size();
		var index = $(parent).find('[data-type-over-img]').index(obj);

		if(index + 1 < size){
			index++;
		}else{
			index = 0;
		}

		obj = $(parent).find('[data-type-over-img]:eq('+index+')');
		open_over( obj );
	});
	//	предыдущий кадр
	$(".overlay-photo .prev").on('click',function(){
		var parent = $(obj).parents( $(obj).attr('data-type-over-parent') );
		var size = $(parent).find('[data-type-over-img]').size();
		var index = $(parent).find('[data-type-over-img]').index(obj);

		if(index > 0){
			index--;
		}else{
			index = size - 1;
		}
		obj = $(parent).find('[data-type-over-img]:eq('+index+')');
		open_over( obj );
	});

	// Закрывашка оверлея
	$(".overlay-photo .close").on('click',function(){
		$('.overlay-photo').removeClass('active');
		$("body").css('overflow-y','scroll');
	});
	$(document).mouseup(function (e) {
    if ($('.overlay-photo').is('.active')) {
      var container = $(".inner-overlay-photo");
      var outer = $('.overlay-photo');
      if (container.has(e.target).length === 0){
          outer.removeClass('active');
					$("body").css('overflow-y','scroll');
      }
    }
	});

	// Фильтр
	$("[data-type-filter-button]").on('click',function(){
		filter = $(this).attr('data-type-filter-button');

		$("[data-type-filter-button][data-type-filter-button != "+filter+"]").removeClass('active');
		$("[data-type-filter-button = "+filter+"]").addClass('active');

		if(filter != 'ALL'){
			$("[data-type-filter][data-type-filter != "+filter+"]").addClass('hide');
			$("[data-type-filter][data-type-filter = "+filter+"]").removeClass('hide');
		}else{
			$("[data-type-filter]").removeClass('hide');
		}
	});
});


// ==============================================
// ================ TRAILERS ====================
// ==============================================

function get_inform_about_slider(object){
	if($(object).is('[data-type!=slider]')){
		object = $(object).parents('[data-type=slider]');
	}
	array = [];
	array['slider_min']		= parseInt($(object).attr('data-type-slider-min'));
	array['slider_max']		= parseInt($(object).attr('data-type-slider-max'));
	array['slider_bg']			= $(object).find('[data-type-slider=bg]');
	array['slider_fr']			= $(object).find('[data-type-slider=fr]');
	array['left_controller']	= $(object).find('[data-type-slider=left_controller]');
	array['right_controller']	= $(object).find('[data-type-slider=right_controller]');
	array['input_left']		= $(object).find('[data-type-slider=input_left]');
	array['input_right']		= $(object).find('[data-type-slider=input_right]');
	return array;
}


function edit_left_width_slider(obj){
	if($(obj).is('[data-type-slider=input_left]')){
		input = "left";
	}
	if($(obj).is('[data-type-slider=input_right]')){
		input = "right";
	}

	ar = get_inform_about_slider(obj);
	val = $(obj).val();
	width = $(ar.slider_bg).width();
	left = parseInt($(obj).css('left'));

	left_count = Math.round((val-ar.slider_min)/(ar.slider_max-ar.slider_min)*width);
	if(input == 'left'){
		if(left_count < 0){
			left_count = 0;
		}
		if(left_count >= parseInt($(ar.right_controller).css('left'))){
			left_count = parseInt($(ar.right_controller).css('left')) - 1;
		}
		$(ar.left_controller).css('left',left_count);
	}
	if(input == 'right'){
		if(left_count > width){
			left_count = width;
		}
		if(left_count <= parseInt($(ar.left_controller).css('left'))){
			left_count = parseInt($(ar.left_controller).css('left')) + 1;
		}
		$(ar.right_controller).css('left',left_count);
	}

	left_controller = parseInt($(ar.left_controller).css('left'));
	right_controller = parseInt($(ar.right_controller).css('left'));
	$(ar.slider_fr).css('left',left_controller);
	$(ar.slider_fr).css('width',right_controller-left_controller);
}

$(document).ready(function() {
	$("[data-type=slider]").each(function(){
		 ar = get_inform_about_slider(this);
		 $(ar.left_controller).css('left','0%');
		 $(ar.right_controller).css('left','100%');
		 $(ar.input_left).val( ar.slider_min );
		 $(ar.input_right).val( ar.slider_max );
		 $(ar.slider_fr).css('left','0%');
		 $(ar.slider_fr).css('width','100%');
	});

	$('[data-type-slider=input_left] , [data-type-slider=input_right]').on('input',function(){
		edit_left_width_slider(this);
	});
});

slider_status = 0;
coord_x = 0;

var mobile   = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
var start = mobile ? "touchstart" : "mousedown";
var move = mobile ? "touchmove" : "mousemove";
var end = mobile ? "touchend" : "mouseup";

$("[data-type-slider=left_controller] , [data-type-slider=right_controller]").bind(start,function(){
	$('body').attr('onmousedown','return false');
	$('body').attr('onselectstart','return false');

	if(mobile){
		event.pageX = event.changedTouches[0].pageX;
	}

	slider_status = 1;
	obj = this;

	if($(obj).is('[data-type-slider=left_controller]')){
		controller = "left";
	}
	if($(obj).is('[data-type-slider=right_controller]')){
		controller = "right";
	}

	ar = get_inform_about_slider(obj);


	coord_start = event.pageX;
	width = $(ar.slider_bg).width();
	left_start = parseInt($(obj).css('left'));

	$(window).bind(move ,function(){
		if(slider_status == 1){
			if(mobile){
				event.pageX = event.changedTouches[0].pageX;
			}

			left = event.pageX - coord_start + left_start;

			left_obj_pos = parseInt($(ar.left_controller).css('left'));
			right_obj_pos = parseInt($(ar.right_controller).css('left'));

			if(0 < left && left < width && (controller == "left" && right_obj_pos - left > 0 || controller == "right" && left - left_obj_pos > 0)){
				$(obj).css('left',left);
				orange_width = right_obj_pos - left_obj_pos;
				$(ar.slider_fr).css('left',left_obj_pos);
				$(ar.slider_fr).css('width',orange_width);

				if( controller == "left" ){
					$(ar.input_left).val(Math.round((ar.slider_max - ar.slider_min) / width * left_obj_pos)+ar.slider_min);
				}
				if( controller == "right" ){
					$(ar.input_right).val(Math.round((ar.slider_max - ar.slider_min) / width * right_obj_pos)+ar.slider_min);
				}
			}
		}
	});
});
$(window).bind(end,function(){
	slider_status = 0;
	$('body').attr('onmousedown',false);
	$('body').attr('onselectstart',false);
});


// Reiting STARS

$('.star__item[data-active = select]').append('<span class="select-star default">ваша оценка</span>');

function amimatedStar(){
	$('.select-star').addClass('default');
}
$('.star__item').click(function() {
	parentStar = $(this).parents('.inner-raiting-star');
	$('.inner-raiting-star .star__item .select-star').remove();
	$(parentStar).find('.star__item').removeAttr('data-active');
	$(this).attr('data-active','select');
	$(this).parents('.inner-raiting-star').attr('data-fixed', 'fixed');
	$(this).append('<span class="select-star">ваша оценка</span>');
	setTimeout(amimatedStar, 2000);
});
$('.star__item').hover(function() {
	thisStar = $(this).attr('data-value');
	parentStar = $(this).parents('.inner-raiting-star');
	minStar = 0;
	maxStar = $(parentStar).find('.star__item').length;
	if (!$(this).is('[data-active]')) {
		while (minStar <= thisStar) {
			$(parentStar).find('.star__item[data-value = '+ minStar +']').addClass('active');
			minStar++
		}
	}
	while (maxStar > thisStar) {
		$(parentStar).find('.star__item[data-value = '+ maxStar +']').removeClass('active');
		maxStar--
	}
	$(parentStar).find('.raiting-number .value').html(thisStar);
}, function() {
	if (!$('.inner-raiting-star').is('[data-fixed]')) {
		$('.inner-raiting-star .star__item').removeClass('active');
		$('.raiting-number .value').html(0);

	}
});
$('.raiting-list-star').hover(function() {
	$(this).find('.select-star').addClass('active');
}, function() {
	parentStar = $(this).parents('.inner-raiting-star');
	minStar = 0;
	fixedStar = $(parentStar).find('.star__item[data-active = select]').attr('data-value');
	if ($('.inner-raiting-star').is('[data-fixed]')) {
		$(parentStar).find('.star__item').removeClass('active');
		while (minStar <= fixedStar) {
			$(parentStar).find('.star__item[data-value = '+ minStar +']').addClass('active');
			minStar++
		}
		$(parentStar).find('.raiting-number .value').html(fixedStar);
		$('.select-star').removeClass('active');
		setTimeout(amimatedStar, 2000);
	}
});
$(document).ready(function() {
	$('.inner-raiting-star').each(function(index, el) {
		minStar = 0;
		fixedStar = $(this).find('.star__item[data-active = select]').attr('data-value');
		parentStar = $(this).parents('.inner-raiting-star');
		while (minStar <= fixedStar) {
			$(this).find('.star__item[data-value = '+ minStar +']').addClass('active');
			minStar++
		}
		$(this).find('.raiting-number .value').html(fixedStar);
	});
});

// Лайки и дислайки
$(document).ready(function() {
	$('.like-button .like , .like-button .dislike').click(function(){
		par = $(this).parents('.like-button');
		// если голос есть и не равен this
		ttt = $(par).children('.dislike');
		if($(this).is('.like') && ttt.is('.active')){
			ttt.removeClass('active');
			ttt.next('.number').html( (parseInt(ttt.next('.number').html() - 1)) );
			if(ttt.next('.number').html() == 0){
				ttt.next('.number').attr('data-type','default');
			}
		}
		ttt = $(par).children('.like');
		if($(this).is('.dislike') && ttt.is('.active')){
			ttt.removeClass('active');
			ttt.next('.number').html( (parseInt(ttt.next('.number').html() - 1)) );
			if(ttt.next('.number').html() == 0){
				ttt.next('.number').attr('data-type','default');
			}
		}
		// если голоса нет
		if($(this).parents('.like-button').find('.active').attr('class') == undefined){
			$(this).addClass('active');
			if(parseInt($(this).next('.number').html()) == 0 ){
				if($(this).is('.like')){
					$(this).next('.number').attr('data-type','more');
				}
				if($(this).is('.dislike')){
					$(this).next('.number').attr('data-type','less');
				}
			}
			$(this).next('.number').html( (parseInt($(this).next('.number').html()) + 1) );
		}
	});
});


// Film-Actors

$(document).ready(function() {
	$('.folder__icon').click(function(){
		$(this).parent().children('.row-dropdown-folder').addClass('active');
	});
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $(".row-dropdown-folder.active"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
				&& div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.removeClass('active'); // скрываем его
		}
	});
});

// OPEN close
$(document).ready(function() {
	$('[data-type-openclose-button]').click(function(){
		var elem = $(this).attr('data-type-openclose-button');
		if($(this).attr('data-type-openclose-class')){
			$('[data-type-openclose-element = '+elem+']').toggleClass( $(this).attr('data-type-openclose-class') );
		}else{
			$('[data-type-openclose-element = '+elem+']').slideToggle();
		}
	});
	$('[data-type-openclose-parent]').click(function(){
		var elem;
		if($(this).attr('data-type-openclose-child') == undefined){
			elem = $(this);
		}else{
			elem = $(this).parents( $(this).attr('data-type-openclose-parent') ).find( $(this).attr('data-type-openclose-child') );
		}
		if($(this).attr('data-type-openclose-class')){
			$(elem).toggleClass( $(this).attr('data-type-openclose-class') );
		}else{
			$(elem).slideToggle();
		}

	});
});

$(document).ready(function() {
	$('.soundtrack-item__name-author').click(function(){
		if(!$(this).parents('.soundtrack-item.clear').is('.active')){
			$('.soundtrack-item.clear').removeClass('active');
			$('.soundtrack-item.clear').find('.player').slideUp();
		}

		$(this).parents('.soundtrack-item.clear').toggleClass('active');
		$(this).parents('.soundtrack-item.clear').find('.player').slideToggle();
	});
});

// Актив для букв в постере и трейлере

$(document).ready(function() {
	$('.letters-text-list > li').click(function(){
		$('.letters-text-list > li').removeClass('active');
		$(this).addClass('active');
	});
});
$('.required').append('<i class="required-icon">*</i>');



// Позиция подсказки расписания фильмов
var checkTimeList = 0;
$(document).ready(function() {
	if ($(document).find('.time-list').html() != undefined) {
		checkTimeList = 1;
	}
	pickPosition();
});
function pickPosition() {
	if (checkTimeList) {
		$('.time-list .open-help-in').each(function(index, el) {
			if(w <= 544){
				var spanWidth = $(el).find('span').width();
				$(el).find('.help').css('left', (spanWidth / 2) + 'px');
			}else {
				$(el).find('.help').css('left', '50%');
			}
		});
	}
}


function my_slider(obj,parameters){
	if($(obj).html() == undefined){
		return false;
	}
	// ###############################################
	// ###############################################
	// ###############################################
	// ############# Строим слайдер ##################
	// ###############################################
	// ###############################################
	// ###############################################
	var content;
	$(obj).find('.item').each(function(){
		if( !$(this).is('.clone') ){
			content += $(this)[0].outerHTML;
		}
	});

	var nav = '';
	if(parameters.nav){
		nav += '<div class="my-slider-nav">';
		nav += '<div class="prev '+parameters.prev+'"><<</div><br /><br /><br /><br />';
		nav += '<div class="next '+parameters.next+'">>></div>';
		nav += '</div>';
	}

	var dots = '';
	if(parameters.dots){
		dots = '<div class="my-slider-dots">dots</div>';
	}

	$(obj).html( '<div class="my-slider-outer"><div class="my-slider-content transition">'+ content +'</div></div>'+nav+dots );


	var items_size_on_slider = 1;
	if(parameters.items){
		items_size_on_slider = parameters.items;
	}
	if(!parameters.margin){
		parameters.margin = 0;
	}
	if(parameters.responsiveClass){
		var w = window.innerWidth;

		for(var p in parameters.responsive){
			if(p <= w){
				items_size_on_slider = parameters.responsive[p];
			}else{
				break;
			}
		}
	}

	var item_width;

	// Обрабатываем ширину каждого итема
	if(items_size_on_slider){
		width = $(obj).children('.my-slider-outer').width();

		if(parameters.margin){
			width = width - (items_size_on_slider - 1) * parameters.margin;
			$(obj).find('.item').css('margin-right', parameters.margin+'px');
		}
		item_width = width / items_size_on_slider;
		$(obj).find('.item').css('width', item_width+'px');
	}

	// Высчитываем количество итеов и считаем ширину контента
	var size_item = $(obj).find('.item').size();
	var width_content = Math.ceil(size_item * (item_width + parameters.margin));

	// Клонируем слайды, если их меньше, чем нужно
	if(parameters.infinity){
		while(size_item - items_size_on_slider < 2){
			$(obj).find('.my-slider-content').append( $(obj).find('.my-slider-content').html() );
			size_item = $(obj).find('.item').size();
			width_content = Math.ceil(size_item * (item_width + parameters.margin));
		}
	}

	//Строим контейнер
	$(obj).find('.my-slider-content').css('width', width_content+'px');

	// ###########################################
	// ############### Next & Prev ###############
	// ###########################################
	var left = 0;
	if(parameters.infinity && !left){
		move_item('left');
	}
	$(obj).find('.next , .prev').click(function(){

		if( $(this).is('.next')){
			if((size_item - items_size_on_slider - left) > 0){
				left++;
			} else if(parameters.loop){
				left = 0;
			}

			if(parameters.infinity && !(size_item - items_size_on_slider - left) || left == 2){
				setTimeout(function(){
					move_item('right');
				},400);
			}
		} else if( $(this).is('.prev')){
			if(left > 0){
				left--;
			} else if(parameters.loop){
				left = size_item - items_size_on_slider;
			}

			if(parameters.infinity && !left){
				setTimeout(function(){
					move_item('left');
				},400);
			}
		}
		setTimeout(function(){
			$(obj).find('.my-slider-content').css('margin-left', -left * (item_width + parameters.margin)+'px');
		},100);

	});


	function move_item(direction){
		$(obj).find('.my-slider-content.transition').removeClass('transition');
		if(direction == 'left'){
			var item = $(obj).find('.my-slider-content .item:last');
			$(obj).find('.my-slider-content').prepend( $(item)[0].outerHTML );
			$(item).remove();
			left++;
		}else if(direction == 'right'){
			var item = $(obj).find('.my-slider-content .item:first');
			$(obj).find('.my-slider-content').append( $(item)[0].outerHTML );
			$(item).remove();
			left--;
		}
		$(obj).find('.my-slider-content').css('margin-left', -left * (item_width + parameters.margin)+'px');
		setTimeout(function(){
			$(obj).find('.my-slider-content').addClass('transition');
		},300);
	}
}
resp = {
	items: 3,
	margin: 10,
	nav: true,
	dots: true,
	infinity: true,
	responsiveClass: false,
	responsive: {
		544: 2,
		768: 3,
		992: 4
	}
};
// $(document).ready(function() {
// 	my_slider(".my-slider",resp);
// });
// $(window).resize(function(){
// 	my_slider(".my-slider",resp);
// });

swipe_status = 0;
$(document).ready(function() {
	var mobile   = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
	var start = mobile ? "touchstart" : "mousedown";
	var move = mobile ? "touchmove" : "mousemove";
	var end = mobile ? "touchend" : "mouseup";

	$(window).bind(start,function(){
		if(mobile){
			event.pageX = event.changedTouches[0].pageX;
		}
		if(w <= 767){
			var check_active = $('.outer-mobile-nav').is('.active');

			if(event.pageX <= 10 || 1==1){
				var coord_start = event.pageX;
				swipe_status = 1;

				$(window).bind(move ,function(){
					if(swipe_status == 1){
						if(mobile){
							event.pageX = event.changedTouches[0].pageX;
						}

						left = event.pageX - coord_start;

						$('.outer-mobile-nav').css('opacity','1');

						if(!check_active){
							if(left >= w/10){
								$('.outer-mobile-nav').css('left','calc(-100% + '+left+'px)');
							}else{
								$('.outer-mobile-nav').attr('style','');
							}
						} else {
							if(left <= -w/10){
								$('.outer-mobile-nav').css('left',left+'px');
							} else {
								$('.outer-mobile-nav').attr('style','');
							}
						}
					}
				});

				$(window).bind(end,function(){
					swipe_status = 0;
					if(left >= w/2 && !check_active ){
						$('.outer-mobile-nav').attr('style','');
						$('.outer-mobile-nav').removeClass('default');
						$('.outer-mobile-nav').addClass('active');
					} else if(!check_active){
						$('.outer-mobile-nav').attr('style','');
					}

					if(-left >= w/2 && check_active ){
						$('.outer-mobile-nav').removeClass('active');
						$('.outer-mobile-nav').addClass('default');
					} else if(check_active){
						$('.outer-mobile-nav').attr('style','');
					}
				});
			}
		}
	});
});

// Открытие попапов (поиск и добавить информацию)
$(document).ready(function() {

	$('.band-nav__icon.my-add-info , .band-nav__icon.my-massage-error').click(function(event) {
		$('.my-overlay').addClass('active');
		$('.my-overlay .my-overlay-item').removeClass('active');

		if( $(this).is('.my-add-info') ){
			$('.my-overlay .my-overlay-item[data-type="overlay-add"]').addClass('active');
		}
		if( $(this).is('.my-massage-error') ){
			$('.my-overlay .my-overlay-item[data-type="overlay-error"]').addClass('active');
		}
	});

	$('.my-overlay-bg , .button.button4').click(function(event) {
		$('.my-overlay').removeClass('active');
		$('.my-overlay .my-overlay-item').removeClass('active');
	});

	$('input.search__input').keyup(function(event) {
		if( $('input.search__input').val() != '' ){
			$('.row-search-result').addClass('active');
		}	else {
			$('.row-search-result').removeClass('active');
		}
	});
});

$('.radio-my').click(function(event) {
	$('.radio-my').removeClass('active');
	$(this).addClass('active');
});
