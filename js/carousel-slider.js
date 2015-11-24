jQuery(document).ready(function() {
    jQuery('#slideshow').cycle({
		timeout:         7000,  // milliseconds between slide transitions
		easing: 'easeOutCubic',
		randomizeEffects: false,
		pager:  '#slider-nav',
		fx: 'scrollLeft,scrollDown,scrollRight,scrollUp' 
	});
});