( function( $ ) {

	$(document).ready(function($){
		
		$('#main-nav').meanmenu({
                    meanMenuOpen: "<span></span><span></span><span></span>",
                    meanScreenWidth: "1050",
		});

		//counters
	    $('.count').counterUp({
	        delay: 10,
	        time: 4000
	    });

		// Go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		$( window ).scroll(function(){
			if ( $( this ).scrollTop() > 100 ) {
				$scroll_obj.fadeIn();
			} else {
				$scroll_obj.fadeOut();
			}
		});

		$scroll_obj.click(function(){
			$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
			return false;
		});

	});

} )( jQuery );