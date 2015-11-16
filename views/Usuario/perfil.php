<?php require('views/header.php'); ?>
<?php require('views/required/sidebar.php'); ?>
    <div class="page-container">
        <div class="page-content">
            <div class="container-fluid">
                <div class="backProfile-image">
                    <div class="nameProfile"><span><?php echo Session::getValue('U_DATA')["Nombre"]." ".Session::getValue('U_DATA')["Apellido"];?></span></div>
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
            $val = Session::getValue('U_DATA')["Estado"];
            $estado = "";
            for($i = 1; $i < strlen($val); $i++){ $estado .= $val[$i]; }
            Session::getValue('U_DATA')['Estado'] = $estado;
            ?>
            <div class="container-fluid">
                <div id="dashboard">
                    <div class="span12">
                        <div class="span3 datosPerfil">
                            <div class="span12 myHover"><p>Nombre:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Nombre'];?>" id="ch_Nombre" name="ch_Nombre" disabled> <i class="icon-pencil" id="cx_Nombre"></i><i class="icon-ok-sign" id="cs_Nombre"></i></div>
                            <div class="span12 myHover"><p>Apellido:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Apellido'];?>" id="ch_Apellido" name="ch_Apellido" disabled> <i class="icon-pencil" id="cx_Apellido"></i><i class="icon-ok-sign" id="cs_Apellido"></i></div>
                            <div class="span12 myHover"><p>Ocupación:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Ocupacion'];?>" id="ch_Ocupacion" name="ch_Ocupacion" disabled> <i class="icon-pencil" id="cx_Ocupacion"></i><i class="icon-ok-sign" id="cs_Ocupacion"></i></div>
                            <div class="span12 myHover"><p>Teléfono:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Telefono'];?>" id="ch_Telefono" name="ch_Telefono" disabled> <i class="icon-pencil" id="cx_Telefono"></i><i class="icon-ok-sign" id="cs_Telefono"></i></div>
                            <div class="span12 myHover"><p>Estado:</p><input class="m-wrap" type="text" value="<?php echo $estado; ?>" id="ch_Estado" name="ch_Estado" disabled><i class="icon-pencil" id="cx_Estado"></i><i class="icon-ok-sign" id="cs_Estado"></i></div>
                            <div class="span12 myHover"><p>Correo:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Correo'];?>" id="ch_Correo" name="ch_Correo" disabled> <i class="icon-pencil" id="cx_Correo"></i><i class="icon-ok-sign" id="cs_Correo"></i></div>
                            <div class="span12 myHover"><p>Sitio:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Sitio'];?>" id="ch_Sitio" name="ch_Sitio" disabled> <i class="icon-pencil" id="cx_Sitio"></i><i class="icon-ok-sign" id="cs_Sitio"></i></div>
                            <div class="span12 myHover"><p>Frase:</p><input class="m-wrap" type="text" value="<?php echo Session::getValue('U_DATA')['Frase'];?>" id="ch_Frase" name="ch_Frase" disabled> <i class="icon-pencil" id="cx_Frase"></i><i class="icon-ok-sign" id="cs_Frase"></i></div>
                        </div>
                        <div class="span9">
                            <?php echo print_r(Session::getValue('U_DATA')); ?>
                            <div id="message"></div>
                        </div>
                    </div>
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data" style="">
                        <input type="file" name="file" class="file"  accept="image/jpeg"/>
                        <input type="text" id="verificar" name="verificar">
                        <input type="submit" value="Guardar artículo" class="submit" />
                        <input type="button" name="" value="Cancelar" id="cancelar" />
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php require('views/footer.php'); ?>