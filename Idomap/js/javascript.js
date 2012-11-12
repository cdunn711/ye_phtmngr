$(document).ready(function() {

		/*
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
		*/
		
		$('.roundabout-holder').roundabout({
			minScale: 0.7,
			easing: 'easeOutExpo',
			btnToggleAutoplay: ".control-play",
			btnNext: ".next",
			btnPrev: ".prev",
			enableDrag: true,
			autoplay: true,
			duration: 1000
		});
		/*
		var control = $('.controls').children();
		for (var i in control){
	
		}*/
		
		/*
		$('.timelineMinor dt a').click({
			console.log("opened this");

			minScale: 0.7,
			easing: 'easeOutExpo',
			btnToggleAutoplay: ".control-play",
			btnNext: ".next",
			btnPrev: ".prev",
			enableDrag: true,
			autoplay: true,
			duration: 1000
		});		*/
		
		$("#register").validator();
		
		$(".register input[required='required']").after(" <span style='color:red'>*</span>");

});

window.onload = function() {

		$.timeliner();
		
		$('.control-play').click( function(){
			if ($(this).hasClass('on')){
				$(this).removeClass('on');
				$(this).html("&#9658;");
			}
			else{
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
				position: [50, 50], //x, y
				modalColor: '#b0c4de',
				modalClose: false,
            	opacity: 0.6,
            	positionStyle: 'fixed'
			});
		});
}
