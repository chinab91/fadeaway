$(document).ready(function(){
	$(".box_frame").hover(function(){
		$(this).fadeOut(1000,function(){
			var randomR=Math.floor(Math.random()*255)
			var randomG=Math.floor(Math.random()*255)
			var randomB=Math.floor(Math.random()*255)
			$(this).css('background-color', 'rgb('+randomR+','+randomG+','+randomB+')');
			$(this).fadeIn(1000);
		});
	});
});