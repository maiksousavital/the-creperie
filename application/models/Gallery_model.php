<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

    function load_gallery_pictures()
    {
        $hasil = $this->db->get('tbl_gallery');
        return $hasil->result();
    }


    public function save_picture()
    {

        //Check whether user upload picture
        if (!empty($_FILES['picture']['name'])) {


            $config['upload_path'] = 'assets/admin/img/gallery';
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
            'picture' => $picture,
            'created' => date("Y-m-d H:i:s")

        );
        $result = $this->db->insert('tbl_gallery', $data);
        return $result;

    }

    public function get_picture_name($id)
    {

        $data = array(
            'id' => $id
        );
        $this->db->where('id', $id);
        return $this->db->get('tbl_gallery', $data)->result_array();

    }

    public function delete_menu_item($id)
    {

        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        return $this->db->delete('tbl_gallery', $data);
    }

}