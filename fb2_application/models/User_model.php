<?php
/**
 * 用户管理
 * User: Administrator
 * Date: 2017/12/21
 * Time: 11:39
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
        $slug = urldecode($slug);
        $query = $this->db->get_where('user', array('account' => $slug));
        return $query->row_array();
    }
    public function set_user()
    {
        $this->load->helper('url');
        $data = array(
            'account' => $this->input->post('account'),
            'password' => $this->input->post('password')
        );
        return $this->db->insert('user', $data);
    }
}