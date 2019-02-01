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

// Закрытие валентинки вне блока
$(document).mouseup(function (e){ 
	var block = $(".card-v"); 
	if (!block.is(e.target) 
			&& block.has(e.target).length === 0) { 
				$('.slot').removeClass('active');	
	}
});

// Счетчик количества символов в textarea для скрытие alert и disabled button submit
function alertHidden() {
	var textVal = $("textarea").val();
		if (($('textarea').val().length > 10) && ($(".card-v .decor").length > 0))  {
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
		let start = 350;
		$('.counter').html(start - count.length);
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

$('.dec').on('click', function(e){
	e.preventDefault();
	$(this).parent().find('.dec').removeClass('active');
	$(this).addClass('active');
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
	// $('.alert-drag').hide();
})

$('.first-etap').on('click', function(){
	$('.alert-drag').addClass('hidden');
})

$('.second-etap').on('click', function() {
	alertHidden();
	$('.alert-drag').addClass('hidden');
})

$('.third-etap').on('click', function(){
	alertHidden();
	$('.alert-drag').removeClass('hidden');
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
function dragContainer() {
	$( ".decor" ).draggable({ containment: ".card-v", scroll: false })
}
function hideDecor() {
	$( ".last-decor" ).dblclick(function() {
		$(this).detach();
	});
}


$('.dec').on('click', function(e){
	var preText = $('.card-v').html()
	var index = parseInt($(this).attr('class').match(/d-\d/)[0].match(/\d/)[0]);
	var text = preText + '<div style="left: 150px; top: 100px;" class="decor decor-'+index+' draggable ui-widget-content last-decor ui-draggable ui-draggable-handle"></div>'
	if ($('.card-v').find('.decor').hasClass('decor-' + index)) {
		// $('.decor .decor-' + index).detach();
	$('.decor.draggable.ui-widget-content.last-decor.ui-draggable.ui-draggable-handle.decor-' + index).detach()

	} else {
		$('.card-v').html(text)
	}	
	
	dragContainer()
	alertHidden();
	hideDecor();
	return false;
});



// Сохранение данных открытки пользователя
var myPostcard = {
	background: '',
	message: '',		
	colorText: '',
	stickers: []
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
	function setCookie (name, value, expires, path, domain, secure) {
		document.cookie = name + "=" + escape(value) +
				((expires) ? "; expires=" + expires : "") +
				((path) ? "; path=" + path : "") +
				((domain) ? "; domain=" + domain : "") +
				((secure) ? "; secure" : "");
}
var two = document.cookie.split(';');
while(name = two.pop()) setCookie(name.split('=')[0], '' , "Mon, 18-Jan-2020 00:00:00 GMT", "/"); 

	myPostcard.message = $('.text-card').text();
	myPostcard.colorText = $('.text-card').css('color');
	var bgcList = $('#card').attr('class').split(/\s+/);
	var decorList = $('.decor')
	decorList.each(
		function(i){
			var item = $(this)
			var arr = item.attr('class').split(/\s+/);
			arr.forEach(element => {
				if (element == 'decor-1'|| element == 'decor-2'|| element == 'decor-3'|| element == 'decor-4'|| element == 'decor-5'|| element == 'decor-6'|| element == 'decor-7') {
					setCookie("sticker" + i, element , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
					setCookie("stickerPosLeft" + i, item.css('left') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
					setCookie("stickerPosTop" + i, item.css('top') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
				}	
			});			
		}
	)
	$.each(bgcList, function(index, item) {
			if (item == 'bgc1'|| item == 'bgc2' || item == 'bgc3' || item == 'bgc4' || item == 'bgc5' || item == 'bgc6') {
					myPostcard.background = item;
					setCookie("background", item , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
			}
	});
	$('.decor').each(function(i){
		var obj = {};
		var top = $(this).css('top');
		var left = $(this).css('left');
		obj.posTop = top;
		obj.posLeft = left;
		var classSticker = $(this).attr('class').split(/\s+/);
		classSticker.forEach(element => {
			if (element == 'decor-1'|| element == 'decor-2'|| element == 'decor-3'|| element == 'decor-4'|| element == 'decor-5'|| element == 'decor-6'|| element == 'decor-7') {
				obj.sticker = element;
	
			}	
		});
		myPostcard.stickers.push(obj);
	})
	
	
	setCookie("message", $('textarea').val() , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("posTop", $('.decor').css('top') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("posLeft", $('.decor').css('left') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");
	setCookie("colorText", $('.text-card').css('color') , "Mon, 18-Jan-2020 00:00:00 GMT", "/");


	location.href="step-2.html"

})


var getMessage = getCookie("message");		
var getBackground = getCookie("background");
var getColorText = getCookie("colorText");
var getSticker = getCookie("sticker");

var new_divs=[];
var cook = document.cookie;
var count = 0;
if (cook.length) {
	count = cook.match(/stickerPosLeft/g).length;
}
for (let index = 0; index < count; index++) {
	new_divs.push({
		sticker:getCookie("sticker"+index),
		stickerPosLeft:getCookie("stickerPosLeft"+index),
		stickerPosTop:getCookie("stickerPosTop"+index),
	})
}

if(getBackground) {
	$('#card').removeClass('bgc1 bgc2 bgc3 bgc4 bgc5 bgc6');
	$('#card').addClass(getBackground);
} else {
	$('#card').addClass('bgc6');
}

new_divs.forEach(function(v){
	var new_new_div = $('<div style="" class="decor draggable ui-widget-content last-decor ui-draggable ui-draggable-handle"></div>')
	new_new_div.addClass(v.sticker)
	new_new_div.css({
		"top":v.stickerPosTop,
		"left":v.stickerPosLeft,
	})
	$('#card').append(new_new_div);
})

$('.text-card').css('color', getColorText)
$("#text-card").text(getMessage);
$('#textarea').val(getMessage)
dragContainer()

if(getMessage && getSticker && getBackground) {
	$('.btn.btn-submit').removeAttr('disabled')
}

// Ajax запросы
function take_post(){
	var myPostcard = {
		background: getBackground.replace(/<\/?[^>]+>/g,''),
		message: getMessage.replace(/<\/?[^>]+>/g,''),		
		colorText: getColorText.replace(/<\/?[^>]+>/g,''),
		stickers: new_divs
	}

	var data = {
					"user_name" : $('.name').val(),
					"user_email" : $('.email').val(),
					"user_phone" : $('.phone').val(),
					"letter_data" : myPostcard
			};

	$.post('save_new_letter.php', {data:data}, function(data){
		if (data.length > 0) {
			$('.repeat-email').removeClass('hidden');
			$('.repeat-phone').removeClass('hidden');
		} else {
			location.href="last-page.html"
		}
	});

};


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
		
	// if (!name.length) {
	// 	$('.name').addClass('error');
	// } else {
	// 	$('.name').removeClass('error');
	// }
	// if (!validatePhone(phone)) {
	// 	$('.phone').addClass('error');
	// } else {
	// 	$('.phone').removeClass('error');
	// }
	// if (!validateEmail(email)) {
	// 	$('.email').addClass('error');
	// } else {
	// 	$('.email').removeClass('error');
	// }

	if (name.length && validatePhone(phone) && validateEmail(email)) {
		take_post();
	} else {
		$('.repeat-email').addClass('hidden');
		$('.repeat-phone').addClass('hidden');
	}

	take_post();
		
	})


	$('.validate').on('input', function() {
	
		var email = $('.email').val();
		var name = $('.name').val();
		var trigger = false;
		function validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(String(email).toLowerCase());
		}

		if($('#phone').val().length > 16) {
			trigger = true;
			console.log(trigger)
		}

		console.log($('#phone').val().length)

	
		if (name.length && validateEmail(email) && trigger) {
			$('.btn.btn-submit.ready').prop('disabled', false)
		} else {
			$('.btn.btn-submit.ready').prop('disabled', true)
		}
	});


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
	return false;
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


hideDecor();
alertHidden();

$('.social-element').on('click', function(){
	console.log('asd')
})

})