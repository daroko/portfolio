$(function($) {

 function testAnim(x,y) {
    $('#'+y).removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

function slide222(x){
testAnim("fadeOutLeft","animationSandbox");
} 
function slide222a(x){
testAnim("fadeOutLeft","animationSandbox1");
} 
function slide222b(x){
testAnim("fadeOutLeft","animationSandbox2");
} 
function slide222c(x){
testAnim("fadeOutLeft","animationSandbox3");
}
  
function slide22(){
testAnim("fadeInRight","animationSandbox");
testAnim("fadeInRight","animationSandbox1");
testAnim("fadeInRight","animationSandbox2");
testAnim("fadeInRight","animationSandbox3");
setTimeout(slide222, 4000);
setTimeout(slide222a, 4500);
setTimeout(slide222b, 4700);
setTimeout(slide222c, 4900);


} 



window.setInterval(slide22, 8000);




            $('#face').fadeTo('normal', 1).hover(
				function () {
				    $(this).stop().fadeTo('normal', 0.5);
				},
				function () {
				    $(this).stop().fadeTo('normal', 1);
				}
			  );


  $('.carousel').carousel({ interval: 8000 });
  $('#viewport2').carousel2('#simplePrevious', '#simpleNext');  
  
 
  

  
 /*
		$('#toTopHover').click(function(e){
			e.preventDefault();
			var go_to = $(this).attr('href');
			alert(go_to);
			$('html, body').animate({scrollTop: $(go_to).offset().top}, 1500);
		});
	*/
  
  
  
  function slide(){
  $('#simpleNext').click();
}
var intervalId = window.setInterval(slide, 5000);


$('#previous, #simpleNext').click(
 function(event){
  if(event.originalEvent){
   window.clearInterval(intervalId);
  }
 }
);
  
  
  /*
function getWidth() {
    if (self.innerWidth) {
       return self.innerWidth;
    }
    else if (document.documentElement && document.documentElement.clientHeight){
        return document.documentElement.clientWidth;
    }
    else if (document.body) {
        return document.body.clientWidth;
    }
    return 0;
}  
  */
  /*
$( window ).resize(function() {

var wid=getWidth();

if(wid<768)
{
	$(".dropdown-toggle").attr("data-hover", "dropdown");	
}else
{
	$(".dropdown-toggle").attr("data-hover", "dropdown2");		
}

});
*/
  
  

  
  
  /*
  var map;
        var primajet = new google.maps.LatLng(51.804912, 19.754607);

        function initialize() {

  var roadAtlasStyles = [
  {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        { "saturation": 0 },
        { "lightness": -8 },
        { "gamma": 1.18 }
      ]
  }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
        { "saturation": 0 },
        { "gamma": 1 },
        { "lightness": -24 }
      ]
  }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "administrative",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "transit",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "road",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "administrative",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "landscape",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
      "featureType": "poi",
      "stylers": [
        { "saturation": 0 }
      ]
  }, {
  }
  ]

            var mapOptions = {
                zoom: 16,
                center: primajet,
				 scrollwheel: false,
				 zoomControl: true,
				 panControl : false,
				 zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.LARGE,
				  position: google.maps.ControlPosition.BOTTOM_RIGHT
				},
				scaleControl: true,	
mapTypeControl: true,				
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
                }
            };
			
			var marker = new google.maps.Marker({
			position: primajet,
			title:"GLOBALSTEEL"
		});

			

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
			

            var styledMapOptions = {
                
            };

            var usRoadMapType = new google.maps.StyledMapType(
                roadAtlasStyles, styledMapOptions);
			
            map.mapTypes.set('usroadatlas', usRoadMapType);
            map.setMapTypeId('usroadatlas');
			
			marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

*/


	var imgArray = [
    'images/grafika/oferta3a.jpg',
    'images/grafika/oferta3b.jpg',
    'images/grafika/oferta3c.jpg'],
    imgArray2 = [
    'images/grafika/oferta3b.jpg',
    'images/grafika/oferta3c.jpg',
    'images/grafika/oferta3a.jpg'],
	imgArray3 = [
    'images/grafika/oferta3c.jpg',
    'images/grafika/oferta3a.jpg',
    'images/grafika/oferta3b.jpg'],
    curIndex = 0;
    curIndex2 = 0;
    curIndex3 = 0;
    imgDuration = 6000;
    imgDuration2 = 6000;
    imgDuration3 = 6000;

function slideShow() {
    document.getElementById('slider').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider').src = imgArray[curIndex];
        document.getElementById('slider').className = "";

		
    },2000);
	curIndex++;
   	
    if (curIndex == imgArray.length) { curIndex = 0; }
    setTimeout(slideShow, imgDuration);
	
	
	}
	

function slideShow2() {
    document.getElementById('slider2').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider2').src = imgArray2[curIndex2];
        document.getElementById('slider2').className = "";

		
    },1500);
	curIndex2++;
   	
    if (curIndex2 == imgArray2.length) { curIndex2 = 0; }
    setTimeout(slideShow2, imgDuration2);
	
	
	}	
	
function slideShow3() {
    document.getElementById('slider3').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider3').src = imgArray3[curIndex3];
        document.getElementById('slider3').className = "";

		
    },1000);
	curIndex3++;
   	
    if (curIndex3 == imgArray3.length) { curIndex3 = 0; }
    setTimeout(slideShow3, imgDuration3);
	
	
	}		
	
//slideShow();
//slideShow2();
//slideShow3();
		
  var sourceSwap = function () {
    var $this = $(this);
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
	}
	
	$('img[data-alt-src]').each(function(){ var $this = $(this); new Image().src = $this.data('alt-src'); $this.hover(sourceSwap, sourceSwap); });
		
		
		
		
		
		
		
	/*
		
		*/
	    
        $(document).ready( function() {
			
			
				window.addEventListener("scroll", function(event) {
				var top = this.scrollTop;
					//left =this.scrollX;
					
					if(top>100)	
					{
						//$("#logo0").fadeOut(600);	
						$("#logo0").hide();	
						 //$("#logo0").hide("slow", function(){});
						// $( "#logo0" ).hide( "drop", { direction: "up" }, "slow" );
						 $( "#pasek1" ).css( "height", "80px" );
                          $( "#contents" ).css( "margin-top", "200px" );		
					}
					else
					{
						$("#logo0").show();						
						//$("#logo0").fadeIn(600);
						//$("#logo0").show("slow", function(){});
						//$( "#logo0" ).show( "drop", { direction: "up" }, "slow" );
						$( "#pasek1" ).css( "height", "200px" );	

                        $( "#contents" ).css( "margin-top", "200px" );					
					}						
					//alert(top+"-------");
					
			}, false);
			

		$().UItoTop({ easingType: 'easeOutQuart' });
		
          $('.navbar-wrapper').stickUp({
                        parts: {
                          0: 'home',
                          1: 'omnie',
                          2: 'realizacje',
                          3: 'kontakt'                        
                        
                        },
                        itemClass: 'menuItem',
                        itemHover: 'active',
                        topMargin: 'auto'
                      });
		 // window.scrollTo(0, 0);
		 /*
		$(window).load(function() {
 
		window.scrollTo(0, 10);
		
		});
			*/	

		// $( "body" ).FancyIndex(); 

		//$( "#galanim" ).FancyIndex();

	  
			$('#clerdar').click(function() {
			
		
			$("#exampleInputFirma1").attr("placeholder", "Firma/imię i nazwisko").val("").focus().blur();
			$("#exampleInputEmail1").attr("placeholder", "Adres Email").val("").focus().blur();
			$("#exampleInputTel1").attr("placeholder", "Numer telefonu").val("").focus().blur();
			$("#exampleInputWiad1").attr("placeholder", "Wiadomość").val("").focus().blur();
		});
		
		function animationHover(element, animation){
		element = $(element);
		element.hover(
        function() {
            element.addClass('animated ' + animation);         
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);          
        });
		}
		
		function animationClick(element, animation){
		element = $(element);
		element.click(
        function() {
            element.addClass('animated ' + animation);         
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);          
  
        });
	}


		
		
		
			//$(".fancybox").fancybox();
             $(".fancybox")
                .attr('rel', 'gallery')
                .fancybox({
                    beforeLoad: function() {
                        var el, id = $(this.element).data('title-id');

                        if (id) {
                            el = $('#' + id);
                        
                            if (el.length) {
                                this.title = el.html();
                            }
                        }
                    }
                });   



			$('.block').smoove({offset:'10%'});
			
			
		
          
		$('.link1 a').click(function(e){
			e.preventDefault();
			var go_to = $(this).attr('href');
			//alert(go_to);
			$('html, body').animate({scrollTop: $(go_to).offset().top-200}, 1500);
		});
	 $('.link2 a').click(function(e){
			e.preventDefault();
			var go_to = $(this).attr('href');
			//alert(go_to);
			$('html, body').animate({scrollTop: $(go_to).offset().top}, 1500);
		});
        $('.link3 a').click(function(e){
			e.preventDefault();
			var go_to = $(this).attr('href');
			//alert(go_to);
			$('html, body').animate({scrollTop: $(go_to).offset().top}, 1500);
		});
        $('.link4 a').click(function(e){
			e.preventDefault();
			var go_to = $(this).attr('href');
			//alert(go_to);
			$('html, body').animate({scrollTop: $(go_to).offset().top}, 1500);
		});


			
			
			
			$('.imgc').fadeTo('normal', 1).hover( 
				function() { 
				  $(this).stop().fadeTo('normal', 0.5); 
				    //$(this).find(".object1").toggle();
					
				//$(this).find(".object1").css("display","block");	

				//$(".object1", this).css("display","block");
				
				}, 
				function() { 
				  $(this).stop().fadeTo('normal', 1); 
				
				 // $(this).find(".object1").toggle();
				//$(this).find(".object1").css("display","none");		

				  
				 // $('.lil2').append($( "" ));
				} 
			  ); 
			
			/*
			$('#imgcc1').each(function() {
				animationHover(this, 'tada');
			});
			$('#imgcc2').each(function() {
				animationHover(this, 'swing');
			});
			
			
			$('#facebook').each(function() {
				animationHover(this, 'pulse');
			});
			*//*
			$('#twitter').each(function() {
				animationHover(this, 'pulse');
			});
			$('#mail').each(function() {
				animationHover(this, 'pulse');
			});
			*/
/*			
			$('#facebook').fadeTo('normal', 1).hover( 
				function() { 
				  $(this).stop().fadeTo('normal', 0.5); 
				}, 
				function() { 
				  $(this).stop().fadeTo('normal', 1); 
				} 
			  ); 
			  $('#twitter').fadeTo('normal', 1).hover( 
				function() { 
				  $(this).stop().fadeTo('normal', 0.5); 
				}, 
				function() { 
				  $(this).stop().fadeTo('normal', 1); 
				} 
			  ); 
			   $('#mail').fadeTo('normal', 1).hover( 
				function() { 
				  $(this).stop().fadeTo('normal', 0.5); 
				}, 
				function() { 
				  $(this).stop().fadeTo('normal', 1); 
				} 
			  ); 

*/
			
        });
		
		
		
	



		
		
		
		/*
		jQuery('.post').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });*/ 
		
		
      });

	