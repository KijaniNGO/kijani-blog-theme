jQuery(document).ready(function($){
    $('body, html').addClass('overflow-x-hidden');

    $('.nav-trigger').on('click', function(){
        $('.nav-trigger').toggleClass('clicked');
        $('.top-bar').toggleClass('nav-active');
        // doesn't work, because in Firefox transitions break when parent overflow is changed, so instead:
        if( $('nav').hasClass('active') ) {
            $('nav').removeClass('active').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
                $('body, html').removeClass('overflow-hidden');
                $('body, html').addClass('overflow-x-hidden');
            });
        } else {
            $('nav').addClass('active').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
                $('body, html').removeClass('overflow-x-hidden');
                $('body, html').addClass('overflow-hidden');
            });
        }
    });

	if (!$('main').hasClass('fixed-nav')) {
		var height = 100;
		$(window).on('scroll', {prevTop: 0}, function () {
			var currTop = $(window).scrollTop();
			if ( currTop < 1) {
				$('.top-bar').removeClass('nav-slide-in');
				$('.top-bar').removeClass('inactive');
				$('.top-bar').removeClass('active');
			}
			if (currTop > height) {
				$('.top-bar').addClass('nav-slide-in');
				if (currTop > height*2) {
					if (currTop < this.prevTop ) { // scrolling up
						$('.top-bar').removeClass('inactive');
						$('.top-bar').addClass('active');
					} else { // scrolling down
						if (!$('.top-bar').hasClass('nav-active')){
							$('.top-bar').removeClass('active');
							$('.top-bar').addClass('inactive');
						}
					}
				}
			}
			this.prevTop = currTop;
		});
	}

});
