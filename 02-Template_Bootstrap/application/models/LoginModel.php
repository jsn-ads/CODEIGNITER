<?php

    class LoginModel extends CI_Model{

        public function __construct(){
            //parent inicia a construção da classe filha
            parent::__construct();
            $this->load->database();
        }

        public function get_login($login){

            $this->db
                 ->select('id, login, senha, nome, email')
                 ->from('user')
                 ->where('login',$login);   
            // get() faz o mesma função do execute();
            $dados = $this->db->get();

            //num_rows faz a mesma função do rowCount()
            if($dados->num_rows() > 0){
                //row() faz a mesma funcao do fetch()
                return $dados->row();
            }else{
                return null;
            }
        }
    }
?>