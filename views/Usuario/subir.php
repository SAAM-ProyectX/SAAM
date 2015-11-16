<?php
/**
 * Created by PhpStorm.
 * User: Horacio
 * Date: 15/11/2015
 * Time: 05:06 PM
 */
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
echo "Se ha subido ===>".$numero." ,".$nombreimagen;