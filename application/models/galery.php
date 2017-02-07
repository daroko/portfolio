<?php defined('BASEPATH') OR exit('No direct script access allowed');

class galery extends CI_Model
{
public $table = 'galeryitem';
public $table1 = 'galeryitemex';
public $table0 = 'galery';
	

public function get_all()
	{
//$query5="select * from galeryitem ORDER BY id";
		return $this->db					
					->order_by($this->table.'.id')					
					->get($this->table)
					->result_array();
	}

	public function get_all2($limit, $offset)
	{
		return $this->db
					->limit($limit, $offset)
					->order_by($this->table.'.id', 'ASC')
					->get($this->table)
					->result_array();
	}


	public function count_all()
	{
		return $this->db->count_all($this->table);
	}

	public function get($id)
	{
		return $this->db->where('id', $id)->get($this->table)->row_array();
	}

 	public function getkold($id)
	{
		return $this->db->where('k_id', $id)->get($this->table)->row_array();
	}

	public function getex($id)
	{
		$items=$this->db->where('g_id', $id)->get($this->table1)->result_array();
		return $items;
	}

	public function getk($id)
	{
	  //$query = $this->db->query("SELECT * FROM galeryitem LEFT JOIN galeryitemex on galeryitem.id=galeryitemex.id;");
	  $query = $this->db->query("SELECT * FROM galeryitem;")->result_array();
		
	  $listitems=array();

		foreach ($query as $row)
		{
				$id=$row['id'];
				$k_id=$row['k_id'];
				$tekst=$row['tekst'];
				$image=$row['image'];

				$gitem = new galeryitem();		
				$gitem->id=$id;
				$gitem->k_id=$k_id;
				$gitem->tekst=$tekst;
				$gitem->image=$image;

				$query2 = $this->db->query("SELECT * FROM galeryitemex where g_id=".$id.";")->result_array();
				$gitem->listimages=$query2;	

				
				array_push($listitems,$gitem);
	

				
		}




		return $listitems;
	}



}



class galeryitem
{

	public $id;
    public $k_id;
    public $tekst;
    public $image;
	public $listimages = array();
    protected $last_login;

        public function last_login($format)
        {
                return $this->last_login->format($format);
        }

        public function __set($name, $value)
        {
                if ($name === 'last_login')
                {
                        $this->last_login = DateTime::createFromFormat('U', $value);
                }
        }

        public function __get($name)
        {
                if (isset($this->$name))
                {
                        return $this->$name;
                }
        }


}



