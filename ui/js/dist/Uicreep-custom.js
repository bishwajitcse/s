// Lets begin playing with jquery
// =====================================================
// $(window).resize(function() {
  // add the stuff here to execute the your slider again;
// 	$(function()
// 		{
// 			$('.scroll-pane').jScrollPane();
// 	});
// });
	// $(function()
	// 	{
	// 		$('.scroll-pane').jScrollPane();
	// });

	//Team popup start
	var windowHeightRV = $(window).height()/2,
	    windowWidthRV = $(window).width()/2,
	    teamMemberWidth = $('.popcontainer').outerWidth()/2,
	    teamMemberHeight = $('.popcontainer').outerHeight()/2,
	    leftPosition = windowWidthRV - teamMemberWidth;
	    topPosition = windowHeightRV - teamMemberHeight;
	   
	    $(window).resize(function(){
	      var windowHeightRV = $(window).height()/2,
	      windowWidthRV = $(window).width()/2,
	      teamMemberWidth = $('.popcontainer').outerWidth()/2,
	      teamMemberHeight = $('.popcontainer').outerHeight()/2,
	      leftPosition = windowWidthRV - teamMemberWidth;
	      topPosition = windowHeightRV - teamMemberHeight;
	      if ($(window).width() > 767) {     
	        $('.popcontainer').css('position', 'fixed').css('top', topPosition).css('left',leftPosition );
	      };
	    });
	    //teamMember center function   
	    if ($(window).width() > 767) {     
	      $('.popcontainer').css('position', 'fixed').css('top', topPosition).css('left',leftPosition );
	    };
	 
	    //teamMember open function
	    $('.emailPop').on('click',function(){
	      
	      $(this).next('.popcontainer').fadeToggle('slow');
	    });
	  //teamMember close function
	  $('.closeBtn').on('click',function(){
	    $('.popcontainer').fadeOut('slow');
	  });
	//Team popup end


// $(function()
// {
// 	$('.scroll-pane').each(
// 		function()
// 		{
// 			$(this).jScrollPane(
// 				{
// 					showArrows: $(this).is('.arrow')
// 				}
// 			);
// 			var api = $(this).data('jsp');
// 			var throttleTimeout;
// 			$(window).bind(
// 				'resize',
// 				function()
// 				{
					
// 					if (!throttleTimeout) {
// 						throttleTimeout = setTimeout(
// 							function()
// 							{
// 								api.reinitialise();
// 								throttleTimeout = null;
// 							},
// 							50
// 						);
// 					}
// 				}
// 			);
// 		}
// 	)

// });


$('.alphabetlist').affix();

$(document).ready(function(){

	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	$('#mobileMenu').click(function(){
		$(".mobile-menu").slideToggle();
	});

	$('.homeslider').flexslider({
		animation: 'slide',
		directionNav: true,
		controlNav: true,
		slideshowSpeed: 3000
		// after: function(){
		// 	$('.homeslider .banner-text').removeClass('animated');
		// 	$('.flex-active-slide .banner-text').addClass('animated');
		// },
		// end: function(){
		// 	// var = $('.homeslider .banner-text').length();
		// 	$('.homeslider .slides li').each(function(){
		// 		$(this).find('.banner-text').removeClass('animated');
		// 	});
		// },
	});
	$('.innerslide').flexslider({
		animation: 'slide',
		directionNav: true,
		controlNav: true,
		slideshowSpeed: 8000
		// after: function(){
		// 	$('.homeslider .banner-text').removeClass('animated');
		// 	$('.flex-active-slide .banner-text').addClass('animated');
		// },
		// end: function(){
		// 	// var = $('.homeslider .banner-text').length();
		// 	$('.homeslider .slides li').each(function(){
		// 		$(this).find('.banner-text').removeClass('animated');
		// 	});
		// },
	});

	$('.innerslider').flexslider({
		directionNav: false,
		controlNav: false,
		slideshowSpeed: 3000
	});

	$('#menu').superfish({
		//add options here if required
	});

	(function(jQuery){
	     jQuery.fn.extend({  
	         accordion: function() {       
	            return this.each(function() {
	            	
	            	var $ul = $(this);
	            	
					if($ul.data('accordiated'))
						return false;
														
					$.each($ul.find('ul, li>div'), function(){
						$(this).data('accordiated', true);
						$(this).hide();
					});
					
					$.each($ul.find('a'), function(){
						$(this).click(function(e){
							activate(this);
							return void(0);
						});
					});
					
					var active = $('aside .active');

					if(active){
						activate(active, 'toggle');
						$(active).parents().show();
					}
					
					function activate(el,effect){
	                    if (!effect) {
					      $(el)
	                       .toggleClass('active')
	                       .parent('li')
	                       .siblings()
	                       .find('a')
	                       .removeClass('active')
	                       .parent('li')
	                       .children('ul, div')
	                       .slideUp('fast');
	                    }
					  $(el)
	                  .siblings('ul, div')[(effect || 'slideToggle')]((!effect)?'fast':null);
					}
					
	            });
	        } 
	    }); 
	})(jQuery);

	$('.aside-menu').accordion();


});
