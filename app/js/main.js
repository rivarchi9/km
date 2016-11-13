
$(window).resize(function() {
	imageResize();
	sliderNavigation();
	sliderNavigationButton();

	w = window.innerWidth;
	if (w > 768 ) {
			$('.outer-mobile-nav').removeClass('active');
			$('.outer-mobile-nav').addClass('default');
	}
});
$(window).load(function() {
	sliderNavigation();
	sliderNavigationButton();
});

$(document).ready(function() {
	imageResize();


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
		if(group){
			toggleClass('default',"[data-type-sliderGroup = "+group+"]");
			toggleClass('active',"[data-type-sliderGroup = "+group+"][data-type-sliderButton = "+elem+"]");
			toggleClass('active',"[data-type-sliderGroup = "+group+"][data-type-sliderElem = "+elem+"]");
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
	$(".content-item-dop-date").on('click',function () {
		$(".outer-calendar").slideToggle(50);
	});
	// Выбод даты в календаре
	$(document).on('click',".day",function () {
		toggleClass('default','.day');
		if(!$(this).is(".today")){
			toggleClass('active',this);
		}
		$(".outer-calendar").slideUp(50);
		mn = new Array('Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентрября','Октября','Ноября','Декабря');
		$(".content-item-dop-date").html($(this).html()+" "+mn[calMonth]);
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
	if (w < 768) {
		topp = Math.round($(".section-news img").height()*0.85)-24;

	} else {
		topp = Math.round($(".section-news img").height()*0.85)-14;
	}
	$(".bx-default-pager").css('top',topp+"px");
}
function sliderNavigationButton(){
	if (w < 320) {
		topp = Math.round($(".section-news img").height()*0.85)-40;

	}else if (w < 544) {
		topp = Math.round($(".section-news img").height()*0.85)-70;

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
var parent;
function open_over(object){
	parent = $(object).parents("[data-type-over-img]");
	$("body").css('overflow-y','hidden');
	$(".overlay-photo").addClass('active');
	$(".inner-overlay-image img").attr('src',$(parent).attr('data-type-over-img'));
	$(".inner-overlay-caption").html($(parent).children(".trailer-caption-hide").html());
}
$(document).ready(function() {
	$("div[data-type-over-img] .parent").on('click',function(){
		open_over(this);
	});
	//	след кадр
	$(".overlay-photo .next").on('click',function(){
		var next = $(parent).next(".trailer-item-col[data-type-over-img]:not(.hide)").find(".parent");
		if($(next).html() == undefined){
			open_over($(".trailer-item-col[data-type-over-img]:not(.hide):first").find(".parent"));
		}else{
			open_over(next);
		}
	});
	//	предыдущий кадр
	$(".overlay-photo .prev").on('click',function(){
		var prev = $(parent).prev(".trailer-item-col[data-type-over-img]:not(.hide)").find(".parent");
		if($(prev).html() == undefined){
			open_over($(".trailer-item-col[data-type-over-img]:not(.hide):last").find(".parent"));
		}else{
			open_over(prev);
		}
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
		if($(this).is('[data-type-slider=input_left]')){
	 		input = "left";
	 	}
	 	if($(this).is('[data-type-slider=input_right]')){
	 		input = "right";
	 	}

		ar = get_inform_about_slider(this);
		val = $(this).val();
		width = $(ar.slider_bg).width();
		left = parseInt($(this).css('left'));

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
 	});
});

slider_status = 0;
coord_x = 0;

$("[data-type-slider=left_controller] , [data-type-slider=right_controller]").mousedown(function(){

	$('body').attr('onmousedown','return false');
	$('body').attr('onselectstart','return false');

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

	$(window).mousemove(function(){
		if(slider_status == 1){
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
	$(window).mouseup(function(){
		slider_status = 0;
		$('body').attr('onmousedown',false);
		$('body').attr('onselectstart',false);
	});
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
});
