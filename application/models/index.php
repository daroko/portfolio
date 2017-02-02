<?php defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Model
{
		public $table = 'galeryitem';
	


public function wyswietl($act=1,$kat="",$typ="",$id="")
{ 
 		

}


public function get_all()
	{
//$query5="select * from galeryitem ORDER BY id";
		return $this->db					
					->order_by($this->table.'.id')
					->get($this->table)
					->result_array();
	}

 



}



