<?php require('views/header.php'); ?>
<?php require('views/required/sidebar.php'); ?>
    <div class="quitaroponer"><img src="" class="imagen-grande" /></div>
    <div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h3>Actualizar</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span12">
                    <p><input type="text" class="span12 m-wrap idPublicacion"></p>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn">Cerrar</button>
            <button type="button" class="btn purple">Guardar cambios</button>
        </div>
    </div>
    <div class="page-container">
        <div class="page-content">
            <div class="container-fluid">
                <div class="backProfile-image">
                    <div class="nameProfile"><span><?php echo $this->userData['Nombre']." ".$this->userData["Apellido"];?></span></div>
                    <div id="changeBack"><i class="icon-camera"></i>&nbsp;&nbsp;Cambiar fondo</div>
                    <div id="profileImage"><div id="changeProfile"><i class="icon-camera"></i></div></div>
                </div>
                <div class="contadores">
                    <div class="span12">
                        <div class="span2">
                            <div>&nbsp;</div>
                            <div class="numberT">&nbsp;</div>
                        </div>
                        <div class="span2">
                            <div>Tareas</div>
                            <div class="numberT">23</div>
                        </div>
                        <div class="span2">
                            <div>Proyectos</div>
                            <div class="numberT">13</div>
                        </div>
                        <div class="span2">
                            <div>Puntos</div>
                            <div class="numberT">239</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $val = $this->userData["Estado"];
            $estado = "";
            for($i = 1; $i < strlen($val); $i++){ $estado .= $val[$i]; }
            Session::getValue('U_DATA')['Estado'] = $estado;
            ?>
            <input type="hidden" id="id_Usuario" value="<?php echo $this->userData['id_Usuario']; ?>">
            <div class="container-fluid">
                <div id="dashboard">
                    <!--div id="addPostElement">+</div-->
                    <div class="span12">
                        <div class="span3 datosPerfil">

                            <div class="TituloUsuario">Información</div>
                            <div class="span12 myHover"><p>Nombre:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Nombre'];?>" id="ch_Nombre" name="ch_Nombre" disabled> <i class="icon-pencil" id="cx_Nombre"></i><i class="icon-ok-sign" id="cs_Nombre"></i></div>
                            <div class="span12 myHover"><p>Apellido:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Apellido'];?>" id="ch_Apellido" name="ch_Apellido" disabled> <i class="icon-pencil" id="cx_Apellido"></i><i class="icon-ok-sign" id="cs_Apellido"></i></div>
                            <div class="span12 myHover"><p>Ocupación:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Ocupacion'];?>" id="ch_Ocupacion" name="ch_Ocupacion" disabled> <i class="icon-pencil" id="cx_Ocupacion"></i><i class="icon-ok-sign" id="cs_Ocupacion"></i></div>
                            <div class="span12 myHover"><p>Teléfono:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Telefono'];?>" id="ch_Telefono" name="ch_Telefono" disabled> <i class="icon-pencil" id="cx_Telefono"></i><i class="icon-ok-sign" id="cs_Telefono"></i></div>
                            <div class="span12 myHover"><p>Estado:</p><input class="m-wrap" type="text" value="<?php echo $estado; ?>" id="ch_Estado" name="ch_Estado" disabled><i class="icon-pencil" id="cx_Estado"></i><i class="icon-ok-sign" id="cs_Estado"></i></div>
                            <div class="span12 myHover"><p>Correo:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Correo'];?>" id="ch_Correo" name="ch_Correo" disabled> <i class="icon-pencil" id="cx_Correo"></i><i class="icon-ok-sign" id="cs_Correo"></i></div>
                            <div class="span12 myHover"><p>Sitio:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Sitio'];?>" id="ch_Sitio" name="ch_Sitio" disabled> <i class="icon-pencil" id="cx_Sitio"></i><i class="icon-ok-sign" id="cs_Sitio"></i></div>
                            <div class="span12 myHover"><p>Frase:</p><input class="m-wrap" type="text" value="<?php echo $this->userData['Frase'];?>" id="ch_Frase" name="ch_Frase" disabled> <i class="icon-pencil" id="cx_Frase"></i><i class="icon-ok-sign" id="cs_Frase"></i></div>
                        </div>

                        <div class="span6">

                            <div class="span12 contenedorPost">
                                <div class="span12 botonesPost">
                                    <div class="span6"> <i class="icon-edit"></i> Actualizar estado</div>
                                    <div class="span6" id="addPictures"> <i class="icon-picture"></i> Agregar fotos</div>
                                </div>
                                <div class="span12 contenidoPost">
                                    <div class="perfilPost" data-original-title="<?php echo $this->userData['Nombre']; ?>">
                                        <img alt="" src="<?php echo URL; ?>public/img/usuarios/profile/<?php echo $this->userData['codigo']; ?>.jpg" draggable="false"/>
                                    </div>
                                    <div draggable="false" contenteditable="true" class="m-wrap textoPost"></div>
                                    <div class="botonSendPost"><i class="icon-ok"></i></div>
                                </div>
                                <div class="span12 imagesLoad"></div>
                            </div>
                            </br>
                            <div class="span12 contenedorPost margen-top-30">
                                <div class="TituloUsuario">
                                    <div class="dashedBorder">Publicaciones recientes</div>
                                </div>
                                <ul class="timeline">

                                </ul>
                            </div>
                        </div>
                        <div class="span3 listasPosts">
                            <div class="TituloUsuario">
                                Información global
                            </div>
                            <img src="<?php echo URL; ?>public/img/mundo.png">
                            <img src="<?php echo URL; ?>public/img/second.png">

                        </div>
                    </div>
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data" style="">
                        <input type="file" name="file" class="file"  accept="image/jpeg"/>
                        <input type="text" id="verificar" name="verificar">
                        <input type="submit" value="Guardar artículo" class="submit" />
                        <input type="button" name="" value="Cancelar" id="cancelar" />
                    </form>
                    <form id="uploadmultipleimage" action="" method="post" enctype="multipart/form-data" style="display: none">
                        <input type="file" name="multiplefile[]" class="multiplefile" accept="image/*" multiple>
                        <input type="text" id="verificarmultiple" name="verificarmultiple">
                        <input type="submit" value="Guardar imagenes" class="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require('views/footer.php'); ?>