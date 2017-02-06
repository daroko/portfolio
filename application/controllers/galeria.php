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
		$this->load->library('pagination');
		

		$baseurl= base_url();
        $this->load->view('dar/naglowek');
		
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
		$config['base_url'] = site_url('galeria/index/');
		$config['total_rows'] = $this->galery->count_all();
		$config['per_page'] = 2;
		
		$config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&larr;';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&rarr;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] =  '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        
		$data['galwww'] = $this->galery->get_all2($config['per_page'], $this->uri->rsegment(3));






		//$data['galall'] = $this->galery->get_all();
		//$data['galkatwww'] = $this->galery->getk(1);
		//$data['galkatprog'] = $this->galery->getk(11);

		//$data['galwww'] = $this->galery->getk(1);
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