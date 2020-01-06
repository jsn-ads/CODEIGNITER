<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }

    public function index(){

        if($this->session->userdata("login")){

            $data = array(
                "scripts" => array(
                    'restrict.js'
                )
            );

            $this->template->show("restrict.php",$data);

        }else{

            $data = array(
                "scripts" => array(
                    'script.js',
                    'login.js'
                )
            );
    
            $this->template->show('login', $data);

        }
    }

    public function logoff(){

        $this->session->sess_destroy();
        header("Location: ".base_url()."LoginController");
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

    public function ajax_import_image(){

        if(!$this->input->is_ajax_request()){
            exit("Nenhum acesso de script direto permitido!");
        }

        $config['upload_path'] = "./tmp/";
        $config['allowed_files'] = "gif|png|jpg";
        $config['overwrite'] = TRUE;

        $this->load->library("upload", $config);

        $json = array();
        $json['status'] = 1;

        if(!$this->upload->do_upload("image_file")){
            $json['status'] = 0;
            $json['error'] = $this->upload->display_errors("","");
        }else{
            if($this->upload->data()["file_size"] <= 1024){
                $file_name = $this->upload->data()["file_name"];
                $json['img_path'] = base_url()."tmp/".$file_name;
            }else{
                $json['status'] = 0;
                $json['error'] = "Arquivo não deve ser maior que 1 MB!";
            }
        }

        echo json_encode($json);

    }
}