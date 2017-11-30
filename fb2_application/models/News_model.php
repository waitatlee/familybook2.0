<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/30 0030
 * Time: 23:42
 */
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $slug = urldecode($slug);
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

}