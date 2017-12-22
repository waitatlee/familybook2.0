<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/30 0030
 * Time: 23:45
 */
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function login()
    {
        $data['title'] = '用户登录';
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('account', '账号', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('user/login', $data);
            //$this->load->view('templates/footer');
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
}