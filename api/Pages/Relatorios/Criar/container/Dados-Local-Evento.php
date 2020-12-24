<h4
style="border-bottom: 1px solid #bbb; margin-bottom: 1rem;float: left;margin-top: 2rem; width:100%"
>Local do evento: </h4>

<div class="form-grou row" style="margin-bottom: 1.5rem">
<label for="cep_local_evento" class="col-md-1 col-form-label col-form-label-lg">CEP:</label>
  <div class="col-md-2">
    <input 
      type="number" 
      name="cep_local_evento" 
      id="cep_local_evento" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-md-1 align-items-center float-left" style="cursor:pointer">
    <i class="fa fa-search form-control-lg"></i>
  </div>

  <label for="endereco_local_evento" class="col-md-2 col-form-label col-form-label-lg">Endereço:</label>
  <div class="col-md-5">
    <input type="hidden" name="endereco_local_evento" id="endereco_local_evento" value="" required>
    <input 
      type="text" 
      name="endereco_local_evento_exibir" 
      placeholder="Aguardando CEP..." 
      disabled id="endereco_local_evento_exibir" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-md-1">
    <input type="text" name="numero_local_evento" placeholder="Nº" class="form-control form-control-lg">
  </div>
  
  <div class="col-12" style="margin-top: .5rem"></div>
  <label for="bairro_local_evento" class="col-md-1 col-form-label col-form-label-lg">Bairro:</label>
  <div class="col-md-4">
    <input type="hidden" name="bairro_local_evento" id="bairro_local_evento">
    <input 
      type="text" 
      class="form-control form-control-lg" 
      name="bairro_local_evento_exibir" 
      id="bairro_local_evento_exibir" 
      placeholder="Aguardando CEP..." disabled
    >
  </div>
  <label for="cidade_local_evento" class="col-md-1 col-form-label col-form-label-lg">Cidade:</label>
  <div class="col-md-4">
    <input type="hidden" name="cidade_local_evento" id="cidade_local_evento">
    <input 
      type="text" 
      disabled placeholder="Aguardando CEP..." 
      class="form-control form-control-lg" 
      name="cidade_local_evento_exibir" 
      id="cidade_local_evento_exibir" 
    >
  </div>

  <div class="col-md-2">
    <input type="hidden" name="estado_local_evento" id="estado_local_evento">
    <input 
      type="text" disabled 
      placeholder="Estado" 
      class="form-control form-control-lg" 
      name="estado_local_evento_exibir" 
      id="estado_local_evento_exibir" 
    >
  </div>
</div>