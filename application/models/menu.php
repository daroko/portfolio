<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Model
{
	// Nazwa tabeli, z której będziemy korzystać w modelu
	public $table = 'users';
	
	/**
	 * Logowanie użytkownika 
	 * Sprawdza, czy użytkownik o podanym adresie email i haśle istnieje w bazie danych
	 *
	 * @access	public
	 * @return	mixed
	 */
	
public function wyswietl($act=1,$kat="",$typ="",$id="")
{ 
 		$link1v="HOME";
		 $link2v="O MNIE";		
		 $link3v="GALERIA";
		 $link5v="KONTAKT";
		 
		//$link1="http://localhost/portfolio/"."#home";
		//$link2="http://localhost/portfolio/"."#omnie";
		//$link3="http://localhost/portfolio/"."#realizacje";
		//$link5="http://localhost/portfolio/"."#kontakt";	
		$link1="#home";
		$link2="#omnie";	
		$link3="#realizacje";	
		$link5="#kontakt";
		 
	
	

		$activ1="active";
		$activ2="";
		$activ3="";
		$activ4="";
	
		
	
	
	$face="";
	$twiter="";
	$mail="mailto:biuro@idea-home.com.pl?subject=Pytanie do Idea Home";

	
	
	switch($act)
	{
		case '1':
		$activ1="active";
		$activ2="";
		$activ3="";
		$activ4="";
		break;
		case '2':
		$activ1="";
		$activ2="active";
		$activ3="";
		$activ4="";
		break;
		case '3':
		$activ1="";
		$activ2="";
		$activ3="active";
		$activ4="";
		break;
		case '4':
		$activ1="";
		$activ2="";
		$activ3="";
		$activ4="active";
		break;
	}


PRINT'
	 <div class="navbar-wrapper">
    
      <div class="navwrapper">
        <div class="navbar navbar-inverse navbar-static-top" style="" id="pasek1">
		
	
		<div class="" style="padding-left:20px;padding-right:20px;max-width:1200px;background-color:#000;margin:0 auto;">
		
          <div class="container1" style="">
		  
		  
            <div class="navbar-header" style="background-color:#000;height:36px;width:60px;">
			
			
			
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
                
            </div>
			
			
			<div style="width:100%;height:40px;float:right;margin-top:-40px;">
			  
			 <div class="menu0" style="">
			 <div class="menu11">
			 <div class="view effect2">
			 <a href="'.$face.'" class="">
			 <img src="assets/dar/grafika/facebook.png" /></a>
			 <div class="mask"></div>
			
			</div>
			</div>
			
			<div class="menu22">
			<div class="view effect2">
			 <a href="'.$twiter.'" class="">
			 <img src="assets/dar/grafika/twitter.png" /></a>
			 <div class="mask"></div>
			
			</div> 
			</div> 
						
			<div class="menu33">
			<div class="view effect2">
			 <a href="'.$mail.'" class="">
			 <img src="assets/dar/grafika/mail.png" /></a>
			 <div class="mask"></div>
			
			</div> 
			</div> 
			
		';
			  
					  
			  
			 print' </div>
			  
			  </div>
			  <div style="background-color:#000;height:160px;width:180px;margin:auto;margin-top:0px;" id="logo0">
			  
			  <img   src="assets/dar/grafika/logo.png" class="logo1" />        
			  
			  </div>
			  
			
			
            <div class="navbar-collapse collapse men1" style="margin:auto;height:20px;">
			
					
				  <div style="width:100%;">	
			   <ul class="nav navbar-nav men1ul" style="margin:auto;">
			   
                <li class="menuItem '.$activ1.' link1"><a  href="'.$link1.'" onfocus="blur()">'.$link1v.'</a></li>             
                <li class="menuItem link2"><a  href="'.$link2.'" onfocus="blur()">'.$link2v.'</a></li>
				<li class="menuItem link3"><a  href="'.$link3.'" onfocus="blur()">'.$link3v.'</a></li>  
                <li class="menuItem link4"><a  href="'.$link5.'" onfocus="blur()">'.$link5v.'</a></li>
              </ul>
			  </div>
			  
            </div>
           </div>
			
			
          </div>
        </div> 
      </div>
      
    </div> ';
	



}

}



