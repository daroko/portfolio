<?php defined('BASEPATH') OR exit('No direct script access allowed');

class galeria extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Ładujemy bibliotekę sesji
	//	$this->load->library('session');

	$this->load->helper('url');
	}

	public function index()
	{
       $this->load->view('dar/naglowek');
		$baseurl= base_url();
        //$this->load->view('dar/indexs');

		//$this->load->model('menu');
		//$this->menu->wyswietl('1');

		$data['link1v']="HOME";
		$data['link2v']="O MNIE";
		$data['link3v']="GALERIA";
		$data['link5v']="KONTAKT";

		$data['link1']=$baseurl."#home";
		$data['link2']=$baseurl."#omnie";
		$data['link3']=$baseurl."#realizacje";
		$data['link5']=$baseurl."#kontakt";
		$data['face']="https://www.facebook.com/darek.krystek";
		$data['twiter']="#";
		$data['mail']="mailto:biuro@idea-home.com.pl?subject=Pytanie do Idea Home";

		$data['activ1']="active";
		$data['activ2']="";
		$data['activ3']="";
		$data['activ4']="";	

		$this->load->view('dar/menugal',$data);	


		$this->load->model('galery');
		//$data['galall'] = $this->galery->get_all();
		//$data['galkatwww'] = $this->galery->getk(1);
		//$data['galkatprog'] = $this->galery->getk(11);

		$data['galwww'] = $this->galery->getk(1);
		//$data['galprog'] = $this->galery->getk(11);

//$ccc=$this->galery->getk(1);
//var_dump($ccc);


        $this->load->view('dar/galeria',$data);
        $this->load->view('dar/stopka');
	
	}


public function wiecej($id)
{
//echo $id."---------";
$baseurl= base_url();

 $this->load->view('dar/naglowek');

 		$data['link1v']="HOME";
		$data['link2v']="O MNIE";
		$data['link3v']="GALERIA";
		$data['link5v']="KONTAKT";

		
		$data['link1']=$baseurl."#home";
		$data['link2']=$baseurl."#omnie";
		$data['link3']=$baseurl."#realizacje";
		$data['link5']=$baseurl."#kontakt";
		$data['face']="https://www.facebook.com/darek.krystek";
		$data['twiter']="#";
		$data['mail']="mailto:biuro@idea-home.com.pl?subject=Pytanie do Idea Home";

		$data['activ1']="active";
		$data['activ2']="";
		$data['activ3']="";
		$data['activ4']="";	

		$this->load->view('dar/menugal',$data);	
		$this->load->model('galery');


		$data['galwww'] = $this->galery->getex($id);
		$this->load->view('dar/galeriawiecej',$data);
        $this->load->view('dar/stopka');




}



	

	
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */