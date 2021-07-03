<h4
style="border-bottom: 1px solid #bbb; margin-bottom: 1rem;float: left;margin-top: 2rem; width:100%"
>Condutor: </h4>

<div class="form-group row">
  <label for="condutor_veiculo" class="col-md-2 col-form-label col-form-label-lg">Condutor</label>
  <div class="col-md-4">
    <select 
      name="condutor_veiculo" 
      id="condutor_veiculo" 
      class="form-control form-control-lg"
      required
      onchange="selectCondutor();tipoCondutor();"
    >
      <option value="">Selecione</option>
      <option value="1">Associado</option>
      <option value="2">Terceiros</option>
    </select>
  </div>

  <div class="col-6" id="return_condutor">
    <!-- Retorno de acordo com a escolha do condutor -->
  </div>
  

  <div class="row col-12" id="block_endereco_condutor" style="display:none">
    <h5
    style="
      border-bottom: 1px solid #bbb; 
      margin: 1.5rem 2.5% .5rem;
      float: left;
      width:95%; 
    "
    >Endereço do Condutor: </h5>
    <label for="cep_condutor" class="float-left col-md-1 col-form-label col-form-label-lg">
        CEP: 
    </label>
    <div class="float-left col-md-2">
      <input 
        type="number" 
        placeholder="00000000" 
        name="cep_condutor" 
        id="cep_condutor" 
        class="float-left form-control form-control-lg" 
      >
    </div>

    <div class="float-left col-md-1 align-items-center" style="cursor:pointer">
      <i class="float-left fa fa-search form-control-lg"></i>
    </div>
    <label for="endereco_condutor" class="float-left col-md-2 col-form-label col-form-label-lg">Endereço:</label>
    <div class="float-left col-md-5">
      <input type="hidden" name="endereco_condutor" id="endereco_condutor" value="" required>
      <input 
        type="text" 
        name="endereco_condutor_exibir" 
        placeholder="Aguardando CEP..." disabled 
        id="endereco_condutor_exibir" 
        class="float-left form-control form-control-lg"
      >
    </div>

    <div class="float-left col-md-1">
      <input type="text" name="numero_condutor" placeholder="Nº" class="float-left form-control form-control-lg">
    </div>

    <div class="float-left col-12" style="margin-top:.5rem"></div>
    <label for="bairro_condutor" class="float-left col-md-1 col-form-label col-form-label-lg">Bairro:</label>
    <div class="float-left col-md-3">
      <input type="hidden" name="bairro_condutor" id="bairro_condutor">
      <input 
        type="text" 
        class="float-left form-control form-control-lg" 
        name="bairro_condutor_exibir" 
        id="bairro_condutor_exibir" 
        placeholder="Aguardando CEP..." disabled
      >
    </div>

    <label for="cidade_condutor" class="float-left col-md-2 col-form-label col-form-label-lg">Cidade:</label>
    <div class="float-left col-md-4">
      <input type="hidden" name="cidade_condutor" id="cidade_condutor">
      <input 
        type="text" 
        disabled placeholder="Aguardando CEP..." 
        class="float-left form-control form-control-lg" 
        name="cidade_condutor_exibir" 
        id="cidade_condutor_exibir" 
      >
    </div>
    <div class="float-left col-md-2">
      <input type="hidden" name="estado_condutor" id="estado_condutor">
      <input 
        type="text" disabled 
        placeholder="Estado" 
        class="float-left form-control form-control-lg" 
        name="estado_condutor_exibir" 
        id="estado_condutor_exibir" 
      >
    </div>
  </div>
</div>