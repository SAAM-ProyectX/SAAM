/**
 * Created by Horacio on 15/11/2015.
 */
var urlx="http://www.saam.mx/";
$(document).ready(function (e) {
    $("#cancelar").click(function () {
        $.limpiarform();
    });
    //Eliminamos el artículo de la base de datos
    $.limpiarform = function () {
        $('#previewing').attr('src', 'noimage.png');
    }
    var ancho = 0, alto = 0, img = "";
    $(function () {
        $(".file").change(function () {
            var file = this.files[0];
            if (file.type != undefined) {
                var imagefile = file.type;
                var match = ["image/jpeg", "image/png", "image/jpg"];
                if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
                    $("#message").html("<p id='error'>Solo JPG y PNG</span>");
                    return false;
                }
                else {
                    var reader = new FileReader();
                    var image = new Image();
                    reader.readAsDataURL(file);
                    reader.onload = function (_file) {
                        image.src = _file.target.result;
                        image.onload = function () {
                            img = this.src;
                            //$(".alto").val(this.height);
                            //$(".ancho").val(this.width);
                            var $numero = jQuery('#verificar').val();
                            if ($numero == 1) {
                                $('#profileImage').css("background", "url('" + img + "') center no-repeat").addClass('fullIMG').fadeIn("slow");
                                $('.logoPerfil').attr('src', img);
                                ;
                            } else {
                                $('.backProfile-image').css("background", "url('" + img + "') center no-repeat").addClass('fullIMG').fadeIn("slow");
                            }
                            $("#uploadimage").trigger('submit');
                        };
                        image.onerror = function () {
                            alert('Imagen inválida: ' + file.type);
                        };
                    };
                }
            }
        });
    });


    $("#uploadimage").on('submit', (function (e) {
        $("#message").empty();
        e.preventDefault();
        $.ajax({
            url: urlx + "Usuario/subir",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                var datos = data.split(',');
                $("#message").html(datos[0]).delay(2000).fadeOut("slow");
            }
        });
        //alert("Se ha insertado correctamente el registro");
        //$("#articulos").trigger("click");
    }));
    //Subir imagen AJAX
    $('#profileImage').click(function (e) {
        e.preventDefault();
        $('#verificar').val("1");
        $('.file').trigger('click');
    });
    $('#changeBack').click(function (e) {
        e.preventDefault();
        $('#verificar').val("3");
        $('.file').trigger('click');
    });
    var $uploadProfile = jQuery('#changeProfile');
    $uploadProfile.click(function (e) {
        e.preventDefault();
        $('#subir').trigger('click');
    });
    //$('body').removeClass('page-sidebar-closed').addClass('page-full-width');
    $('.backProfile-image').css("background", "url('" + urlx + "public/img/usuarios/background/" + codigox + ".jpg') center no-repeat").addClass('fullIMG').fadeIn("slow");
    $('#profileImage').css("background", "url('" + urlx + "public/img/usuarios/profile/" + codigox + ".jpg') center no-repeat").addClass('fullIMG').fadeIn("slow");
    var $miinput, $myID;
    var acum = 0;
    $('.myHover').hover(function(e){
        $('.icon-pencil').css("display", "none");
        var $primero = $(this);
        e.preventDefault();
        if($(this).find('input[type="text"]').is(':disabled')){
            if($(this).find('.icon-pencil').is(':visible')){
                $(this).find('.icon-pencil').css('display', 'none', '!important');
            }else{
                if($(this).find('.icon-ok-sign').is(':visible')){
                    $(this).parent('.myHover').find('.icon-pencil').css({"display":"none", "visibility":"hidden"}).fadeOut();
                }else{
                    $(this).find('.icon-pencil').css({'display': 'inline-flex', "visibility":"visible"}).click(function(e){
                        e.preventDefault();
                        $miinput = $(this).parent('.myHover').find('input[type="text"]');
                        $avalue = $miinput.val();
                        $myID = $miinput.attr("id").replace('ch_', '');
                        $(this).parent('.myHover').find('.icon-ok-sign').css("display", "inline-flex", "!important").click(function(e){

                            $(this).parent('.myHover').find('.icon-pencil').css('display', 'none');
                            $(this).parent('.myHover').find('.icon-pencil').css({"display":"none", "visibility":"hidden"}).fadeOut();
                            $(this).css('display', 'none', '!important');
                            $miinput.attr('disabled', "disabled");
                            //$('#message').html("Anterior -> " + $avalue + " : Nuevo ->" + $miinput.val());
                            if(acum===0){
                                if($avalue != $miinput.val()){
                                    var valor = $miinput.val();
                                    $.ajax({
                                        type:'POST',
                                        url: urlx+'Usuario/updateelement',
                                        data:{miid:$myID,valor:valor}
                                    }).done(function(response){
                                        if(response==="OK"){
                                            $("#message").html("Se ha actualizado").fadeIn("slow").delay(3000).fadeOut("slow");
                                        }
                                        else{
                                            $('#message').html(response);
                                            $("#message").html("No se ha actualizado").css({"background":"red"}).fadeIn("slow").delay(3000).fadeOut("slow");
                                        }
                                    });
                                    console.log("A");
                                    acum = 1;
                                }
                            }
                            e.preventDefault();
                        });
                        $miinput.removeAttr('disabled').focus();
                    });
                }
            }
        }
        acum = 0;
    });
    $('.datosPerfil').mouseleave(function(){
        $('.icon-pencil').css("display", "none");
    });
});

