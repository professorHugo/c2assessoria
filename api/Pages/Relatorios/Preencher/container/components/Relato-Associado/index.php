<script src="js/Relato-Associado/Relato-Associado.js"></script>
<script src="js/Relato-Associado/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">
    <label
      for="relato_associado"
      class="col-sm-12 col-form-label col-form-label-lg float-left"
    >
      Relato do associado:
    </label>

    <div class="col-12">
      <textarea 
        name="relato_associado" 
        id="relato_associado" 
        rows="6" 
        class="form-control form-control-lg"
        placeholder="Digite aqui o relato do Associado"
      ></textarea>
    </div>
  </div>



  <div class="row" id="fotos_documento_associado">
    <h5 style="
      width: 100%; 
      border-bottom: 1px #ddd solid; 
      margin-bottom: 1rem;
      margin-top: 1rem
    "
    >Documento: </h5>

    <label 
      for="foto_documento_associado_frente" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Documento Frente: 
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input 
        type="file" 
        name="print_foto_documento_associado_frente" 
        id="print_foto_documento_associado_frente"
        style="display: none;"
      >
      <input 
        type="text" 
        name="file_foto_documento_associado_frente" 
        id="file_foto_documento_associado_frente"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button 
        type="button" 
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_documento_associado_frente"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label 
      for="foto_documento_associado_verso" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Documento Verso:  
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input 
        type="file" 
        name="print_foto_documento_associado_verso" 
        id="print_foto_documento_associado_verso"
        style="display: none;"
      >
      <input 
        type="text" 
        name="file_foto_documento_associado_verso" 
        id="file_foto_documento_associado_verso"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button 
        type="button" 
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_documento_associado_verso"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>
    
  </div>




  <div class="form-group row" style="margin-top: 2rem">
    <label
      for="declaracao_apresentada"
      class="col-sm-6 col-md-3 col-form-label col-form-label-lg float-left"
    >
      Apresentou Declaração:
    </label>

    <div class="col-sm-6 col-md-3">
      <select
        name="declaracao_apresentada"
        id="declaracao_apresentada"
        class="form-control form-control-lg"
        required
        onchange="escolhaDeclaracaoApresentada();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  
  </div>





  <div class="row" id="declaracao_associado" style="display:none">
    <h5 style="width: 100%; border-bottom: 1px #ddd solid; margin-bottom: 1rem">Declaração: </h5>

    <label 
      for="foto_declaracao_associado1" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto 1: 
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input 
        type="file" 
        name="print_foto_declaracao_associado1" 
        id="print_foto_declaracao_associado1"
        style="display: none;"
      >
      <input 
        type="text" 
        name="file_foto_declaracao_associado1" 
        id="file_foto_declaracao_associado1"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button 
        type="button" 
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_declaracao1"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label 
      for="foto_declaracao_associado2" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto 2: 
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input 
        type="file" 
        name="print_foto_declaracao_associado2" 
        id="print_foto_declaracao_associado2"
        style="display: none;"
      >
      <input 
        type="text" 
        name="file_foto_declaracao_associado2" 
        id="file_foto_declaracao_associado2"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button 
        type="button" 
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_declaracao2"
      >
        <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
    </div>



    <label 
      for="foto_declaracao_associado3" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Foto 3: 
    </label>

    <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
      <input 
        type="file" 
        name="print_foto_declaracao_associado3" 
        id="print_foto_declaracao_associado3"
        style="display: none;"
      >
      <input 
        type="text" 
        name="file_foto_declaracao_associado3" 
        id="file_foto_declaracao_associado3"
        placeholder="Escolha o arquivo"
        class="form-control form-control-lg col-9 float-left"
        readonly
      >
      <button 
        type="button" 
        class="btn-default form-control form-control-lg col-3 float-left"
        id="button-upload_declaracao3"
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