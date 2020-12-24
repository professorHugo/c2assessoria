<h4
style="border-bottom: 1px solid #bbb; margin-bottom: 1rem;float: left;margin-top: 2rem; width:100%"
>Associado: </h4>

<div class="form-group row">
  <label for="cpf_associado" class="col-md-2 col-form-label col-form-label-lg" style="font-size:1.2rem"
  >CPF do associado: </label>
  <div class="col-md-4">
    <input 
      type="text" 
      name="cpf_associado" 
      id="cpf_associado" 
      class="form-control form-control-lg"
      placeholder="Somente os números"
      required
    >
  </div>

  <label for="nome_associado" class="col-md-2 col-form-label col-form-label-lg" style="font-size:1.05rem"
  >Nome do Associado:</label>
  <div class="col-md-4">
    <input 
      type="text" 
      name="nome_associado" 
      id="nome_associado" 
      class="form-control form-control-lg"
      placeholder="Digite o nome"
      required
    >
  </div>
  

  <h5
  style="
    border-bottom: 1px solid #bbb; 
    margin: 1.5rem 2.5% .5rem;
    float: left;
    width:95%; 
  "
  >Endereço do Associado: </h5>
  <label for="cep_associado" class="col-md-1 col-form-label col-form-label-lg">CEP:</label>
  <div class="col-md-2">
    <input 
      type="number" 
      name="cep_associado" 
      id="cep_associado" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-md-1 align-items-center float-left" style="cursor:pointer">
    <i class="fa fa-search form-control-lg"></i>
  </div>

  <label for="endereco_associado" class="col-md-2 col-form-label col-form-label-lg">Endereço:</label>
  <div class="col-md-5">
    <input type="hidden" name="endereco_associado" id="endereco_associado" value="" required>
    <input 
      type="text" 
      name="endereco_associado_exibir" 
      placeholder="Aguardando CEP..." 
      disabled id="endereco_associado_exibir" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-md-1">
    <input type="text" name="numero_associado" placeholder="Nº" class="form-control form-control-lg">
  </div>
  
  <div class="col-12" style="margin-top: .5rem"></div>
  <label for="bairro_associado" class="col-md-1 col-form-label col-form-label-lg">Bairro:</label>
  <div class="col-md-4">
    <input type="hidden" name="bairro_associado" id="bairro_associado">
    <input 
      type="text" 
      class="form-control form-control-lg" 
      name="bairro_associado_exibir" 
      id="bairro_associado_exibir" 
      placeholder="Aguardando CEP..." disabled
    >
  </div>
  <label for="cidade_associado" class="col-md-1 col-form-label col-form-label-lg">Cidade:</label>
  <div class="col-md-4">
    <input type="hidden" name="cidade_associado" id="cidade_associado">
    <input 
      type="text" 
      disabled placeholder="Aguardando CEP..." 
      class="form-control form-control-lg" 
      name="cidade_associado_exibir" 
      id="cidade_associado_exibir" 
    >
  </div>

  <div class="col-md-2">
    <input type="hidden" name="estado_associado" id="estado_associado">
    <input 
      type="text" disabled 
      placeholder="Estado" 
      class="form-control form-control-lg" 
      name="estado_associado_exibir" 
      id="estado_associado_exibir" 
    >
  </div>
  <!-- <div class="col-12">
    <a href="
    https://www.google.com/maps/place/R.+Srg.+Ed%C3%A9sio+Afonso+de+Carvalho,+128+-+Conj.+Hab.+Mal.+Mascarenhas+de+Morais,+S%C3%A3o+Paulo+-+SP,+03977-380
    " target="_blank">
      Ver no Maps
    </a>
  </div> -->
</div>