

<div id="contents"  >   
<div id="home" class="">            
<div class="row">  
		
		
<header id="myCarousel" class="carousel slide">
<div class="carousel-inner">

<?php

 function GetAllLinksFromDir($dir, &$array, &$array2) {
    if($dir[strlen($dir) - 1] != '/') $dir .= '/';
    $hand = opendir($dir); 
    while($file = readdir($hand))   
      if(is_file($dir.$file)) {
        $array[] = ''.$dir.$file.'';
		 $array2[] = ''.$file.'';		
		}
      elseif(is_dir($dir.$file) && $file != '.' && $file != '..')
        GetAllLinksFromDir($dir.$file, $array); 
    closedir($hand); 
  }


 $galerialink="galeria.html";
 
  GetAllLinksFromDir('assets/dar/slider/', $linki,$linki2);
		   sort($linki);
		   $n = count($linki);
		  // echo $n."-------";
			print'
		<ol class="carousel-indicators">';
		
		for ($i=0;$i<$n; $i++)
		{
		 if($i==0)
         print'<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
		 else
         print'<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
		}
	  
    print'</ol>';
		
		for ($i=0;$i<$n; $i++)
		{
			
			if($i==0)
			{
				
				print'
			<div class="item active">
                <div class="fill" style="background-image:url('.$linki[$i].');"></div>
                <div class="carousel-caption" style="">
                    <h2></h2>
					
					
                </div>
				
				
            </div>';
				
			}else			
			{
		print'
		<div class="item ">
                <div class="fill" style="background-image:url('.$linki[$i].');"></div>
                <div class="carousel-caption">
                    <h2></h2>
					 <div class="" style="position:relative;left:100px;top:0px;z-index:999" id="animationSandbox6"></div>
				
                </div>
				
        </div>';
				
			}
	
		
		}		
		
		
			
        print'
		
		</div>
		<div class="" style="padding-left:0px;padding-right:0px;max-width:1200px;background-color:#fff;margin:0 auto;position:relative;margin-top:-250px;">	
        <a class="left carousel-control" href="#myCarousel" data-slide="next">
			 <img class="icon-prev" src="assets/dar/grafika/left1.png"  data-alt-src="assets/dar/grafika/left2.png" style="display:none;"   />
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="prev">
			 <img class="icon-next" src="assets/dar/grafika/right1.png"  data-alt-src="assets/dar/grafika/right2.png" style="display:none;"  /> 
        </a>
		
		';   
		   
		   
 
 

?>



 </div>	
		 
<div class="" style="padding-left:0px;padding-right:0px;max-width:1200px;margin:0 auto;position:relative;height:10px;margin-top:240px;"></div>	
</header>





 