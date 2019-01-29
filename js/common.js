$(document).ready(function(){

// Размер символов в каждой открытке
function colSymbols() {
	$('.text-card').each(function(indx, element){
		var textSize = $(this).text()
		if (textSize.length <= 50) {
			$(this).css('font-size', '18px')
		} else if (textSize.length >= 50 && textSize.length <=130) {
			$(this).css('font-size', '16px')
		} else if (textSize.length >= 131 && textSize.length <=200) {
			$(this).css('font-size', '14px')
		} else {
			$(this).css('font-size', '12px')
		}
	});	
}
 
// Раскрытие открытки по клику
function openPostcard() {
	$('.card-v').on('click', function(e){	
		if ($(this).closest('.slot').hasClass('my-card')) {
			return false;
		} else if (!$(this).closest('.slot').hasClass('active')) {
			$('.slot').removeClass('active');	
			$(this).closest('.slot').addClass('active');
		} else {
			$('.slot').removeClass('active');
		}				
	})
}

// Счетчик количества символов в textarea для скрытие alert и disabled button submit
function alertHidden() {
	var textVal = $("textarea").val();
	if (($('textarea').val().length > 10) && (!$('.decor.draggable').hasClass('hidden')))  {
		$('.alert-span').hide();
		$('.btn.btn-submit').prop('disabled', false)
	} else if (($('textarea').val().length > 10))  {
		$('.alert-span').hide();
	} else if (textVal.length < 10) {
		$('.alert-span').show();
		$('.btn.btn-submit').prop('disabled', true)
	}

}


$("textarea").keyup(function() {
	// Вывод количества символов
	var count =$(this).val();

	if(count.length <= 350) {
		$('.counter').html(count.length);
	};

	alertHidden();
	colSymbols();

	// Вывод в параграф
	$(".text-card").text(count);
	
	return false;
});

//  slick slider


$(".multiple-items").slick({
	dots: false,
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	variableWidth: true,
	responsive: [
    {
      breakpoint: 1300,
      settings: {
				dots: false,
				infinite: true,
        slidesToShow: 3,
				slidesToScroll: 3,
				variableWidth: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
				dots: false,
				infinite: true,
        slidesToShow: 2,
				slidesToScroll: 2,
				variableWidth: true,
      }
    }
  ]
	
});


// backround choose-1 
$('.el').on('click', function(e){
	e.preventDefault();
	$('.card-v').removeClass('bgc1 bgc2 bgc3 bgc4 bgc5 bgc6');
	$(this).parent().find('.el').removeClass('active');
	$(this).addClass('active');
});

$('.el-1').on('click', function(){
	$('.card-v').addClass('bgc1');
});

$('.el-2').on('click', function(){
	$('.card-v').addClass('bgc5');
});

$('.el-3').on('click', function(){
	$('.card-v').addClass('bgc4');
});

$('.el-4').on('click', function(){
	$('.card-v').addClass('bgc6');
});

$('.el-5').on('click', function(){
	$('.card-v').addClass('bgc2');
});

$('.el-6').on('click', function(){
	$('.card-v').addClass('bgc3');
});

$('.tab-active').on('click', function(e){
	e.preventDefault();
	$(this).parent().find('.tab-active').addClass('tab-non-active');
	$(this).removeClass('tab-non-active');
});


// Переключатели этапов открытки
$('.tab-active').on('click', function(e){
	e.preventDefault();
	$(this).parent().find('.tab-active').addClass('tab-non-active');
	$(this).removeClass('tab-non-active');
});

$('.tab').on('click', function(){
	$('.choose').addClass('hidden')
	$('.choose').eq($(this).index()).removeClass('hidden')
})

$('.second-etap').on('click', function() {
	alertHidden();
})

$('.third-etap').on('click', function(){
	$('.decor.draggable, .alert-drag').removeClass('hidden')
	$('.decor.draggable').addClass('decor-3')
	if (($('textarea').val().length > 10) && ($('.decor.draggable:not(.hidden)'))) {
		$('.btn.btn-submit').removeAttr('disabled')
	} 
})

// Выбор цвета текста 
var colorGray =  '#4b4b4b';
var colorGreen =  '#136464';
var colorViolet =  '#564b64';
var colorRed =  '#6b163c';
var text = $('.text-card');

$('.color').on('click', function(e){
	e.preventDefault();
	$(this).parent().find('.color').removeClass('active');
	$(this).addClass('active');

	if ($('.gray').hasClass('active')) {
		text.css('color', colorGray )
	} else if ($('.green').hasClass('active')) {
		text.css('color', colorGreen )
	} else if ($('.violet').hasClass('active')) {
		text.css('color', colorViolet )
	} else if ($('.red').hasClass('active')) {
		text.css('color', colorRed )
	}
});

// jqueryUi drag-n-drop  - 3 этап открытки
$( "#draggable3" ).draggable({ containment: ".card-v", scroll: false })

$('.dec').on('click', function(e){
	e.preventDefault();
	$('.decor').removeClass('decor-1 decor-2 decor-3 decor-4 decor-5 decor-6 decor-7');
	$(this).parent().find('.dec').removeClass('active');
	$(this).addClass('active');
});

$('.d-1').on('click', function(){
	$('.decor').addClass('decor-1');
});
$('.d-2').on('click', function(){
	$('.decor').addClass('decor-2');
});
$('.d-3').on('click', function(){
	$('.decor').addClass('decor-3');
});
$('.d-4').on('click', function(){
	$('.decor').addClass('decor-4');
});
$('.d-5').on('click', function(){
	$('.decor').addClass('decor-5');
});
$('.d-6').on('click', function(){
	$('.decor').addClass('decor-6');
});
$('.d-7').on('click', function(){
	$('.decor').addClass('decor-7');
});

// jqueryUi drag-n-drop для телефона
function touchHandler(event) {
	var touch = event.changedTouches[0];

	var simulatedEvent = document.createEvent("MouseEvent");
			simulatedEvent.initMouseEvent({
			touchstart: "mousedown",
			touchmove: "mousemove",
			touchend: "mouseup"
	}[event.type], true, true, window, 1,
			touch.screenX, touch.screenY,
			touch.clientX, touch.clientY, false,
			false, false, false, 0, null);

	touch.target.dispatchEvent(simulatedEvent);
}

function init() {
    document.addEventListener("touchstart", touchHandler, true);
    document.addEventListener("touchmove", touchHandler, true);
    document.addEventListener("touchend", touchHandler, true);
    document.addEventListener("touchcancel", touchHandler, true);
}
init()

// Сохранение данных открытки пользователя
var myPostcard = {
	background: '',
	message: '',		
	sticker: '',
	colorText: '',
	posLeft: '',
	posTop: ''
};

function setCookie (name, value, expires, path, domain, secure) {
	document.cookie = name + "=" + escape(value) +
		((expires) ? "; expires=" + expires : "") +
		((path) ? "; path=" + path : "") +
		((domain) ? "; domain=" + domain : "") +
		((secure) ? "; secure" : "");
}

function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}			 
	return(setStr);
}

$('.send').on('click', function(){
	myPostcard.message = $('.text-card').val();
	myPostcard.posLeft = $('#draggable3').css('left');
	myPostcard.posTop = $('#draggable3').css('top');
	myPostcard.colorText = $('.text-card').css('color');
	var bgcList = $('#card').attr('class').split(/\s+/);
	var decorList = $('#draggable3').attr('class').split(/\s+/);
	$.each(bgcList, function(index, item) {
			if (item == 'bgc1'|| item == 'bgc2' || item == 'bgc3' || item == 'bgc4' || item == 'bgc5' || item == 'bgc6') {
					myPostcard.background = item;
					setCookie("background", item , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
			}
	});
	$.each(decorList, function(index, item) {
			if (item == 'decor-1'|| item == 'decor-2'|| item == 'decor-3'|| item == 'decor-4'|| item == 'decor-5'|| item == 'decor-6'|| item == 'decor-7') {
					myPostcard.sticker = item;
					setCookie("sticker", item , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
			}
	});		
	setCookie("message", $('textarea').val() , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("posTop", $('#draggable3').css('top') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("posLeft", $('#draggable3').css('left') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("colorText", $('.text-card').css('color') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");

	console.log(myPostcard)	

	location.href="step-2.html"

})

var getMessage = getCookie("message");		
var getBackground = getCookie("background");
var getSticker = getCookie("sticker");
var getColorText = getCookie("colorText");
var getPosLeft = getCookie("posLeft");
var getPosTop = getCookie("posTop");

if(getBackground) {
	$('#card').removeClass('bgc1 bgc2 bgc3 bgc4 bgc5 bgc6');
	$('#card').addClass(getBackground);
	$('.last-decor').removeClass('decor-1 decor-2 decor-3 decor-4 decor-5 decor-6 decor-7 hidden').addClass(getSticker);
} else {
	$('#card').addClass('bgc6');
}
$('#draggable3').css({
	'left': getPosLeft,
	'top' : getPosTop
});

	
$('.text-card').css('color', getColorText)
$("#text-card").text(getMessage);
$('#textarea').val(getMessage)


if(getMessage && getSticker && getBackground) {
	$('.btn.btn-submit').removeAttr('disabled')
}

// Ajax запросы
function take_post(){
	var myPostcard = {
		background: getBackground,
		message: getMessage,		
		sticker: getSticker,
		colorText: getColorText,
		posLeft: getPosLeft,
		posTop: getPosTop
	}

	var data = {
					"user_name" : $('.name').val(),
					"user_email" : $('.email').val(),
					"user_phone" : $('.phone').val(),
					"letter_data" : myPostcard
			};

	$.post('save_new_letter.php', {data:data}, function(data){
		console.log(data);
		if (data.length > 0) {
			$('.repeat-email').removeClass('hidden');
			$('.repeat-phone').removeClass('hidden');
		} else {
			location.href="last-page.html"
		}
	});

};

// Отправка данных пользователя в БД	
$('#form').on('submit', function(e) {
	e.preventDefault();
	
	var email = $('.email').val();
	var phone = $('.phone').val();
	var name = $('.name').val();

	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}

	function validatePhone(phone) {
		var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
		return re.test(String(phone));
	}
		
	if (!name.length) {
		$('.name').addClass('error');
	} else {
		$('.name').removeClass('error');
	}
	if (!validatePhone(phone)) {
		$('.phone').addClass('error');
	} else {
		$('.phone').removeClass('error');
	}
	if (!validateEmail(email)) {
		$('.email').addClass('error');
	} else {
		$('.email').removeClass('error');
	}

	if (name.length && validatePhone(phone) && validateEmail(email)) {
		take_post();
	} else {
		$('.repeat-email').addClass('hidden');
		$('.repeat-phone').addClass('hidden');
	}
		
	})

// Кнопка поделиться в соц сеть odnoklassniki
!function (d, id, did, st, title, description, image) {
	var js = d.createElement("script");
	js.src = "https://connect.ok.ru/connect.js";
	js.onload = js.onreadystatechange = function () {
	if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
		if (!this.executed) {
			this.executed = true;
			setTimeout(function () {
				OK.CONNECT.insertShareWidget(id,did,st, title, description, image);
			}, 0);
		}
	}};
	d.documentElement.appendChild(js);
}(document,"ok_shareWidget",document.URL,'{"sz":12,"st":"oval","nc":1,"nt":1}',"Онлайн-гипермаркет dostavka.by","Создай свою уникальную валентинку и выиграй что-то очень крутое!","http://loveletters.by/img/share.jpg");


// Загрузить еще открытки
$('.show-more').on('click', function(){
	setLetters();
})

function setLetters() {		
	$.post('download_more_letters.php', {data: {}}, function(data){
		var html = $(data);
		$('.slots-s').html(html);			
		colSymbols();
		openPostcard();
	})
}
setLetters();

// Кнопка поделиться в соц сеть twitter 
!function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (!d.getElementById(id)) {
			js = d.createElement(s);
			js.id = id;
			js.src = "//platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);
	}
}(document, "script", "twitter-wjs");

})