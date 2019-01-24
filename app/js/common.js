$(document).ready(function(){
	
// Счетчик количества символов в textarea, span alert

$("textarea").keyup(function() {
	var count =$(this).val();
	// Вывод количества символов
		if(count.length <= 350) {
			$('.counter').html(count.length);
		};

		// Скрытие алерта

		if (count.length >= 10) {
			$('.alert-span').hide();
		} else if (count.length < 10) {
			$('.alert-span').show();
		}
		// Сайз параграфа в карточке 

		 if (count.length <= 50) {
			$('.text-card').css('font-size', '18px')
		} else if (count.length >= 50 && count.length <=130) {
			$('.text-card').css('font-size', '16px')
		} else if (count.length >= 131 && count.length <=200) {
			$('.text-card').css('font-size', '14px')
		} else {
			$('.text-card').css('font-size', '12px')
		}

		$(".text-card").html(count);
	return false;
});

// Клик на открытку

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

//  slick slider


$(".multiple-items").slick({
	dots: false,
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	variableWidth: true
	
});
// Слайдер для choose-3


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


// tabs

$('.tab-active').on('click', function(e){
	e.preventDefault();
	$(this).parent().find('.tab-active').addClass('tab-non-active');
	$(this).removeClass('tab-non-active');
});


$('.tab').on('click', function(){
	$('.choose').addClass('hidden')
	$('.choose').eq($(this).index()).removeClass('hidden')
})

$('.third-etap').on('click', function(){
	$('.decor.draggable, .alert-drag').removeClass('hidden')
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

	// drag n drop - 3 этар
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


	// Сохранение данных открытки пользователя

	var myPostcard = {
		background: '',
		message: '',		
		sticker: '',
		colorText: '',
		posLeft: '',
		posTop: ''
	};

	$('.btn.btn-submit').on('click', function(){
		myPostcard.message = $('textarea').val();
		myPostcard.posLeft = $('#draggable3').css('left');
		myPostcard.posTop = $('#draggable3').css('top');
		myPostcard.colorText = $('.text-card').css('color');
		var bgcList = $('#card').attr('class').split(/\s+/);
		var decorList = $('#draggable3').attr('class').split(/\s+/);
		$.each(bgcList, function(index, item) {
				if (item == 'bgc1'|| item == 'bgc2' || item == 'bgc3' || item == 'bgc4' || item == 'bgc5' || item == 'bgc6') {
						myPostcard.background = item;
				}
		});
		$.each(decorList, function(index, item) {
				if (item == 'decor-1'|| item == 'decor-2'|| item == 'decor-3'|| item == 'decor-4'|| item == 'decor-5'|| item == 'decor-6'|| item == 'decor-7') {
						myPostcard.sticker = item;
				}
		});		

		console.log(myPostcard)
	})
	
// Последняя страница

// не давать my-card active



	


	
}) 


