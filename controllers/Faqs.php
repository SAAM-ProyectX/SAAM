<?php
class Faqs extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function Faqs(){
        $this->view->render($this,'Faqs');
    }
    function todo(){
        $data['asunto']=$_POST["asunto"];
        $this->view->Datos_Faqs = $this->model->llamar_procedimiento($data);
        $this->view->render($this,'todo');
    }
    function generar_pregunta(){
        $this->view->render($this,'generar_pregunta');
    }
    function insertar(){
        $data["fecha"]=date("Y-m-d H:i:s");
        $data["Pregunta"]=$_POST["Pregunta"];
        $data["Asunto"]=$_POST["Asunto"];
        $data["activo"]=1;
        $data["Respuesta"]=$_POST["Respuesta"];
        $data["Id_Usuario"]=1;

        $this->procedure->Crear_Faqs = $this->model->Crear_Faq($data);
        if($this->procedure->Crear_Faqs[0]['RESULT']=='OK'){
            echo  'OK';
        }
        else{
            echo 'ERROR';
        }
    }
}