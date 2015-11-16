<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 12/11/2015
 * Time: 04:02 PM
 */
?>
<form name="faqs_form" method="post">
    </br>
    <label>
        <select name="Asunto"class="combo_preguntas">
            <option value="Errores">Errores</option>
            <option value="Pagos">Pagos</option>
            <option value="Soporte Tecnico">Sopote Tecnico</option>
            <option value="Ventas">Ventas</option>
            <option value="Companias">Compañias</option>
            <option value="Inventario">Inventario</option>
            <option value="Proyectos">Proyectos</option>
            <option value="Tereas">Tareas</option>
            <option value="Otras Preguntas">Otras Preguntas</option>
        </select>
    </label>
    </br>
    <textarea type="text" name="Pregunta" placeholder="Comentario" ></textarea>
    </br>
    </br>
    <input id="crear" type="submit" name="Enviar" value="Comentar"/>
</form>

<script>
    $(document).ready(function(){
        $(".mensajex").hide();
        $("#crear").click(function(e){
            var asunto= $('form[name=faqs_form] select[name=Asunto]').val();
            var Pregunta=$('form[name=faqs_form] textarea[name=Pregunta]').val();
            var Respuesta=$('form[name=faqs_form] textarea[name=Respuesta]').val();
            $.ajax({
                type:'POST',
                url: urlx+'Faqs/insertar',
                data:{Asunto:asunto,Pregunta:Pregunta,Respuesta:Respuesta}
            }).done(function(response){
                if(response==="OK"){
                    $(".mensajex").html("Se ha agregado").fadeIn("slow").delay(3000).fadeOut("slow");
                }
                else{
                    $(".mensajex").html("No se ha agregado").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
                }
            });
            e.preventDefault();
        })
    });
</script>
