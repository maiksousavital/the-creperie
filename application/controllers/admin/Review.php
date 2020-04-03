<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller
{

    public function index(){

        $this->load->view('admin/templates/header');
        $this->load->view('admin/review');
        $this->load->view('admin/templates/footer');
    }

    public function review_data(){

        $data=$this->Review_model->review_data();
        echo json_encode($data);

    }

    public function delete_review()
    {
        $id = $this->input->get('id');
        $this->Review_model->delete_review($id);

    }

    public function approve_review()
    {
        $id = $this->input->get('id');
        $this->Review_model->approve_review($id);

    }

}