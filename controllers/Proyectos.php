<?php

/**
 * Class Proyectos
 */
class Proyectos extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        if(Session::exist()){
            $this->view->render($this,'index');
        }else{
            header("Location: ".URL);
        }
    }

    function alta(){
        if(Session::exist()){
        $this->view->render($this,'alta');
        }else{
        header("Location: ".URL);
        }
    }

    function modificaciones(){
        if(Session::exist()){
            $this->view->render($this,'modificaciones');
        }else{
            header("Location: ".URL);
        }
    }

    function posiciones(){
        if(Session::exist()){
            $this->view->render($this,'posiciones');
        }else{
            header("Location: ".URL);
        }
    }

    //Area

    function Buscar_Tipo_Proyecto_Area(){
        switch($_POST["Tipo"]){
            case 1:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Activo_Area($data);
                break;
            case 2:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Cancelado_Area($data);
                break;
            case 3:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Terminado_Area($data);
                break;
            case 4:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Todos_Area($data);
                break;
            default:
                break;
        }
        if($this->procedure->Datos[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }

    function Buscar_Nombre_Proyecto_Area(){
        $this->procedure->Datos = $this->model->consulta_Proyecto_Todos_Usuario($data);
        if($this->procedure->Datos[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }

    //Usuario

    function Buscar_Tipo_Proyecto_Usuario(){
        switch($_POST["Tipo"]){
            case 1:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Activo_Usuario($data);
                break;
            case 2:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Cancelado_Usuario($data);
                break;
            case 3:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Terminado_Usuario($data);
                break;
            case 4:
                $this->procedure->Datos = $this->model->consulta_Proyecto_Todos_Usuario($data);
                break;
            default:
                break;
        }
        if($this->procedure->Datos[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }

    function Buscar_Nombre_Proyecto_Usuario(){
        $this->procedure->Datos = $this->model->consulta_Proyecto_Todos_Usuario($data);
        if($this->procedure->Datos[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }

    function insertar_Proyecto(){
        //$usuario["id"]=Session::getValue("ID");
        //$this->view->userData = $this->model->getUser($usuario)[0];
        $data["Nombre"]=$_POST["Nombre"];
        $data["Descripcion"]=$_POST["Descripcion"];
        $data["Estado"]=true;
        $data["Fecha_finalizacion"]="";
        $data["Fecha_inicio"]=date("Y-m-d");
        $data["Precio"]=$_POST["Precio"];
        $data["Porcentaje"]=0;
        $data["Balance"]=$_POST["Precio"];
        $data["id_Posicion_ProyectoFK"]=2;

        $this->procedure->Anadir_Proyectos = $this->model->Anadir_Proyecto($data);
        if($this->procedure->Anadir_Proyectos[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }
}