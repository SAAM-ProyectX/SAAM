
var urlx = "http://www.saam.mx/";
/*Inicio de visualizacion del proyecto*/
        /*Busqueda de Proyectos*/
            $(document).ready(function(){
                $('.Select_Tipos_Proyecto_Area').change(function(e){
                    e.preventDefault();
                    var _tipo = $('.Select_Tipos_Proyecto_Area').val();
                    if(_tipo>=1 && _tipo<=4){
                        $('.boton_Consulta').fadeOut("fast");
                        $('#Nombre_Proyecto').fadeOut("fast");

                        $.ajax({
                            type:'POST',
                            url: urlx+'Proyectos/Buscar_Tipo_Proyecto',
                            data:{Tipo:_tipo}
                        }).done(function(response){
                            if(response!="OK"){
                                $('#mensaje_Busqueda_Proyecto').html("Error de consulta").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
                            }
                        });
                    } else {
                        $('.boton_Consulta').fadeIn("slow").css("display","inline-flex");
                        $('#Nombre_Proyecto').fadeIn("slow").css("display","inline-flex");
                    }

                });
            });
        /*Fin de Busqueda de Poryectos*/
        /*Inicio del Sileder del proyecto*/
        var xmoi = 0;
        $(document).ready(function(){
            $('.Estado_Proyecto').click(function(e){
                e.preventDefault();
                //alert("HOLA");
                if(xmoi==0){
                    $('.sidebar_Detalles').animate({"right": 0+'px'},500,'easeInOutQuad');
                    xmoi++;
                }else{
                    $('.sidebar_Detalles').animate({"right": -250+'px'},500,'easeInOutQuad');
                    xmoi=0;
                }
            });
        });
        /* Fin Sileder de datos del proyecto*/
        $(function() {
            $( ".posicion_2" ).sortable({
                connectWith: ".posicion_2",
                handle: ".portlet-content",
                cancel: ".portlet-toggle",
                placeholder: "portlet-placeholder ui-corner-all"
            });

        });
/*Fin de visualizacion de proyecto*/
$(document).ready(function(){

    $(".mensajex").hide();
    cargar_todos();
    function cargar_todos(){
        $.ajax({
            type:'POST',
            url: urlx+'Proyectos/todo'
        }).done(function(response){
            $("#mycontainer_p").html(response);
        });
    };
    $('#Anadir_Proyecto').click(function(e){
        var nombre= $('form[name=Registro_Proyecto] input[name=Nombre]').val();
        var descripcion= $('form[name=Registro_Proyecto] textarea[name=Descripcion]').val();
        var precio= $('form[name=Registro_Proyecto] input[name=Precio]').val();
        $.ajax({
            type:'POST',
            url: urlx+'Proyectos/insertar_Proyecto',
            data:{Nombre:nombre,Descripcion:descripcion,Precio:precio}
        }).done(function(response){
            if(response==="OK"){
                $(".mensaje_proyecto").html("Se ha agregado").fadeIn("slow").delay(3000).fadeOut("slow");
                cargar_todos();
            }
            else{
                $(".mensaje_proyecto").html("No se ha agregado").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
            }
        });
        e.preventDefault();
    });

});
