<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    private $_table = "customers";

    public $id;
    public $name_customers;
    public $address;
    public $tlp;

    public function rules()
    {
        return 
        [
            ['field' => 'name_customers',
            'label' => 'Name Customers',
            'rules' => 'required'],
            ['field' => 'address',
            'label' => 'Alamat ',
            'rules' => 'required'],
            ['field' => 'tlp',
            'label' => 'Nomor Tlp',
            'rules' => 'required']
        ];
    }

    public function get_all()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
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