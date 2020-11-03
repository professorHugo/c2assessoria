<script src="js/Antifurto/Antifurto.js"></script>
<script src="js/Antifurto/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">
    <label
      for="sistema_antifurto"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Sistema Antifurto:
    </label>

    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <select
        name="sistema_antifurto"
        id="sistema_antifurto"
        class="form-control form-control-lg"
        required
        onchange="escolhaSistemaAntifurto();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Rastreador</option>
        <option value="2">Alarmes Padrão</option>
        <option value="3">Não há sistema</option>
      </select>
    </div>


    <div class="row col-12" id="comprovante_instalacao_return">
      <!-- Retorno para escolher comprovante de instalação -->
    </div>


  </div>


  <div class="row" id="img_comprovantes" style="display:none">

    <!-- Mostar caso comprovante de instalação = 1 -->
    <h5 style="width: 100%; border-bottom: 1px #ddd solid; margin-bottom: 1rem"
    >Fotos do Comprovante de instalação: </h5>

    <label
      for="foto_comprovante_instalacao1"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print 1:
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_comprovante_instalacao1"
        id="print_foto_comprovante_instalacao1"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_comprovante_instalacao1"
        id="file_foto_comprovante_instalacao1"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload-comprovante_instalacao1"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label
      for="foto_comprovante_instalacao2"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print 2:
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_comprovante_instalacao2"
        id="print_foto_comprovante_instalacao2"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_comprovante_instalacao2"
        id="file_foto_comprovante_instalacao2"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload-comprovante_instalacao2"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>

  </div>


  <div class="row" id="telemetria_rastreador" style="display:none">
  
    <h5 style="width: 100%; border-bottom: 1px #ddd solid; margin-bottom: 1rem;margin-top: 1rem"
    >Print Telemetria: </h5>

    <label
      for="foto_telemetria_rastreador1"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print 1:
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_telemetria_rastreador1"
        id="print_foto_telemetria_rastreador1"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_telemetria_rastreador1"
        id="file_foto_telemetria_rastreador1"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload-telemetria_rastreador1"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>


    <label
      for="foto_telemetria_rastreador2"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print 2:
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_telemetria_rastreador2"
        id="print_foto_telemetria_rastreador2"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_telemetria_rastreador2"
        id="file_foto_telemetria_rastreador2"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload-telemetria_rastreador2"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>
    

    <label
      for="foto_telemetria_rastreador3"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto/Print 3:
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input
        type="file"
        name="print_foto_telemetria_rastreador3"
        id="print_foto_telemetria_rastreador3"
        style="display: none;"
      >
      <input
        type="text"
        name="file_foto_telemetria_rastreador3"
        id="file_foto_telemetria_rastreador3"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button
        type="button"
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload-telemetria_rastreador3"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>

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