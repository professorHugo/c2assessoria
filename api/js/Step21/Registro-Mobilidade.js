function RegistroMobilidade(){
    var registro_mobilidade = document.getElementById("registro_mobilidade").value,
        return_registro_mobilidade = document.getElementById("return_registro_mobilidade");
    
    var ajax = new XMLHttpRequest();
    return_registro_mobilidade.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4 && ajax.status == 200 ){
            return_registro_mobilidade.innerHTML = ajax.responseText;
        }
    };
    ajax.open(
        "GET"
        ,"js/Step21/Registro-Mobilidade.php?registro="+registro_mobilidade
        ,true
    );
    ajax.send(null);
}

function CarregarAplicativos(){
    var motorista_app = document.getElementById("motorista_app").value,
        return_motorista_app = document.getElementById("return_motorista_app");

    var ajax2 = new XMLHttpRequest();
    return_motorista_app.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    ajax2.onreadystatechange = function(){
        if( ajax2.readyState == 4 && ajax2.status == 200 ){
            return_motorista_app.innerHTML = ajax2.responseText;
        }
    };
    ajax2.open(
        "GET",
        "js/Step21/Motorista-App.php?motorista=" + motorista_app,
        true
    );
    ajax2.send(null);
}