<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/booking');
        $this->load->view('admin/templates/footer');
    }

    public function booking_data()
    {
        $result = $this->Booking_model->booking_data();
        echo json_encode($result);
    }

    public function confirm_booking()
    {
        $id = $this->input->get('id');
        $this->Booking_model->confirm_booking($id);

    }

    public function delete_booking()
    {
        $id = $this->input->get('id');
        $this->Booking_model->delete_booking($id);

    }

}