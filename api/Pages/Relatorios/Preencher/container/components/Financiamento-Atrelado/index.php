<script src="js/Financiamento-Atrelado/Financiamento.js"></script>
<script>
$(function(){
    $('#button-upload_1').on('click', function() {
        $('#print_foto_inadimplencia_1').trigger('click');
    });

    $('#print_foto_inadimplencia_1').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_inadimplencia_1').val(fileName);
    });

    $('#button-upload_2').on('click', function() {
        $('#print_foto_inadimplencia_2').trigger('click');
    });

    $('#print_foto_inadimplencia_2').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_inadimplencia_2').val(fileName);
    });

    $('#button-upload_3').on('click', function() {
        $('#print_foto_inadimplencia_3').trigger('click');
    });

    $('#print_foto_inadimplencia_3').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_inadimplencia_3').val(fileName);
    });

    $('#button-upload_4').on('click', function() {
        $('#print_foto_inadimplencia_4').trigger('click');
    });

    $('#print_foto_inadimplencia_4').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_inadimplencia_4').val(fileName);
    });

    $('#button-upload_5').on('click', function() {
        $('#print_foto_inadimplencia_5').trigger('click');
    });

    $('#print_foto_inadimplencia_5').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_inadimplencia_5').val(fileName);
    });

});
</script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>

  <div class="form-group row">
    <label
      for="financiamento_atrelado"
      class="col-sm-6 col-md-6 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Financiamento Atrelado:
    </label>
    <div class="col-sm-6 col-md-6" style="margin-top: 10px">
      <select
        name="financiamento_atrelado"
        id="financiamento_atrelado"
        class="form-control form-control-lg"
        required
        onchange="financiamentoAtrelado();"
      >
        <option value="" disabled selected>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <!-- Return Financiamento Atrelado -->
  <div class="form-group row" id="return_financiamento_atrelado">
    
  </div>

  <!-- Return Fotos parcelas caso financiamento atrelado -->
  <div 
    class="form-group row" 
    id="fotos_parcelas" 
    style="
      padding-top: 5px; 
      padding-bottom:15px; 
      display:none;
    "
  >
    <label
      for="print_foto_inadimplencia_1"
      class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print1:
    </label>

    <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_inadimplencia_1"
        id="print_foto_inadimplencia_1"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_inadimplencia_1"
        id="file_foto_inadimplencia_1"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_1"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label
      for="print_foto_inadimplencia_2"
      class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print2:
    </label>

    <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_inadimplencia_2"
        id="print_foto_inadimplencia_2"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_inadimplencia_2"
        id="file_foto_inadimplencia_2"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_2"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label
      for="print_foto_inadimplencia_3"
      class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print3:
    </label>

    <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_inadimplencia_3"
        id="print_foto_inadimplencia_3"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_inadimplencia_3"
        id="file_foto_inadimplencia_3"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_3"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label
      for="print_foto_inadimplencia_4"
      class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print4:
    </label>

    <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_inadimplencia_4"
        id="print_foto_inadimplencia_4"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_inadimplencia_4"
        id="file_foto_inadimplencia_4"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_4"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>


    <label
      for="print_foto_inadimplencia_5"
      class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print5:
    </label>

    <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_inadimplencia_5"
        id="print_foto_inadimplencia_5"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_inadimplencia_5"
        id="file_foto_inadimplencia_5"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_5"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>

    <div class="clearfix"></div>

  </div>



  <div class="clearfix" style="margin: 1rem 0"></div>
  <hr>

  <div class="form-group row">
    <div class="col-6">
      <a
        href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>"
        class="btn btn-outline-danger btn-lg btn-block"
      >
        Voltar
      </a>
    </div>

    <div class="col-6">
      <button
        type="submit"
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>

</form>