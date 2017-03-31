jQuery(document).ready(function(){
	jQuery('.link-slide').click(function(){
		jQuery('.fullpage-wrapper').addClass('inSingle');
	})
});

jQuery(document).ready(function() {
	jQuery('#fullpage').fullpage({
		verticalCentered: false,
		css3:false
	});

	jQuery('.menu').click(function(){
		jQuery(this).toggleClass('nav-open')
	})
	jQuery('.masque-single').fadeOut(800);

	var nbItems = jQuery('.item-nav').length;

	var widthContainer = 540 * nbItems;
	widthContainerFull = widthContainer - 40;

	jQuery('.container-items').width(widthContainerFull);

	jQuery( document ).on( 'mousemove', function( event ) {{


		var mouse = {
			x: 0, // Current x-axis position of mouse
		};

		var containerItems = jQuery('.container-items').width();
		var docWidth = jQuery(window).width();

		var docMinWidth = jQuery(window).width();

		mouse.x = event.clientX || event.pageX;

		mouse = mouse.x - 0;
		var Translate = mouse * 100 / docWidth;
		//console.log(Translate);

		jQuery('.container-items').css({
             '-webkit-transform':'translateX(-'+Translate+'%) translateY(-50%)'
            ,'-moz-transform':'translateX(-'+Translate+'%) translateY(-50%)'
            ,'transform':'translateX(-'+Translate+'%) translateY(-50%)'
        });

	}
	});

	jQuery('.home a').click(function(event){
		event.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('.masque').addClass('link-click');
		setTimeout(function(){
			jQuery('.big-masque').fadeIn();
			document.location.href=link;
		}, 700)
	});

	jQuery('.single a').click(function(event){
		var target = jQuery(this).attr('target');
		if(target != '_blank'){
			event.preventDefault();
			var link = jQuery(this).attr('href');
			jQuery('.masque-single').fadeIn();
			document.location.href=link;
		}
	});
	jQuery('.menu').click(function(){
		jQuery('.menu-container').fadeToggle();
	})
});
