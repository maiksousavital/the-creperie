<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->uploadPath = 'assets/admin/img/menu';
    }

    public function index()
    {

        $data['categories'] = $this->Menu_model->get_category_list();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/product-list', $data);
        $this->load->view('admin/templates/footer');
    }

    function product_data()
    {
        $data = $this->Menu_model->product_list();
        echo json_encode($data);
    }

    function update()
    {

        $id = $this->input->post('product_id');
        $imgData = $this->Menu_model->get_picture_name($id);


        $data = $this->Menu_model->update_product();

        if ($data) {
            if (!empty($imgData[0]["picture"])) {
                unlink('assets/admin/img/menu/' . $imgData[0]["picture"]);
            }
        }

        echo json_encode($data);
    }

    function save()
    {
        $data = $this->Menu_model->save_product();
        echo json_encode($data);
    }


    public function deleteMenuItem()
    {

        $id = $this->input->get('id');
        $imgData = $this->Menu_model->get_picture_name($id);


        if ($this->Menu_model->delete_menu_item($id)) {

            if (!empty($imgData[0]["picture"])) {

                unlink('assets/admin/img/menu/' . $imgData[0]["picture"]);
            }

        }
    }


}
