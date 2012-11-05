$(document).ready(function() {
      //$('#roundHolder').roundabout();
      //btnNext: ".next"
      //autoplay: true
      
      $('.roundabout-holder li')
			.bind({
				"reposition": function() {
					var degrees = $(this).data('roundabout').degrees,
						roundaboutBearing = $(this).parent().data('roundabout').bearing,
						rotateY = Math.round(roundaboutBearing - degrees);
					
					$(this).css({
						"-webkit-transform": "perspective(2000) rotateY(" + rotateY + "deg)",
						"-moz-transform": "perspective(2000) rotateY(" + rotateY + "deg)",
						"transform": "perspective(2000) rotateY(" + rotateY + "deg)"
					});
				}
				
			//$(this).css('top', '0px');
			})
		
		$('.roundabout-holder').roundabout({
			minScale: 0.7,
			easing: 'easeOutExpo',
			btnStartAutoplay: ".play",
			btnStopAutoplay: ".stop",
			btnNext: ".next",
			btnPrev: ".prev",
			autoplay: true,
			duration: 1600
		});
});

window.onload = function() {

		$('.play').click( function(){
			console.log('clicked play');
			$(this).removeClass('play').addClass('stop');
			$(this).html("&#9689;");
		});
		
		$('.stop').click( function(){
			console.log('clicked stop');
			$(this).removeClass('stop').addClass('play');
			$(this).html("&#9658;");
		});
}
