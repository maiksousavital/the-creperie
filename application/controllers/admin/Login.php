<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function singin()
    {
        $this->load->view('admin/login');
    }

    public function validate_login()
    {
        $result = $this->Login_model->validate_login();

        if ($result != false) {

            $user = array(
                'id' => $result[0]['id'],
                'email' => $result[0]['username'],
                'first_name' => $result[0]['first_name'],
                'last_name' => $result[0]['last_name'],
                'is_logged' => true
            );

            $this->session->set_userdata($user);

            echo json_encode($result);


        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }

}