<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class News_model extends CI_Model
{

    public  $lang = "en";

    function __construct() {
        parent::__construct();
        $this->lang = $this->session->userdata("lang");

    }
    // get all news
    function get_all()
    {
        $this->db->where('ne_lang', $this->lang);
        $result = $this->db->get('ci_news');
        return $result->result_array();
    }
    // get one news article by its id
    function get_one($ne_id) {
        $this->db->where('ne_lang', $this->lang);
        $this->db->where('ne_id', $ne_id);
        $result = $this->db->get('ci_news');
        return $result->row();
    }


    function create($file)
    {
        $this->db->set('ne_img',$file);
        $this->db->set('ne_title', $this->input->post('ne_title'));
        $this->db->set('ne_desc', $this->input->post('ne_desc'));
        $this->db->set('ne_lang', $this->input->post('ne_lang'));
        $this->db->set('ne_created', time());
        $this->db->insert('ci_news');
        $id = $this->db->insert_id();
        return $id;
    }

    function update($ne_id,$file)
    {
        $this->db->where('ne_id', $ne_id);
        if(!empty($file)){
            $this->db->set('ne_img',$file);
        }
        $this->db->set('ne_title', $this->input->post('ne_title'));
        $this->db->set('ne_desc', $this->input->post('ne_desc'));
        $this->db->set('ne_lang', $this->input->post('ne_lang'));
        $this->db->update('ci_news');
        return TRUE;
    }

    function delete($id) {
        $this->db->where('ne_id', $id);
        $query = $this->db->delete('ci_news');
        return $query;
    }
}

/* End of file news_model.php */
    /* Location: ./application/models/news_model.php */