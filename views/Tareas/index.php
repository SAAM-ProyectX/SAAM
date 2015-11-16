<?php
/**
 * Created by PhpStorm.
 * User: Dark_HaseO
 * Date: 27/10/2015
 * Time: 11:12 PM
 */
?>
<?php require('views/header.php'); ?>
<?php require('views/required/sidebar.php'); ?>
<div class="page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="page-title">
                        Iareas <small></small>
                    </h3>
                </div>
            </div>
            <div id="dashboard">
                <!-- inicio de vista irvin -->

                <div class='inicial column'>
                    <div class='text'>
                        Tareas
                    </div>
                    <div class='Form_tarea'>
                        <div class='Estado_Proyecto A_Detalles'>
                            <div class='progress-radial progress-65'>
                                <div class='overlay'>65%</div>
                            </div>
                            <div class='card-title' style='font-size: 20px !important;'>Titulo Proyecto</div>
                            <div >hola mundo</div>
                            <div >hola mundo</div>
                        </div>
                    </div>
                </div>


                <?php
                $posiciones = 6;
                $nombre_Pos= 'irvin_pro';
                /*          fin de importado de moi */
                echo "<div class='cont'>";
                for ($i=1;$i<=$posiciones;$i++){
                    echo "<div class='posicion'>";
                    echo "<div class='icon'>";
                    echo "<div class='imag'>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='textpos'>".$nombre_Pos. "</div>";

                    echo "<div class='columna column'>";
                    $num_tareas = 4;


                    for ($k = 1;$k<=$num_tareas; $k++) {
                        echo "<div class='Form_tarea'>";
                        echo "    <div class='Estado_Proyecto A_Detalles'>";
                        echo "        <div class='progress-radial progress-65'>";
                        echo "            <div class='overlay'>65%</div>";
                        echo "        </div>";
                        echo "        <div class='card-title' style='font-size: 20px !important;'>Titulo Proyecto</div>";
                        echo "        <div >hola mundo</div>";
                        echo "        <div >hola mundo</div>";
                        echo "    </div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";

                    if (i == posiciones){
                        echo "<div class='relleno'></div>";
                    }
                }
                echo "</div>"
                ?>

                <script>
                    $(function() {
                        $( ".column" ).sortable({
                            connectWith: ".columna",
                            handle: ".Estado_Proyecto",
                            cancel: ".portlet-toggle",
                            placeholder: "portlet-placeholder ui-corner-all"
                        });

                        $( ".portlet" )
                            .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
                            .find( ".portlet-header" )
                            .addClass( "ui-widget-header ui-corner-all" )
                            .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

                        $( ".portlet-toggle" ).click(function() {
                            var icon = $( this );
                            icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
                            icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
                        });
                    });
                </script>

                <!-- fin de vista irvin -->
            </div>
        </div>
    </div>
<?php require('views/footer.php'); ?>






