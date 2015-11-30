<?php
    class Usuario_model extends Model{
        function __construct() {
            parent::__construct();
        }
        function signUp($data){
            return $this->db->insert('usuarios', $data);
        }
        function SignIn($data){
            //return $this->db->select($fields,'usuarios',$where);
            return $this->db->select("SELECT * FROM Usuario WHERE Alias = :alias", $data);
        }
        function update($id, $data){
            print ($this->db->update("usuarios", $data, "id =".$id));
        }
        function getUser($data){
            return $this->db->procedure_S("procedure_UsersByID", $data);
        }
        function _callProcedureSelect($data){
            return $this->db->procedure_S("procedure_Login", $data);
        }
        function _callProcedureIUD($ProcedureName, $data){
            return $this->db->procedure_IUD($ProcedureName, $data);
        }
        function updateelement($TableName, $data){
           return $this->db->updateUserData($TableName, $data);
        }
        function insertarPost($data){
            return $this->db->procedure_IUD('insertar_post', $data);
        }
        function Post_por_usuario($data){
            return $this->db->procedure_S('Post_por_usuario', $data);
        }
        function getIDPublicacion($data){
            return $this->db->procedure_S('getIDPublicacion', $data);
        }
        function setImageinDB($data){
            return $this->db->procedure_IUD('setFotosinDB', $data);
        }
        function getIDPhotos($data){
            return $this->db->procedure_S('getIDPhotos', $data);
        }
        function setFotosinDBHAS($data){
            return $this->db->procedure_IUD('setFotosinDBHAS', $data);
        }
        function getallImages($data){
            return $this->db->procedure_S('getallImages', $data);
        }
    }