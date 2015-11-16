<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 02/11/2015
 * Time: 05:20 PM
 */?>
<?php
    $miarray=$this->Datos_Faqs;
    echo "</br>";
    for($i=0;$i< count($miarray);$i++){
        echo "</br>";
        echo "<div id='fondo'>";
        foreach($miarray[$i] as $comentario=> $valor){
            if($comentario==="comentario") {
                echo "<div id='comentario'>";
                echo "<pre> ".$valor;
                echo "</div>";
            }
            if($comentario==="respuesta"){
                echo "</br>";
                echo "<div id='respuesta'>";
                echo "<pre>   ".$valor;
                echo "</div>";

            }
        }
        echo "</div>";

    }
?>
<style>
    #comentario{
        display: inline-block;
        background: rgba(0, 0, 0, 0.3);
        height: 35%;
        bottom: 500px;;
        left: 300px;
    }
    #respuesta{
        display: inline-block;
        background: rgba(133, 164, 226, .5);
        height: 35%;
        bottom: 500px;;
        left: 300px;
    }
    #fondo{

    }

</style>
