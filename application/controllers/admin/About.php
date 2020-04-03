<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/about');
        $this->load->view('admin/templates/footer');
    }

    function save_about()
    {
        $id = $this->input->post('about_id');
        $images = $this->About_model->get_picture_name($id);

        if (!empty($images[0]['picture'])) {
            unlink('assets/admin/img/about/' . $images[0]["picture"]);
        }
        if (!empty($images[0]['picture_2'])) {
            unlink('assets/admin/img/about/' . $images[0]["picture_2"]);
        }

        if ($this->delete_about()) {
            $data = $this->About_model->save_about();
            echo json_encode($data);
        }
    }

    function update_about()
    {

        $id = $this->input->post('about_id');
        $images = $this->About_model->get_picture_name($id);


        $data = $this->About_model->update_about();

        if ($data) {
            if (!empty($images[0]['picture'])) {
                unlink('assets/admin/img/about/' . $images[0]["picture"]);
            }
            if (!empty($images[0]['picture_2'])) {
                unlink('assets/admin/img/about/' . $images[0]["picture_2"]);
            }
        }

        echo json_encode($data);
    }


    function delete_about()
    {
        $id = $this->input->get('id');
        $images = $this->About_model->get_picture_name($id);

        $delete = $this->About_model->delete_about();

        if ($delete) {

            if (!empty($images[0]['picture'])) {
                unlink('assets/admin/img/about/' . $images[0]["picture"]);
            }
            if (!empty($images[0]['picture_2'])) {
                unlink('assets/admin/img/about/' . $images[0]["picture_2"]);
            }

        }
        return $delete;
    }

    public function unlink_picture($pictures)
    {
        $string = $pictures[0]['picture'];
        $array = explode(',', $string);

        for ($i = 0; $i < count($array); $i++) {
            unlink('assets/admin/img/about/' . $array[$i]);
        }

    }

    public function about_data()
    {
        $result = $this->About_model->About_data();
        echo json_encode($result);
    }


}