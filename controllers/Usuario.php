<?php
    class Usuario extends Controller{
        function __construct() {
            parent::__construct();
        }
        public function perfil(){
            if(Session::exist()){
                $idActivo = $_GET['idPost'];
                Session::setValue("ID_ACTIVO", $idActivo);

                if($idActivo==''){
                    $data["id"]=Session::getValue("ID");
                }else{
                    $data["id"]=$_GET['idPost'];
                }

                $this->view->userData = $this->model->getUser($data)[0];
                if($this->view->userData['Nombre'] == ''){
                    header("Location: ".URL."Error");
                }else{
                    $dat['id_Usuario'] = $_GET['idPost'];
                    //echo "<script>alert('".$idActivo."');</script>";
                    $this->view->PostByUser = $this->model->Post_por_usuario($dat);
                    //echo "<script>alert('".$dat['id_Usuario']."');</script>";
                    $this->view->render($this,'perfil');
                }

            }  else {
                header("Location: ".URL);
            }
        }
        public function publicar(){
            if(Session::exist()){
                $data["Descripcion"] = $_POST['Descripcion'];
                $data['Categoria'] = $_POST['Categoria'];
                $data['Hora'] = $_POST['Hora'];
                $data['Usuario'] = $_POST['Usuario'];
                $insert = $this->model->insertarPost($data);
            }
        }
        public function loadPostByUser(){
            $dat['id_Usuario'] = Session::getValue('ID_ACTIVO');
            if($dat['id_Usuario']==''){
                $dat['id_Usuario']=Session::getValue("ID");
            }else{
                $dat['id_Usuario'] = Session::getValue('ID_ACTIVO');
            }
            //echo "<script>alert('".Session::getValue('ID_ACTIVO')."');</script>";
            $this->view->PostByUser = $this->model->Post_por_usuario($dat);
            $this->view->userData = $this->model->getUser($dat)[0];
            $myVar = '';
            //echo "<script>alert('".$this->PostByUser[0]['Descripcion']."');</script>";
            for($i = 0; $i < count($this->view->PostByUser); $i++) {
                $myVar .= '<li class="timeline-purple margen-bottom-30">';
                $myVar .= '<div class="timeline-icon"><img class="imagePostPerfil tooltips" src="'.URL.'public/img/usuarios/profile/'.$this->view->userData['codigo'].'.jpg" data-placement="top" data-original-title="'.$this->view->userData['Nombre'].'"></div>';
                $myVar .= '<div class="timeline-body">';
                $myVar .= '<div class="timeline-content">';
                $myVar .= $this->view->PostByUser[$i]['Descripcion'];

                //Sacamos y seteamos las imagenes en el post
                $dataXM['idPub'] = $this->view->PostByUser[$i]['id_Publicaciones'];
                $imagenes = $this->model->getallImages($dataXM);

                $myVar .= "<div class='listImagesByPost'>";
                //$myVar .= count($imagenes);
                if(count($imagenes)==1){
                    $myVar .= "<img src='".URL."public/img/usuarios/tareas/".$imagenes[0]['URL']."' class='singleImage'>";
                }else{
                    for($j = 0; $j < count($imagenes); $j++){
                        $myVar .= "<img src='".URL."public/img/usuarios/tareas/".$imagenes[$j]['URL']."' class='myImagePostP'>";
                    }
                }

                $myVar .= "</div>";
                $myVar .= "";
                $myVar .= '</div>';

                $myVar .= '<div class="timeline-footer">';
                $myVar .= '<div class="btn-group"><a class="btn purple cosa" href="#" data-toggle="dropdown"><i class="icon-angle-down"></i></a><ul class="dropdown-menu"><li><a href="#responsive" data-toggle="modal" class="editarPostElement" data-name-idPost="'.$this->view->PostByUser[$i]["id_Publicaciones"].'"><i class="icon-pencil"></i> Editar</a></li><li><a href="#"><i class="icon-remove"></i> Eliminar</a></li></ul></div>';
                $myVar .= '<span class="usuario">'.$this->view->PostByUser[$i]['Hora'].'</span>';
                $myVar .= '</div>';
                $myVar .= '</div>';
                $myVar .= '</li>';


            }
            $myVar .= "<script type='text/javascript' src='".URL."public/js/perfil.js'></script>";
            echo $myVar;
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
            Session::setValue("ID_ACTIVO", "");
        }
        function subir(){
            if(Session::exist()){
                $imagen = $_FILES['file']['name'];
                $numero = $_POST['verificar'];
                $ext = strtolower(pathinfo($imagen, PATHINFO_EXTENSION));
                $nombreimagen = Session::getValue('U_DATA')["codigo"].".".$ext;
                $sourcePath = $_FILES['file']['tmp_name'];
                if($numero==1){
                    $targetPath = "./public/img/usuarios/profile/".$nombreimagen;
                }else{
                    $targetPath = "./public/img/usuarios/background/".$nombreimagen;
                }
                move_uploaded_file($sourcePath,$targetPath) ;
            }
        }
        function subirVarios(){
            if(Session::exist()){
                $myHour ="";
                $CONCAT = "";
                $datax['hora'] = $_POST['Hora'];
                $myIDPub = $this->model->getIDPublicacion($datax);
                $var = "";
                $varX = "";
                $IDPUB = $myIDPub[0]['IDPUB'];
                if(count($_FILES['multiplefile']['name'])>=1){
                    foreach($_FILES['multiplefile']['name'] as $key => $value){
                        $imagen = $_FILES['multiplefile']['name'][$key];
                        $numero = $_POST['verificar'];
                        $ext = strtolower(pathinfo($imagen, PATHINFO_EXTENSION));
                        $nombreimagen = date("YmdHis").$key.".".$ext;
                        if($ext!=''){
                            $varX = $ext."Tiene extensión";
                            $sourcePath = $_FILES['multiplefile']['tmp_name'][$key];
                            $targetPath = "./public/img/usuarios/tareas/".$nombreimagen;
                            move_uploaded_file($sourcePath,$targetPath);
                            $var .= $nombreimagen." => ";
                            $data['URL'] = $nombreimagen;
                            $data['hora'] = $_POST['Hora'];
                            $myHour = $data['hora'];
                            $data['Tipo'] = 0;
                            $data['idPub'] =  $IDPUB;
                            $Subida = $this->model->setImageinDB($data);
                            $myHour = explode(' ', $myHour);
                            $DT['url']= $nombreimagen;
                            $idPhoto = $this->model->getIDPhotos($DT)[0];
                            $idMiFoto = $idPhoto['IDFHOTO'];
                            $PUBX['idFoto'] = $idMiFoto;
                            $PUBX['idPub'] = $IDPUB;
                            $CONCAT .= $idMiFoto."";
                            $CONCAT .= $IDPUB."";
                            $CONCAT .= "==============";
                            $setUltimatum = $this->model->setFotosinDBHAS($PUBX);
                        }else{
                            $varX = $ext."No tiene extensión";
                        }
                    }
                }
                echo $varX;
            }
        }
        function ejemplo(){
            $this->view->render($this, 'ejemplo');
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
                Session::setUserValue('U_DATA', $NAME, $VALUE);
                echo $RESPONSE;
            }else{
                echo "ERROR AL BUSCAR LA TABLA";
            }
        }
        function salir(){
            Session::destroy();
            header('location:'.URL);
        }
        function index(){
            if(Session::exist()){
                header('Location: '.URL.'Usuario/perfil');
            }
        }
    }