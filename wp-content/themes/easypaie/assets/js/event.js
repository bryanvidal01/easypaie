jQuery(document).ready(function(){

	jQuery('.slider-home').owlCarousel({
		nav:true,
		loop:true,
		items: 1
	});

	jQuery('.read-more').click(function(event){
		var page = jQuery(this).attr('href'); // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		jQuery('html, body').animate( { scrollTop: jQuery(page).offset().top }, speed ); // Go
		event.preventDefault();
	});
});
