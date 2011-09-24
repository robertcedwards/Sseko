// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

    $.backstretch("wp-content/themes/Sseko/images/bg.jpg", {centeredX: false}, {centeredY: false});

});
$(window).load(function() {
	$('.blueberry').blueberry();
});

/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/