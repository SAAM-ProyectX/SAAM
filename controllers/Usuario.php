<?php
    class Usuario extends Controller{
        function __construct() {
            parent::__construct();
        }
        public function perfil(){
            if(Session::exist()){
                $data["id"]=Session::getValue("ID");
                $this->view->userData = $this->model->getUser($data)[0];
                //print_r(userData);

                $this->view->render($this,'perfil');
            }  else {
                header("Location: ".URL);
            }
        }

        public function update(){
            if($_POST["id"]){
                $data["name"] = $_POST["name"];
                $data["username"] = $_POST["username"];
                $data["email"] = $_POST["email"];
                $data["password"] = Hash::create(ALGO, $_POST["password"], HASH_KEY);
                return $this->model->update($_POST["id"], $data);
            }
            else{
                print 'Error en la solicitud';
            }
        }
        public function signUp(){
            //name,username,email,password
            if( isset($_POST["name"]) && isset($_POST["username"]) &&
                isset($_POST["email"]) && isset($_POST["password"])){
                $data["name"] = $_POST["name"];
                $data["username"] = $_POST["username"];
                $data["email"] = $_POST["email"];
                $data["password"] = Hash::create(ALGO, $_POST["password"], HASH_KEY);
                echo $this->model->signUp($data);
            }
        }
        public function signIn(){
            if(isset($_POST["alias"]) && isset($_POST["contrasena"])){
                $data["alias"] = $_POST["alias"];
                $response = $this->model->_callProcedureSelect($data);
                $response = $response[0];
                if($response["Contrasena"] == Hash::create(ALGO,$_POST["contrasena"], HASH_KEY)){
                    $array = array();
                    $this->createSession($response["Alias"],$response["id_Usuario"], $array);
                    //$this->createSession($response["username"]);
                    //echo '<script>alert("'.$response["id_Users"].'");</script>';
                    echo 1;
                }else{
                    echo "<script>alert('Hola');</script>";
                }
            }
        }
        /*public function signIn(){
            //procedure_Login
            if( isset($_POST["nickname"]) && isset($_POST["password"])){
                $data["nickname"]= $_POST["nickname"];
                //$response = $this->model->signIn('*',"username = '".$_POST["username"]."'");
                $response = $this->model->_callProcedureSelect(array(':nickname'=>$_POST["nickname"]));
                $response = $response[0];
                if($response["password"] == Hash::create(ALGO,$_POST["password"], HASH_KEY)){
                    $this->createSession($response["nickname"],$response["id_Users"]);
                    //$this->createSession($response["username"]);
                    //echo '<script>alert("'.$response["id_Users"].'");</script>';
                    echo 1;
                }
            }
        }*/
        public function _callProcedureIUD(){
            $data["nickname"] = $_POST["nickname"];
            $data["pass"] = Hash::create(ALGO, $_POST["pass"], HASH_KEY);
            $data["tipo"] = $_POST["tipo"];
            $data["lastname"] = $_POST["lastname"];
            $data["gender"] = $_POST["gender"];
            $data["birthdate"] = $_POST["birthdate"];
            $data["occupation"] = $_POST["occupation"];
            $data["activo"] = $_POST["activo"];
            $data["codigo"] = $_POST["codigo"];
            $data["nombre"] = $_POST["nombre"];
            $data["email"] = $_POST["email"];
            $data["website"] = $_POST["website"];
            $data["street"] = $_POST["street"];
            $data["noext"] = $_POST["noext"];
            $data["noint"] = $_POST["noint"];
            $data["colonia"] = $_POST["colonia"];
            $data["cp"] = $_POST["cp"];
            $data["phone"] = $_POST["phone"];
            $data["state_name"] = $_POST["state_name"];
            $data["country_name"] = $_POST["country_name"];
            return $this->model->_callProcedureIUD('insert_user', $data);
        }
        public function _callProcedureSelect(){
            $data["tipoU"] = $_POST["tipoU"];
            return $this->model->_callProcedureSelect('seleccion_usuariosPortipo', $data);
        }
        //Pasar un parámetro de ID si es necesario
        function createSession($username, $id,$array){
            $_SESSION['ArrayProductos'] = $array;
            Session::setValue('U_NAME', $username);
            Session::setValue('ID', $id);
            $data["id"]=Session::getValue("ID");
            Session::setValue("U_DATA", $this->model->getUser($data)[0]);
        }
        function subir(){
            if(Session::exist()){
                $this->view->render($this,'subir');
            }
        }
        function updateelement(){
            $NAME = $_POST['miid'];
            $VALUE = $_POST['valor'];
            $TABLE = '';
            $CHECK = 0;
            $ID = 0;
            $ID_NAME = '';
            if($NAME == 'Apellido' || $NAME == 'Ocupacion' || $NAME == 'Frase'){
                $TABLE = 'Usuario_Informacion';
                $ID = Session::getValue('U_DATA')['id_info'];
                $ID_NAME = 'id_info';
                $CHECK = 1;
            }elseif($NAME == 'Sitio' || $NAME == 'Correo' || $NAME == 'Nombre'){
                $TABLE = 'Extra_info';
                $ID = Session::getValue('U_DATA')['idextra_info'];
                $ID_NAME = 'idextra_info';
                $CHECK = 1;
            }elseif($NAME == 'Telefono'){
                $TABLE = 'Telefonos';
                $ID = Session::getValue('U_DATA')['id_Telefono'];
                $ID_NAME = 'id_Telefono';
                $CHECK = 1;
            }else{
                $CHECK = 0;
            }
            if($CHECK == 1){
                $data['NAME'] = $NAME;
                $data['VALUE'] = $VALUE;
                $data['ID_NAME'] = $ID_NAME;
                $data['ID'] = $ID;
                $RESPONSE = $this->model->updateelement($TABLE, $data);
                echo $RESPONSE;
            }else{
                echo "ERROR AL BUSCAR LA TABLA";
            }
        }
        function salir(){
            Session::destroy();
            header('location:'.URL);
        }
    }