<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("customer_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["customers"] = $this->customer_model->get_all();
        $this->load->view('customers/index', $data);
    }

    function addAction()
    {
        $name_customers = $this->input->post('name_customers');
        $address        = $this->input->post('address');
        $tlp            = $this->input->post('tlp');
        // var_dump($name_customer, $address, $tlp); die;
        $data = array(
            'name_customers'    => $name_customers,
            'address'           => $address,
            'tlp'               => $tlp
        );
        // var_dump($data); die;
        $this->customer_model->input_data($data, 'customers');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('Customer');
    }

    function delete($id)
    {
        $where          = array('id' => $id);
        $this->customer_model->hapus_data($where, 'customers');
        $this->session->set_flashdata('success', 'Berhasil Di Delete');
        redirect('test/index');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['customers'] = $this->customer_model->edit_data($where, 'customers')->result();
        $this->load->view('customers/edit', $data);
    }

    function update()
    {
        $id             = $this->input->post('id');
        $name_customers = $this->input->post('name_customers');
        $address        = $this->input->post('address');
        $tlp            = $this->input->post('tlp');
        // var_dump($id); die;
        $data = array(
            'name_customers' => $name_customers,
            'address' => $address,
            'tlp' => $tlp
        );
        $where = array(
            'id' => $id
        );
        // var_dump($data); die;

        $this->customer_model->update_data($where, $data, 'customers');
        $this->session->set_flashdata('success', 'Data Berhasil di Update');
        redirect('Customer/');
    }
}
