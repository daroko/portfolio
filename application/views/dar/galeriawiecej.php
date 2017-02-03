
<div id="contents"  >  
<div id="home"> </div>   
<div id="omnie"> </div>   
<div id="kontakt"> </div>   
<div id="realizacje"> </div>   
<div class="col-lg-12 col-md-12 col-xs-12" style="text-align:center;background-color:#fff;min-height:300px;">	
<div class="" style="text-align:center;margin-top:50px;">	
		  
<?php
$ii=0;
$www=$galwww[0];
$img=$www['image'];
$tekst=$www['tekst'];
$baseurl= base_url();

print'
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:300px;padding-left:20px;padding-right:20px;">		   
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="">

<a class="fancybox"  href="'.$baseurl."/".$img.'" alt="DK"  data-title-id="title-'.$ii.'">		   
<img class="imgc hvr-grow-rotate" src=" '.$baseurl."/".$img.'"  title="DK" alt="DK" id="imgc'.$ii.'" />
</a>
<div id="title-'.$ii.'" class="hidden">'.$tekst.'</div>

</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 textstyle1" style="">		   

'.$tekst.'
</br></br>
</div>

</div>';



echo '
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:100px;padding-left:20px;padding-right:20px;background-color:#000;">		   
<ul id="pictures"><center>';	 	   
foreach ($galwww as $www)
{
$ii++;
if($ii==1)
continue;



$img=$www['image'];
$tekst=$www['tekst'];
$baseurl= base_url();



print'

<li class="lil2 block2" id="imgcc" data-scale="0.2"  data-move-x="150%" style="width:300px;margin-right:20px;" ><a class="fancybox"  href="'.$baseurl."/".$img.'" alt="DK"  data-title-id="title-'.$ii.'">';
		echo '<img class="imgc hvr-grow-rotate" src="'.$baseurl."/".$img.'"  title="DK" alt="DK" id="imgc'.$ii.'" />';
		echo '<div class="object1"></div>';
		echo '</a>
		<div id="title-'.$ii.'" class="hidden">'.$tekst.'</div>

</li>
';

}
echo '</center></ul></div>';
print'<div style="width:100%;height:0px;background-color:red;float:none;clear:both;" ></div>';



?>

		
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:50px;padding-left:20px;padding-right:20px;">		   
			 <div class="col1" style="color:#000">
				 
				<div style="height:5px;width:10px;" ></div>
				
				
			</div>
        </div>
	</div>
		
	</div>
	








	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:#fff;">
		   <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" style="background-color:white;min-height:60px;">
		   <div style="height:60px;background-color:#fff;">
		
			<div class="" style="padding-left:0px;padding-right:0px;max-width:1200px;min-width:300px;background-color:#fff;color:#000;margin:0 auto;position:relative;">		   
			<div style="text-align:center;color:#000;margin-right:0px;margin-top:30px;">realizacja  <a href="http://#/" class="lemma">DK</a> 2017</div>
			</div>

			</div>			   
			</div>				
		 </div>		


	</div>
	



