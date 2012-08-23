// Zepto/jQuery fadeLoop plugin for fade slide show effects
(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 2000,
				startIndex : -1,
				fadeFirstImage : true
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut);
			options.fadeFirstImage || pics.eq(0).css(fadeIn);

			(nextPic=function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease);
				indx=indx<plen-1?indx+1:0;
				pics.eq(indx).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)


$(function(){
	$('.backimg > div.slideshow').fadeLoop();

	var bg_f = $("div.first_bg");
	var bg_nav = $("div.bg_nav");
	var a1 = $("a.one");
	var a6 = $("a.six");

	$('.img5').mouseover(function(){
		$('.img1').animate({'margin-top':'-60px'},400);
	});
	$('.img2').mouseover(function(){
		$('.img1').animate({'margin-top':'40px'},400);
	});

});

