<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }

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

        //recebe login e senha do formulario
        $username = $this->input->post("userLogin");
        $password = md5($this->input->post("userSenha"));
        
        //verifica se o login foi enviado vazio
        if(empty($username)){
            $json['status'] = 0;
            $json['error_list']['#btn-login'] = "Usuário não pode ser vazio!";
        }else{

            // faz a consulta e traz resultado do usuario passado login como parametro
            $this->load->model('LoginModel');
            $result = $this->LoginModel->get_login($username);

            // se a consulta tive resultado e passado login e senha do usuario
            if($result){
                $login = $result->login;
                $senha = $result->senha;
                
                //compara senha do formulario com a senha do usuario
                if($password == $senha){
                    $this->session->set_userdata('login', $login);
                }else{
                    $json['status'] = 0;
                }  

            }else{
                $json['status'] = 0;
            }

            if($json['status'] == 0){
                $json['error_list']['#btn-login'] = 'Usuario e/ou senha incorretas!';
            }
        }

        echo json_encode($json);
    }
}