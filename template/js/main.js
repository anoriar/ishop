/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});

});


  $(function () {
      $(".img-wrapper img").each(function() {
        var img = $(this);
        var wrapper = $(this).parent(this);
        console.log(img.width());
        console.log(img.height());
        if(img.width() > wrapper.width()){
            if(img.width() > img.height()){
                var percent = (wrapper.height() * 100) / img.height();
                var dx = img.width() - wrapper.width();
                $(this).css({"max-height": "" + percent + "%"});
            }
            $(this).css({width: "100%"});
        }
        /*
        if(img.width() >= img.height()){

            if(img.width() > wrapper.width()){
                 var percent = (wrapper.width() * 100) / img.width();
                 $(this).css({"max-height": "" + 20 + "px"});
            }
            $(this).css({"max-width": "100%"});

        } else{
            if(img.height() > wrapper.height()){
                 var percent = (wrapper.height() * 100) / img.height();
                 $(this).css({"max-width": "" + 24 + "px"});
            }
            $(this).css({"max-height": "100%"});
        }
        */
        //console.log(img.width());
       // console.log(img.height());
        //console.log(wrapper.width());
       // console.log(wrapper.height());
      });
 
  });
  