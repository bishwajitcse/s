
$(document).ready(function(){
	$('.dot').mouseenter(function(){
		$(this).each(function(){


		if($(this).hasClass('yellow')){
			$(this).append('<span class="marker yellow"></span>');
			$('.text').show();
			$('.text.yellow').show();
			$('.red').stop().hide();
			$('.blue').stop().hide();
			$('.purple').stop().hide();
			return false;
		}
		else if($(this).hasClass('red')){
			$(this).append('<span class="marker red"></span>');
			$('.text').hide();
			$('.text.red').show();
			$('.yellow').stop().hide();
			$('.blue').stop().hide();
			$('.purple').stop().hide();
			return false;
		}
		else if($(this).hasClass('blue')){
			$(this).append('<span class="marker blue"></span>');
			$('.text').hide();
			$('.text.blue').show();
			$('.yellow').stop().hide();
			$('.red').stop().hide();
			$('.purple').stop().hide();
			return false;
		}
		else if($(this).hasClass('purple')){
			$(this).append('<span class="marker purple"></span>');
			$('.text').hide();
			$('.text.purple').show();
			$('.yellow').stop().hide();
			$('.red').stop().hide();
			$('.blue').stop().hide();
			return false;
		}
		return false;

		});
	});
	$('.dot').mouseleave(function(){
		$(this).find('.marker').remove();
		$('.dot').stop().show();
		$('.text').hide();
		$('.text.normal').stop().show();
		return false;
	});
	// $('.overlay').mouseenter(function(){
	// 	$('.dot').show();
	// });
	// $('.overlay').mouseleave(function(){
	// 	$('.dot').hide();
	// });
	// <span class="marker yellow"></span>

});
