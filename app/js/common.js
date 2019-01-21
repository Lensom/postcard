$(function() {

	// Счетчик количества символов в textarea

	$("textarea").keyup(function() {
		var count =$(this).val();
			if(count.length <= 350) {
				$('.counter').html(count.length);
			}
		return false;
	});

});
