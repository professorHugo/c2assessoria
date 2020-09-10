<link href="../../../../../../css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/5bf16b2cc9.js"></script>
<link rel="stylesheet" href="../../../../../css/styles.css">
<!-- Core jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../../../../../js/jquery.form.js"></script>


<script>
    $(function(){
        var $input = document.getElementById('foto_declaracao_entrevistado');
        var $fileName = document.getElementById('file-name');

        $input.addEventListener('change', function(){
            $fileName.textContent = this.value;
        });
    });


    $(document).ready(function ($) {
        $("form#form #foto_declaracao_entrevistado").on('change', function(){
            alert($("#foto_declaracao_entrevistado"));
            $("#form").ajaxForm(function (resposta) {
                console.log(resposta);
                
            });
        });

    });
</script>

<form 
    action="Pages/container/Relatorios/Step12/container/Upload-Foto-Declaracao.php"
    method="post"
    role="form"
    id="form"
>

    <label 
        for="foto_declaracao_entrevistado"
        class="col-sm-10 col-md-4 float-left col-form-label col-form-label-lg"
    >
        Foto da declaração da testemunha: 
    </label>
    <label for="foto_declaracao_entrevistado"
        class="
            col-sm-2 col-md-2 float-left 
            col-form-label col-form-label-lg 
            btn btn-primary
        "
    >
        Procurar
    </label>
    <div class="col-sm-12 col-md-6 float-left">
        <span 
            id="file-name" 
            class="form-control form-control-lg"
            style="font-size:.8rem"
        ></span>
    </div>
    <input 
        type="file" 
        name="foto_declaracao_entrevistado" 
        id="foto_declaracao_entrevistado"
        style="display:none"
    >

</form>
