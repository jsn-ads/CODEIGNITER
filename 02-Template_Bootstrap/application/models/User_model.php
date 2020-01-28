<?php

    class User_model extends CI_Model{

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get($id, $dados = NULL){
            if(!empty($dados)){
                $this->db->select($dados);
            }
            $this->db->from('user');
            $this->db->where('id',$id);
            return $this->db->get();

        }

        public function add($data){
            $this->db->insert('user',$data);
        }

        public function update($id, $data){
            $this->db->where('id',$id);
            $this->db->update('user', $data);
        }

        public function delete($id, $dados = null){
            if(!empty($dados)){
                $this->db->select($dados);
            }
            $this->db->from('user');
            $this->db->from('id',$id);
        }

        public function duplicidade($field, $dados, $id = null){
            if(!empty($id)){
                $this->db->where('id <>',$id);
            }
            $this->db->from('user');
            $this->db->where($field, $value);
            return $this->db->get()->num_rows() > 0;
        }
    }
?>