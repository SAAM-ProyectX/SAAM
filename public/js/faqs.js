/**
 * Created by Fernando on 02/11/2015.
 */


var urlx = "http://www.saam.mx/";
function boton(dato){
    var asunto;
    switch (dato) {
        case 1:
            asunto = "Errores";
            break;
        case 2:
            asunto="Pagos";
            break;
        case 3:
            asunto="Soporte Tecnico";
            break;
        case 4:
            asunto="Ventas";
            break;
        case 5:
            asunto="Companias";
            break;
        case 6:
            asunto="Inventario";
            break;
        case 7:
            asunto="Proyectos";
            break;
        case 8:
            asunto="Tareas";
            break;
        case 9:
            asunto="Otras Preguntas";
            break;
        case 10:
            asunto=1;
            break;
    }
    if(asunto==1){
        cargar_crear();
    }
    else{cargar_todos(asunto);}
}
function cargar_crear(){
    $.ajax({
        type:'POST',
        url: urlx+'Faqs/generar_pregunta'
    }).done(function(response){
        $("#mycontainer").html(response);
    });
}
function cargar_todos(asunto){
    $.ajax({
        type:'POST',
        url: urlx+'Faqs/todo',
        data:{asunto:asunto}
    }).done(function(response){
        $("#mycontainer").html(response);
    });
}