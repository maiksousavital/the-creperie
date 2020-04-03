<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/register');
        $this->load->view('admin/templates/footer');
    }

    function save_new_user()
    {
        $data = $this->Register_model->save_new_user();
        echo json_encode($data);
    }

}