<?php
class Proyectos_model extends Model{
    function __construct(){
        parent::__construct();
    }
    function Anadir_Proyecto($data){
        return $this->db->procedure_S('insert_proyecto',$data);
    }
    //Areas
    function consulta_Proyecto_Activo_Area($data){
        return $this->db->procedure_S('Proyecto_Activo_Area',$data);
    }
    function consulta_Proyecto_Cancelado_Area($data){
        return $this->db->procedure_S('Proyecto_Cancelado_Area',$data);
    }
    function consulta_Proyecto_Terminado_Area($data){
        return $this->db->procedure_S('Proyecto_Terminado_Area',$data);
    }
    function consulta_Proyecto_Todos_Area($data){
        return $this->db->procedure_S('proyectos_Area',$data);
    }
    function consulta_Proyecto_Nombre_Area($data){
        return $this->db->procedure_S('proyectos_Nombre_Area',$data);
    }
    // Usuarios
    function consulta_Proyecto_Activo_Usuario($data){
        return $this->db->procedure_S('Proyecto_Activo_Usuario',$data);
    }
    function consulta_Proyecto_Cancelado_Usuario($data){
        return $this->db->procedure_S('Proyecto_Cancelado_Usuario',$data);
    }
    function consulta_Proyecto_Terminado_Usuario($data){
        return $this->db->procedure_S('Proyecto_Terminado_Usuario',$data);
    }
    function consulta_Proyecto_Todos_Usuario($data){
        return $this->db->procedure_S('Mostrar_Todo_Por_Usuario',$data);
    }
    function consulta_Proyecto_Nombre_Usuario($data){
        return $this->db->procedure_S('Proyecto_Nombre_Usuario',$data);
    }
}