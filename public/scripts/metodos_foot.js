/**
 * Created by Horacio on 08/10/2015.
 */
//Tenemos que cambiar las urls
var urlx="http://www.saam.mx/";

function signUp(){
    var name = $('form[name=signUp] input[name=name]')[0].value;
    var username = $('form[name=signUp] input[name=username]')[0].value;
    var email = $('form[name=signUp] input[name=email]')[0].value;
    var password = $('form[name=signUp] input[name=password]')[0].value;
    if(name=='' || username == '' || email == '' || password == ''){
        alert("Error rellene todos lo campos");
    }else{
        $.ajax({
            type: "POST",
            url: urlx+"User/signUp",
            data: {name: name, username: username, email: email, password: password}
        }).done(function(response){
            //alert(response);
            if(response == true){
                alert("Registro Exitoso!");
                document.location = urlx;
            }else{
                alert(response);
            }
        });
    }
}
function signIn(){
    var alias = $('#alias').val();
    var contrasena = $('#contrasena').val();
    //alert(alias);
    $.ajax({
        type: "POST",
        url: urlx+"Usuario/signIn",
        data: {alias: alias, contrasena: contrasena}
    }).done(function(response){
        if(response == "1"){
            document.location= urlx;
        }else{
            alert(response);
        }
    });
}
