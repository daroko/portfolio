<?php defined('BASEPATH') OR exit('No direct script access allowed');

class portfolio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Ładujemy bibliotekę sesji
	//	$this->load->library('session');
	}




	public function index()
	{
		//$this->load->view('welcome_message');
	//$this->login();
	// $this->load->helper(array('form', 'url'));


$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a>', '</div>');

$this->form_validation->set_rules('email', 'email1', 'required|trim|valid_email|xss_clear');
$this->form_validation->set_rules('firma', 'firma1', 'trim|xss_clear');
$this->form_validation->set_rules('tel', 'tel1', 'trim|xss_clear');
$this->form_validation->set_rules('wiad', 'wiad1', 'trim|xss_clear');


if ($this->form_validation->run() == FALSE)
{
$this->load->helper('form');
}
else
{
$mail1 = "darek.krystek@wp.pl";
$date=date("Y-m-d"); 
$email = strip_tags($this->input->post('email'));
$firma = strip_tags($this->input->post('firma'));
$tel = strip_tags($this->input->post('tel'));
$wiad = strip_tags($this->input->post('wiad'));


$config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'darek.krystek@gmail.com',
            'smtp_pass' => 'daroko00'
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        // $this->email->initialize($config);

        $this->email->from($email, 'Chirag');
        $this->email->to($mail1);
        //$this->email->cc('darek.krystek@wp.pl');   
        $this->email->subject('zapytanie od '.$firma);
        $this->email->message($firma."<br/>".$tel."<br/>".$wiad);

        if ($this->email->send()) 
        {
            //echo "Your Email has been sent successfully... !!";
			//$this->session->set_flashdata('success', 'WYSLANE!');

			$this->session->set_flashdata('msg', 'WYSLANE!');

        }
        else
        {
            //show_error( $this->email->print_debugger());
			$this->session->set_flashdata('success', 'Błąd nie można wysłać maila!');

        }


//echo $email."---".$firma."---".$tel."----".$wiad;

}




$this->load->view('dar/naglowek');

		//$this->load->model('menu');
		//$this->menu->wyswietl('1');


$data['link1v']="HOME";
$data['link2v']="O MNIE";
$data['link3v']="GALERIA";
$data['link5v']="KONTAKT";

$data['link1']="#home";
$data['link2']="#omnie";
$data['link3']="#realizacje";
$data['link5']="#kontakt";
$data['face']="https://www.facebook.com/darek.krystek";
$data['twiter']="#";
$data['mail']="mailto:biuro@idea-home.com.pl?subject=Pytanie do Idea Home";

$data['activ1']="active";
$data['activ2']="";
$data['activ3']="";
$data['activ4']="";	

$this->load->view('dar/menu',$data);



        $this->load->view('dar/indexs');

		
		$this->load->model('index');
		$data['galindex'] = $this->index->get_all();



        $this->load->view('dar/index',$data);
        $this->load->view('dar/stopka');

	



	}




	public function login()
	{
		// Ładujemy bibliotekę walidacji formularza
		$this->load->library('form_validation');
		// Określamy jakie tagi będą otaczać komunikat błędu walidacji. 
		// To kwestia stricte kosmetyczna - dostosowanie wyglądu do Twitter Bootstrap.
		$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a>', '</div>');

		// Ustalamy reguły walidacji dla formularza
		$this->form_validation->set_rules('email', 'Login', 'required|trim|valid_email|xss_clear');
		$this->form_validation->set_rules('password', 'Hasło', 'required|trim|sha1');

		// Sprawdzamy, czy formularz został wysłany i czy wystąpiły błędy walidacji
		if ($this->form_validation->run() === FALSE)
		{
			// Ładujemy helper Form, aby ułatwić sobie pracę z formularzem.
			$this->load->helper('form');

			// Jeśli walidacja formularza nie powiodła się (lub metoda jest wywołana po raz pierwszy), wyświetlamy pliki z katalogu partials oraz widok "user_login",
			// który znajduje się w katalogu "application/views". Ewentualne informacje o błędach w formularzu są przekazywane automatycznie.
			$this->load->view('partials/header');
			$this->load->view('user_login');
			$this->load->view('partials/footer');
		}
		else
		{
			// Jeśli walidacja formularza powiodła się, przypisujemy odpowiednie zmienne z tablicy $_POST do zmiennej $email i $password
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// Ładujemy wcześniej utworzony model
			$this->load->model('user_model');

			// Wywołujemy metodę "login" modelu "user_model" wraz z parametrami i przypisujemy zwrócony wynik do zmiennej $user
			if ($user = $this->user_model->login($email, $password))
			{
				// Jeśli zwrócony wynik nie jest pusty (czyli znaleziono użytkownika o podanym adresie email i haśle),
				// ustawiamy zmienną sesyjną o nazwie "user_id" na wartość unikalnego identyfikatora użytkownika.
				$this->session->set_userdata('user_id', $user['id']);
				// Ustawiamy zmienną flashadata o nazwie success i przypisujemy do niej komunikat o powodzeniu logowania.
				$this->session->set_flashdata('success', 'Logowanie przebiegło pomyślnie!');
				// Przekierowujemy użytkownika na stronę ze wszystkimi postami podając w funkcji nazwę kontrolera/metody, która ma zostać wywołana.
				// W tym wypadku nie ma znaczenia, czy podamy 'posts/index', czy samo 'posts', ponieważ CodeIgniter domyślnie zinterpretuje samo 'posts' jako wywołanie
				// metody 'index' - jako domyślnej funkcji dla każdego kontrolera.
				redirect('posts');
			}
			else
			{
				// Jeśli zwrócony wynik jest pusty (czyli nie znaleziono użytkownika o podanym adresie email i haśle),
				// ustawiamy zmienną flashadata o nazwie error i podajemy komunikat o niepowodzeniu logowania.
				$this->session->set_flashdata('error', 'Podany login lub hasło są nieprawidłowe!');
				// Przekierowujemy użytkownika na stronę logowania podając dla funkcji nazwę kontrolera/metody, która ma zostać wywołana
				redirect('users/login');
			}
		}
	}

	public function logout()
	{
		// Niszczymy aktualną sesję
		$this->session->sess_destroy();
		// Przekierowujemy na stronę logowania
		redirect('users/login');
	}
}



/* End of file users.php */
/* Location: ./application/controllers/users.php */