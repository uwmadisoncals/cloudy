jQuery(document).ready(function() {
    jQuery('#slideshow').cycle({
		timeout:         5000,  // milliseconds between slide transitions
		easing: 'easeInOutCubic',
		pager:  '#slider-nav',
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});