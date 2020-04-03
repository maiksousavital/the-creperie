<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    function product_list()
    {
        $hasil = $this->db->get('tbl_menu');
        return $hasil->result();
    }

    function update_product()
    {
        //Check whether user upload picture
        if (!empty($_FILES['product_picture']['name'])) {


            $config['upload_path'] = 'assets/admin/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['product_picture']['name'];

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('product_picture')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];

            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }

        $id = $this->input->post('product_id');
        $title = $this->input->post('product_title');
        $description = $this->input->post('product_description');
        $price = $this->input->post('product_price');
        $large_price = $this->input->post('product_large_price');
        $category = $this->input->post('product_category');
        $ingredients = $this->input->post('product_ingredients');
        $modified = date("Y-m-d H:i:s");


        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('picture', $picture);
        $this->db->set('price', $price);
        $this->db->set('large_price', $large_price);
        $this->db->set('category', $category);
        $this->db->set('ingredients', $ingredients);
        $this->db->set('modified', $modified);

        $this->db->where('id', $id);
        $result = $this->db->update('tbl_menu');
        return $result;
    }

    function save_product()
    {
        //Check whether user upload picture
        if (!empty($_FILES['picture']['name'])) {


            $config['upload_path'] = 'assets/admin/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];

            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }


        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'large_price' => $this->input->post('large_price'),
            'picture' => $picture,
            'category' => $this->input->post('category'),
            'ingredients' => $this->input->post('ingredients'),
            'created' => date("Y-m-d H:i:s")
        );
        $result = $this->db->insert('tbl_menu', $data);
        return $result;
    }

    public function get_picture_name($id)
    {

        $data = array(
            'id' => $id
        );
        $this->db->where('id', $id);
        return $this->db->get('tbl_menu', $data)->result_array();

    }

    function insert($data = array())
    {

        if (!array_key_exists("created", $data)) {
            $data['created'] = date("Y-m-d H:i:s");
        }
        if (!array_key_exists("modified", $data)) {
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert('tbl_menu', $data);

        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }


    function get_menu_list()
    {
        return $this->db->get("tbl_menu")->result_array();
    }

     function delete_menu_item($id)
    {

        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        return $this->db->delete('tbl_menu', $data);
    }

     function get_menu_item($id)
    {

        $data = array(
            'id' => $id
        );
        $this->db->where('id', $id);
        return $this->db->get('tbl_menu', $data)->result_array();
    }

     function update_menu_item($data = array())
    {

        $id = $this->input->post('id');

        if (!array_key_exists("created", $data)) {
            $data['created'] = date("Y-m-d H:i:s");
        }
        if (!array_key_exists("modified", $data)) {
            $data['modified'] = date("Y-m-d H:i:s");
        }

        $this->db->where('id', $id);
        return $this->db->update('tbl_menu', $data);


    }



    function get_category_list()
    {
        return $this->db->get("tbl_category")->result_array();
    }
}