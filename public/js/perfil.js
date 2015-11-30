/**
 * Created by Horacio on 30/11/2015.
 */
$(document).ready(function(){
    //$('.hoverPicture').click(function(){alert('hola');});
    //hoverPictureMultiple
    /*$('.hoverPictureMultiple').click(function(){
        var imagenList = $(this).children('img').attr('src');
       // alert(imagenList);
        $('.quitaroponer').addClass('fondoBigImage');
        $('.imagen-grande').attr('src', imagenList);
        $('.imagen-grande').css({
            "width":"200px",
            "height":"200px",
            "position":"absolute"
        });
    });*/
    $('.editarPostElement').click(function(e){
        e.preventDefault();
        var idPost = $(this).attr('data-name-idPost');
        //alert(idPost);
        $('.idPublicacion').val(idPost);
    })
});