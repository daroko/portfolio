$(function($) {


$('#viewport2').carousel2('#simplePrevious', '#simpleNext');  
$('#viewport3').carousel3('#simplePrevious2', '#simpleNext2');  
  
$('#simplePrevious2, #simpleNext2').click(
 function(event){
 // if(event.originalEvent){
 //  window.clearInterval(intervalId);
  //}
 }
);
  
  
  
  function slide(){
  $('#simpleNext').click();
}
var intervalId = window.setInterval(slide, 2000);


$('#previous, #simpleNext').click(
 function(event){
  if(event.originalEvent){
   window.clearInterval(intervalId);
  }
 }
);

		
		
	    
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
					}
					else
					{
						$("#logo0").show();						
						//$("#logo0").fadeIn(600);
						//$("#logo0").show("slow", function(){});
						//$( "#logo0" ).show( "drop", { direction: "up" }, "slow" );
						$( "#pasek1" ).css( "height", "200px" );						
					}						
					//alert(top+"-------");
					
			}, false);
			
			
			

		$().UItoTop({ easingType: 'easeOutQuart' });
		
          $('.navbar-wrapper').stickUp();
		  
		  
		$(window).load(function() {
 
		window.scrollTo(0, 10);
		//window.scrollTo(0, -1);
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



		
	$(".fancybox").fancybox();
			
			$('.block').smoove({offset:'10%'});

		
		
		$('.imgc').fadeTo('normal', 1).hover( 
				function() { 
				  $(this).stop().fadeTo('normal', 0.5); 
				}, 
				function() { 
				  $(this).stop().fadeTo('normal', 1); 
				} 
			  ); 
		
		
		//alert("---");
		});
		
							  
        });
      });

	