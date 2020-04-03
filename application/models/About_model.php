<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model
{

    public function save_about()
    {

//        $uploadData = array();
//        $count = count($_FILES['files']['name']);
//
//        for ($i = 0; $i < $count; $i++) {
//
//            if (!empty($_FILES['files']['name'][$i])) {
//
//                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
//                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
//                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
//                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
//                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
//
//                $config['upload_path'] = 'assets/admin/img/about/';
//                $config['allowed_types'] = 'jpg|jpeg|png|gif';
//                $config['max_size'] = '5000';
//                //$config['file_name'] = $_FILES['files']['name'][$i];
//
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);
//
//                if ($this->upload->do_upload('file')) {
//                    $fileData = $this->upload->data();
//                    $uploadData[$i]['file_name'] = $fileData['file_name'];
//                }
//            }
//
//        }
//
//        $images = "";
//        $last = end($uploadData);
//        for ($i = 0; $i < count($uploadData); $i++) {
//            $images = $images . $uploadData[$i]['file_name'];
//            if($i < count($uploadData)-1){
//                $images = $images .',';
//            }
//        }

        if (!empty($_FILES['picture_1']['name'])) {

            $config['upload_path'] = 'assets/admin/img/about/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture_1']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture_1')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];

            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }

        if (!empty($_FILES['picture_2']['name'])) {


            $config['upload_path'] = 'assets/admin/img/about/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture_2']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture_2')) {
                $uploadData = $this->upload->data();
                $picture2 = $uploadData['file_name'];

            } else {
                $picture2 = '';
            }
        } else {
            $picture2 = '';
        }

        $data = array(
            'about' => $this->input->post('about'),
            'picture' => $picture,
            'picture_2' => $picture2

        );
        $result = $this->db->insert('tbl_about', $data);
        return $result;

    }

    public function update_about()
    {
        if (!empty($_FILES['picture_1']['name'])) {


            $config['upload_path'] = 'assets/admin/img/about/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture_1']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture_1')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];

            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }

        if (!empty($_FILES['picture_2']['name'])) {

            $config['upload_path'] = 'assets/admin/img/about/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture_2']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture_2')) {
                $uploadData = $this->upload->data();
                $picture2 = $uploadData['file_name'];

            } else {
                $picture2 = '';
            }
        } else {
            $picture2 = '';
        }

        $id = $this->input->post('about_id');
        $about = $this->input->post('about_about');

        $this->db->set('picture', $picture);
        $this->db->set('picture_2', $picture2);
        $this->db->set('about', $about);

        $this->db->where('id', $id);
        $result = $this->db->update('tbl_about');
        return $result;

    }

    public function get_picture_name($id){

        $this->db->where('id', $id);
        return $this->db->get('tbl_about')->result_array();
    }

    public function delete_about()
    {
        return $this->db->empty_table('tbl_about');

    }

    public function about_data()
    {

        $result  = $this->db->get("tbl_about")->result();
        return $result;


    }

}