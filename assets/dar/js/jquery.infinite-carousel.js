/**
 * @author Stéphane Roucheray 
 * @extends $
 */


$.fn.carousel2 = function(previous, next, options){
	var sliderList = $(this).children()[0];
	
	if (sliderList) {
		/*
		var imageWidthAll=0;
		$('#viewport2 ul li').children('img').each(function() {
		imageWidthAll += $(this).width();
		});*/
		//alert(imageWidthAll);
		
		
		var increment = $(sliderList).children().outerWidth(true),
		elmnts = $(sliderList).children(),
		numElmts = elmnts.length,
		sizeFirstElmnt = 100,
		shownInViewport = Math.round($('#viewport2').width() / 100),
		//shownInViewport = Math.round(imageWidthAll / 100),
		firstElementOnViewPort = 1,
		isAnimating = false;
		
		increment=100;
		
		for (i = 0; i < shownInViewport; i++) {
			$(sliderList).css('width',(numElmts+shownInViewport)*100 + 1000 + "px");
			$(sliderList).append($(elmnts[i]).clone());
		}
		
		$(previous).click(function(event){
			if (!isAnimating) {
				if (firstElementOnViewPort == 1) {
					$(sliderList).css('left', "-" + numElmts * sizeFirstElmnt  + "px");
					firstElementOnViewPort = numElmts;
				}
				else {
					firstElementOnViewPort--;
				}
				
				$(sliderList).animate({
					left: "+=" + increment,
					y: 0,
					queue: true
				}, "swing", function(){isAnimating = false;});
				isAnimating = true;
			}
			
		});
		
		$(next).click(function(event){
			
			
			if (!isAnimating) {
				if (firstElementOnViewPort > numElmts) {
					firstElementOnViewPort = 2;
					$(sliderList).css('left', "0px");
				}
				else {
					firstElementOnViewPort++;
				}
				$(sliderList).animate({
					left: "-=" + increment,
					y: 0,
					queue: true
				}, "swing", function(){isAnimating = false;});
				isAnimating = true;
			}
		});
	}
};


$.fn.carousel3 = function(previous, next, options){
	var sliderList = $(this).children()[0];
	
	if (sliderList) {
		/*
		var imageWidthAll=0;
		$('#viewport2 ul li').children('img').each(function() {
		imageWidthAll += $(this).width();
		});*/
		//alert(imageWidthAll);
		
		
		var increment = $(sliderList).children().outerWidth(true),
		elmnts = $(sliderList).children(),
		numElmts = elmnts.length,
		sizeFirstElmnt = 200,
		shownInViewport = Math.round($('#viewport3').width() / 200),
		//shownInViewport = Math.round(imageWidthAll / 100),
		firstElementOnViewPort = 1,
		//heightviewport=$('#viewport3').height();
		//widthviewport=$('#viewport3').width();
		
		isAnimating = false;
		var iop=200;
		
		increment=200;
		$("#viewport3aa").css('display', "none");
		$("#viewport3bb").css('display', "none");
		
		//$("#viewport3aaa").prop('disabled',true);
		//$("#viewport3bbb").prop('disabled',true);
		
		if(numElmts>shownInViewport)
		for (i = 0; i < shownInViewport; i++) {
			$(sliderList).css('width',(numElmts+shownInViewport)*200 + 5000 + "px");
			/*$(sliderList).css('width',(numElmts+shownInViewport)*100  + "px");*/
			//$(sliderList).css('width',"100%");
			$(sliderList).append($(elmnts[i]).clone());		
		$("#viewport3aa").css('display', "block");
		$("#viewport3bb").css('display', "block");
		}
		
		if(numElmts>shownInViewport)
		for (i = 0; i < shownInViewport; i++) {			
			$(sliderList).append($(elmnts[i]).clone());
		}
		
		var heightviewport=$('#viewport3').height();
		$("#viewport3a").css('height',heightviewport + "px");
		$("#viewport3b").css('height',heightviewport + "px");
		
		$(previous).click(function(event){
			
			if (!isAnimating) {
				if (firstElementOnViewPort == 1) {
				//$(sliderList).css('left', "" +   "0px");
				$(sliderList).css('left', "-" + (numElmts * sizeFirstElmnt) + "px");
				//$(sliderList).css('left', "" + numElmts * sizeFirstElmnt  + "px");
				//$(sliderList).css('left', "" + "0px");

					firstElementOnViewPort = numElmts;
				}
				else {
					firstElementOnViewPort--;
				}
				
				$(sliderList).animate({
					left: "+=" + increment,
					y: 0,
					queue: true
				}, "swing", function(){isAnimating = false;});
				isAnimating = true;
			}
			
		});
		
		$(next).click(function(event){
			
			
			if (!isAnimating) {
				if (firstElementOnViewPort > numElmts) {
					firstElementOnViewPort = 2;
					$(sliderList).css('left', "0px");
				}
				else {
					firstElementOnViewPort++;
				}
				$(sliderList).animate({
					left: "-=" + increment,
					y: 0,
					queue: true
				}, "swing", function(){isAnimating = false;});
				isAnimating = true;
			}
		});
	}
};


