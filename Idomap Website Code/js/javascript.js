$(document).ready(function() {

	  $('.popbox').popbox();
		
      //$('#roundHolder').roundabout();
      //btnNext: ".next"
      //autoplay: true
      /*
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
		*/
		$('.roundabout-holder').roundabout({
			minScale: 0.7,
			easing: 'easeOutExpo',
			btnToggleAutoplay: ".control-play",
			btnNext: ".next",
			btnPrev: ".prev",
			enableDrag: true,
			autoplay: true,
			duration: 1600
		});
});

window.onload = function() {

		$('.control-play').click( function(){
			if ($(this).hasClass('on')){
				console.log("was on");
				$(this).removeClass('on');
				$(this).html("&#9658;");
			}
			else{
				console.log("wasn't on");
				$(this).addClass('on');
				$(this).html("&#9689;");
			}
		});
		
		$('.button.menu').click( function(){
			if ($('.signIn').hasClass('on')){
				$('.signIn').fadeOut('slow', function(){
						$(this).css('visibility', 'visible');
					});
					
				$('.signIn').removeClass('on');
				$('.info').addClass('on');
			}
			else{
				$('.signIn').fadeIn('slow', function(){
						$(this).css('visibility', 'hidden');
					});
				
				/*$('.info').fadeOut('slow', function(){
						$(this).css('visibility', 'hidden');
					});*/
				$('.info').removeClass('on');
				$('.signIn').addClass('on');
			}
		});
		
		$('#goRegister').click(function() {
			console.log("pressed register button");
			$('.register').bPopup({
				fadeSpeed: 'slow',
				follow: [false, false], //x, y
				position: [200, 200], //x, y
				modalColor: 'black',
				modalClose: false,
            	opacity: 0.6,
            	positionStyle: 'fixed'
			});
		});
}
