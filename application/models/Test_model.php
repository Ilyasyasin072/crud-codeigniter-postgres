<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model
{
    private $_table = "test";

    public $id;
    public $name_customers;
    public $address;
    public $tlp;

    public function rules()
    {
        return [
            ['field' => 'name_customers',
            'label' => 'Name Customers',
            'rules' => 'required'],

            ['field' => 'address',
            'label' => 'address',
            'rules' => 'numeric'],
            
            ['field' => 'tlp',
            'label' => 'tlp',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // return $this->db->get($this->_table)->result();
            $this->db->from($this->_table);
            $this->db->order_by("id", "asc");
            $query = $this->db->get(); 
            return $query->result();
    }

    function input_data($data,$table)
    {
		$this->db->insert($table,$data);
    }

    function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table)
    {
        $this->db->where($where);
		$this->db->update($table,$data);
    }
    
}