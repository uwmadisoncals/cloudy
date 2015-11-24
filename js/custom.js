jQuery.noConflict();

jQuery(document).ready(function() {
	bluz_toggle();							
	bluz_portfade();							
	bluz_engage();
	bluz_minor();
});

function bluz_toggle(){
	jQuery('.toggle-content').hide();
	jQuery('.toggle').toggle(function () {
        jQuery(this).css({"background-position":"left bottom"});
		jQuery(this).next(".toggle-content").show("normal");
      },
      function () {
        jQuery(this).css({"background-position":"left top"});
		jQuery(this).next(".toggle-content").hide("normal");
	  });
}


function bluz_portfade(){
	jQuery('a.port-box img').hover(function(){
		jQuery(this).stop().fadeTo(500, 0.4); //portfolio effect
	}, function() {
		jQuery(this).stop().fadeTo(300, 1);
	});
}

function bluz_engage(){
	jQuery('#tabs').tabs({ fx: { opacity: 'toggle', height: 'toggle' } }); // make the tabs work
	jQuery('ul.sf-menu').superfish({ 
        delay:       250                          // one second delay on mouseout 
	});
	jQuery("a[rel^='prettyPhoto']").prettyPhoto(); // makes lightbox work
}

function bluz_minor(){
	jQuery('span.close').click(function() {
		jQuery(this).parent().fadeOut(400);					   
	});
}

