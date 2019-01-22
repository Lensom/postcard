$(function() {

	// Счетчик количества символов в textarea

	$("textarea").keyup(function() {
		var count =$(this).val();
			if(count.length <= 350) {
				$('.counter').html(count.length);
			}
		return false;
	});

	// Клик на открытку

	$('.card-v').on('click', function(e){	
		if (!$(this).closest('.slot').hasClass('active')) {
			$('.slot').removeClass('active');	
			$(this).closest('.slot').addClass('active');
		} else {
			$('.slot').removeClass('active');
		}				
	})

});
