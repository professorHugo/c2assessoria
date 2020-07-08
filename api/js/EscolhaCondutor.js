function escolhaCondutor(){
    var condutorSelect = document.getElementById("condutor_select").value;

    var escolhaCondudorReturn = document.getElementById("escolha_condutor_return");
    var xhttp = new XMLHttpRequest();

    escolhaCondudorReturn.innerHTML = '<input type="text" id="nome_condutor" name="nome_condutor" class="form-control form-control-lg" disabled placeholder="...">';

    xhttp.onreadystatechange = function(){
        if(xhttp.readyState  == 4){
            if(xhttp.status == 200){
                escolhaCondudorReturn.innerHTML = xhttp.responseText;
            }else{
                "erro";
            }
        }
    };
    xhttp.open("GET","./js/MostrarCondutor.php?Escolha=" + condutorSelect , true);
    xhttp.send(null);
}