jQuery( document ).ready(function($) {

	$(document).on('gform_confirmation_loaded', function(event, formId){
	    $('.contact-form-wrap > h2').hide();
	});
	
	if ($('a.down-arrow').length){
		$('a.down-arrow').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: $('.banner-bottom').offset().top}, 500, 'swing');
		});
	}

});