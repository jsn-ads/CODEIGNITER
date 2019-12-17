<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

    public function index(){

        $data = array(
            "scripts" => array(
                'script.js',
                'login.js'
                )
        );

        $this->template->show('login', $data);
    
    }

    public function ajax_login(){

        $json = array();
        $json['status'] = 1;
        $json['error_list'] = array();

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if(empty($username)){
            $json['status'] = 0;
            $json['error_list']['#userLogin'] = "Usuário não pode ser vazio!";
        }else{
            $this->load->model('LoginModel');
            $result = $this->LoginModel->get_login($username);
        }
    }
}