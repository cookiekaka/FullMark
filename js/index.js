$("span.menu").click(function(){
	$(".top-menu ul").slideToggle("slow" , function(){
	});
});
$(document).ready(function() {
	$().UItoTop({ easingType: 'easeOutQuart' });
});
addEventListener("load", function() {
	setTimeout(hideURLbar, 0); 
}, false);
function hideURLbar(){
	window.scrollTo(0,1); 
};
jQuery(function($) {
	$(".swipebox").swipebox();
});
new WOW().init();