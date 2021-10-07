$(function() {

	//configuration for margins and for referencing slide number
	var width = screen.width;
	var animationSpeed = 1000;
	var pause = 15000;
	var currentSlide = 1;
	
	//cache DOM
	var $slider = $('#slider');
	var $slideContainer = $slider.find('.slides');
	var $slides = $slideContainer.find('.slide');

	//change margin left to slide to other pictures
	setInterval (function() {
		$slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
			currentSlide++;

			//to recall the first slide instantly, so the slider doesn't end
			if (currentSlide === $slides.length) {
				currentSlide = 1;
				$slideContainer.css('margin-left', 0);
			};
		});
	}, pause)
});