<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("test_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["data"] = $this->test_model->getAll();
        $this->load->view("test/index", $data);
    }

    function add()
    {
        $this->load->view('test/add');
    }

    function addAction()
    {
        $nama = $this->input->post('nama');
        $data = array(
            'nama' => $nama
        );
        $this->test_model->input_data($data, 'test');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('test/index');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->test_model->hapus_data($where, 'test');
        $this->session->set_flashdata('success', 'Berhasil Di Delete');
        redirect('test/index');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['data'] = $this->test_model->edit_data($where, 'test')->result();
        $this->load->view('test/edit', $data);
    }

    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        // var_dump($id); die;
        $data = array(
            'nama' => $nama
        );
        $where = array(
            'id' => $id
        );
        // var_dump($data); die;

        $this->test_model->update_data($where, $data, 'test');
        $this->session->set_flashdata('success','Data Berhasil di Update');
        redirect('Test/index');
    }
}
