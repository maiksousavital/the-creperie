<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Newsletter extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/newsletter');
        $this->load->view('admin/templates/footer');
    }

    public function newsletter_data()
    {
        $result = $this->Newsletter_model->newsletter_data();
        echo json_encode($result);
    }

    public function delete_email()
    {

        $email = $this->input->get('email');

        $this->Newsletter_model->delete_email($email);
    }

}