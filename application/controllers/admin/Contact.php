<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/contact');
        $this->load->view('admin/templates/footer');
    }
    public function contact_data()
    {
        $data = $this->Contact_model->contact_data();
        echo json_encode($data);
    }

    public function mark_message_read()
    {
        $id = $this->input->get('id');
        $this->Contact_model->mark_message_read($id);

    }

    public function delete_message(){

        $id = $this->input->get('id');
        $this->Contact_model->delete_message($id);
    }
}