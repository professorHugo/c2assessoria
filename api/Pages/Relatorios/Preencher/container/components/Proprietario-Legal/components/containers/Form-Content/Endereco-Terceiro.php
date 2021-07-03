<div class="col-12" id="endereco_proprietario" style="display:none">
  <h5>Endereço do Proprietário: </h5>
  <div class="form-group row">
    <label for="cep_proprietario" class="col-xs-3 col-md-2 col-form-label col-form-label-lg"
    >CEP:</label>
    <div class="col-xs-7 col-md-4">
      <input 
        type="number" 
        placeholder="00000000" 
        name="cep_proprietario" 
        id="cep_proprietario" 
        class="form-control form-control-lg" 
      
      >
    </div>
    <div class="col-xs-2 col-md-1 align-items-center" style="cursor:pointer">
      <i class="fa fa-search form-control-lg"></i>
    </div>

    <div class="col-12" style="margin-bottom:1rem"></div>

    <label for="endereco_proprietario" class="col-xs-3 col-md-2 col-form-label col-form-label-lg"
    >Endereço:</label>
    <div class="col-xs-7 col-md-8">
      <input type="hidden" name="endereco_proprietario" id="endereco_proprietario" value="">
      <input 
        type="text" 
        name="endereco_proprietario_exibir" 
        placeholder="Aguardando CEP..." 
        disabled id="endereco_proprietario_exibir" 
        class="form-control form-control-lg" 
      
      >
    </div>
    <div class="col-xs-2 col-md-1">
      <input type="text" name="numero_proprietario" placeholder="Nº" class="form-control form-control-lg">
    </div>
  </div>

  <div class="col-12" style="margin-bottom:1rem"></div>

  <div class="form-group row">
    <label for="bairro_proprietario" class="col-xs-3 col-md-2 col-form-label col-form-label-lg"
    >Bairro:</label>
    <div class="col-xs-9 col-md-3">
      <input type="hidden" name="bairro_proprietario" id="bairro_proprietario">
      <input 
        type="text" 
        class="form-control form-control-lg" 
        name="bairro_proprietario_exibir" 
        id="bairro_proprietario_exibir" 
        placeholder="Aguardando CEP..." 
        disabled
      >
    </div>

    <div class="col-12" style="margin-bottom:1rem"></div>

    <label for="cidade_proprietario" class="col-xs-3 col-md-2 col-form-label col-form-label-lg"
    >Cidade:</label>
    <div class="col-xs-7 col-md-4">
      <input type="hidden" name="cidade_proprietario" id="cidade_proprietario">
      <input 
        type="text" 
        disabled placeholder="Aguardando CEP..." 
        class="form-control form-control-lg" 
        name="cidade_proprietario_exibir" 
        id="cidade_proprietario_exibir" 
      >
    </div>
    <div class="col-xs-2 col-md-1">
      <input type="hidden" name="estado_proprietario" id="estado_proprietario">
      <input 
        type="text" 
        disabled placeholder="..." 
        class="form-control form-control-lg" 
        name="estado_proprietario_exibir" 
        id="estado_proprietario_exibir" 
      >
    </div>
  </div>
</div>