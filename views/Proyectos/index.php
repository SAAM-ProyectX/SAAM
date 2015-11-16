<?php require('views/header.php'); ?>
<?php require('views/required/sidebar.php'); ?>
    <div class="page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="page-title">
                        Inicio <small>Datos principales</small>
                    </h3>
                </div>
            </div>
            <div id="dashboard">
                <!--Contenido General del proyecto-->
                <div class="Conten-proyectos">
                    <form >
                        <span >Tipo de busqueda</span>
                        <select class="Select_Tipos_Proyecto_Area">
                            <option value="1">Activos</option>
                            <option value="2">Cancelados</option>
                            <option value="3">Terminados</option>
                            <option value="4">Todos</option>
                            <option value="5">Nombre</option>
                        </select>
                        <input type="text" id="Nombre_Proyecto">
                        <input type="submit" class="boton_Consulta" value="Inserta">
                    </form>
                    <span id="mensaje_Busqueda_Proyecto"></span>
                </div>
                <?php
                $posiciones = 5;
                echo "<div class='contenedor_V'>";
                for ($i=1;$i<=$posiciones;$i++){
                    echo "<div class='Seccion_V'>";
                    $nombre_Pos= 'Tituljytugjbho';
                    echo "<div class='Titulo_Seccion_V'>".$nombre_Pos. "</div>";
                    echo '<div>';
                    $num_tareas = 2;
                    for ($k = 1;$k<=$num_tareas; $k++) {
                        echo '<div class="Estado_Proyecto">';
                        echo '    <div class="Titulo_Estado" >Titulo Proyecto</div>';
                        echo '    <div class="Contenido_Estado">hola mundo</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo "</div>";

                    if (i == posiciones){
                        echo "<div class='relleno'></div>";
                    }
                }
                echo "</div>"
                ?>

                <div class="sidebar_Detalles">
                    <!--Nombre Empresa-->
                    <h5 class="Centrar_P">Nombre de la empresa</h5>

                    <!--Nombre del Proyecto-->
                    <h5 class="Centrar_P">Nombre del Proyecto</h5>

                    <!--Descripcion del Proyecto-->
                    <div >
                        <h5 class="Centrar_P">Descripcion</h5>
                        <div class="Justificar_P" style="padding: 20px">
                            <p>este proyecto es de algun lugar dentro del shalalalalallalala</p>
                        </div>
                    </div>

                    <!--Avance-->
                    <div class="Justificar_P">
                        hola mundo informacion  del avance
                    </div>

                    <div class="Centrar_P">Coordinador Proyecto</div>
                    <!--Coordinador del Proyecto-->
                    <div class="Centrar_P">
                        <img class="I_D_F_E" src="<?php echo URL;?>public/img/Coordinador_Proyecto.jpg">
                        <p class="I_D_N_E">Nombre del Coordinador</p>
                    </div>

                    <!--Empleados-->
                    <div class="Centrar_P" style="margin-top: 30px;">
                        <div class="perfil">
                            <img class="I_D_F_E" src="<?php echo URL;?>public/img/Empleado_X.jpeg">
                            <p class="I_D_N_E">Empleado 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php require('views/footer.php'); ?>