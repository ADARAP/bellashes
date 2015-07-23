jQuery(document).ready(function($){	
	"use strict";
	
	//BxSlider
	$('.bxslider').bxSlider({
		mode : 'fade',
		auto:true
	});

	//ToolTip
	$("[data-toggle='tooltip']").tooltip();
	
	//Carousel
	$('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 131,
        itemMargin: 0,
        asNavFor: '#slider'
    });

    //FlexSlider
	$('#slider').flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
	
	//Accordion for Whats New page
	if($('.accordion-inner').length){
		if (!$.browser.webkit) {
		  $('.accordion-inner').jScrollPane();
		}
	}
});

	if($('#myTab').length){
		$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
	}