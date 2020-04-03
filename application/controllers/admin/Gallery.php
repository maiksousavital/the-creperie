<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/gallery');
        $this->load->view('admin/templates/footer');
    }

    function load_gallery_pictures()
    {

        $data = $this->Gallery_model->load_gallery_pictures();
        echo json_encode($data);


    }

    function save_picture(){
        $data=$this->Gallery_model->save_picture();
        echo json_encode($data);
    }

    public function delete_picture()
    {

        $id = $this->input->get('id');
        $imgData =$this->Gallery_model->get_picture_name($id);


        if($this->Gallery_model->delete_menu_item($id)){

            if(!empty($imgData[0]["picture"])){

                unlink('assets/admin/img/gallery/'.$imgData[0]["picture"]);
            }

        }


    }


}