
<div id="contents" style="margin-top:200px;" >  
<div id="home"> </div>   
<div id="omnie"> </div>   
<div id="kontakt"> </div>   
<div id="realizacje"> </div>   
<div class="col-lg-12 col-md-12 col-xs-12" style="text-align:center;background-color:#fff;min-height:300px;">	
<div class="" style="text-align:center;margin-top:50px;">	

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:40px;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#000;">		   
			
				 
				

	
					<a href="<?php echo $link1vg;?>" class="p20dar">
					 <div class="butdiv3a p20dar hvr-shutter-in-vertical" style="color:#fff;margin-top:0px;">				
						www
					</div>
					</a>
					<a href="<?php echo $link2vg;?>" class="p20dar">
					 <div class="butdiv3a p20dar hvr-shutter-in-vertical" style="color:#fff;margin-top:0px;">				
						programy
					</div>
					</a>
					<a href="<?php echo $link3vg;?>" class="p20dar">
					 <div class="butdiv3a p20dar hvr-shutter-in-vertical" style="color:#fff;margin-top:0px;">				
						raporty
					</div>
					</a>
					<a href="<?php echo $link4vg;?>" class="p20dar">
					 <div class="butdiv3a p20dar hvr-shutter-in-vertical" style="color:#fff;margin-top:0px;">				
						modele 3d
					</div>
					</a>			
	

				
				
			
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:20px;">		   
</div>		
	


<?php
$ii=0;	
$baseurl= base_url();	

?>

<?php






foreach ($galwww as $www)
{
$ii++;
$img=$baseurl."/".$www['image'];
$tekst=$www['tekst'];
//$img=$baseurl."/".$www->image;
//$tekst=$www->tekst;
//$id=$www->id;
$id=$www['id'];

/*
print'
<div  class="galery">
<div  class="gal2"><img class="imgc hvr-grow-rotate" src="'.$img.'"  title="DK" alt="DK" id="imgc'.$ii.'" />
</div>

<div  class="gal1 textstyle1">'.$tekst.'</div>
<br/>';
*/
print'
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:300px;padding-left:20px;padding-right:20px;">		   
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="">	
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  textstyle1" style="">		   
	<img class="imgc hvr-buzz-out" src="'.$img.'"  title="DK" alt="DK" id="imgc'.$ii.'" />
	</div>
</div>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 textstyle1" style="">		   
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  textstyle1" style="">	
'.$tekst.'

</br></br>';

echo '<a class="textstyle1" href="'.base_url("galeria/wiecej/".$id." ").'">więcej</a>';
//test
//<a class="textstyle1" href="galeria/wiecej/'.$id.'">więcej</a>
//echo base_url("galeria/wiecej/".$id." ");
print'</div></div>

</div>';
}

?>

		
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height:50px;padding-left:20px;padding-right:20px;">		   
			 <div class="col1" style="color:#000">
				 
				<div style="height:5px;width:10px;" ></div>
				
				
			</div>
        </div>
	</div>
		
	</div>
	





<div class="col-lg-12 col-md-12 col-xs-12" style="text-align:center;background-color:#000;min-height:50px;">	
		<div  style="text-align:center;">	

		 <?php echo $pagination; ?>

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



