$(function() {

	//configuration for opacity timer
	var opTimer = 500;

	//reference to specific buttons or links to animate on click
   	$("#sign, #link1, #link, #log, #link2, #link3, #link4").click(function(){
   		$(this).animate({opacity: '0.5'}, opTimer, function() {
   			$(this).animate({opacity: '1'});
   		});
   	}); 
});