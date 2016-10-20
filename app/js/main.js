
$(window).resize(function() {
	imageResize();
	sliderNavigation();

	w = window.innerWidth;
	if (w > 768 ) {
			$('.outer-mobile-nav').css('display', 'none');
			$('body').css('overflow-y', 'scroll');
	}
});
$(window).load(function() {
	sliderNavigation();
});

$(document).ready(function() {
	imageResize();


	// Мобильное меню
	$(".mobile-nav-button, .mobile-nav-button__close").on('click',function(){
		if ($('.outer-mobile-nav').css('display') == 'none') {
			$('.outer-mobile-nav').css('display', 'block');
			$('body').css('overflow-y', 'hidden');
		} else if ($('.outer-mobile-nav').css('display') == 'block') {
			$('.outer-mobile-nav').css('display', 'none');
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
		$(".bx-default-pager").css('top',topp+"px");
	} else {
		topp = Math.round($(".section-news img").height()*0.85)-14;
		$(".bx-default-pager").css('top',topp+"px");
	}
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
