<?php require('views/header.php'); ?>

        <?php
        $posiciones = 3;
        $nombre_Pos= 'irvin_pro';
        /*          fin de importado de moi */
        echo "<div class='cont'>";
        for ($i=1;$i<=$posiciones;$i++){
            echo "<div class='posicion_2'>";
            echo "<div class='icon'>";
            echo "<div class='imag'>";
            echo "</div>";
            echo "</div>";
            echo "<div class='textpos'>".$nombre_Pos. "</div>";
            $num_tareas = 2;
            for ($k = 1;$k<=$num_tareas; $k++) {
                echo '<div class="Estado_Proyecto">';
                echo '    <div class="portlet-header" >Titulo Proyecto</div>';
                echo '    <div class="portlet-content">hola mundo</div>';
                echo '</div>';
            }

            echo "</div>";

            if (i == posiciones){
                echo "<div class='relleno'></div>";
            }
        }
        echo "</div>"
        ?>

<?php require('views/footer.php'); ?>