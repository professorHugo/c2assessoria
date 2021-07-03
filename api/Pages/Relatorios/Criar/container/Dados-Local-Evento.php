<h4
style="border-bottom: 1px solid #bbb; margin-bottom: 1rem;float: left;margin-top: 2rem; width:100%"
>Sobre o evento: </h4>

<div class="form-grou row" style="margin-bottom: 1.5rem">
  <label for="natureza_evento" class="col-1 col-form-label col-form-label-lg">Natureza: </label>
  <div class="col-2">
    <select 
      name="natureza_evento" 
      id="natureza_evento" 
      class="form-control form-control-lg"
      required
    >
      <option value="" disabled selected>Selecione</option>
      <?php
        $QueryBuscarNaturezas = "SELECT * FROM tb_natureza_evento WHERE ativacao = '1'";
        $ExeQrBuscarNaturezas = mysqli_query($connection, $QueryBuscarNaturezas);

        if( mysqli_num_rows($ExeQrBuscarNaturezas) >= 1 ){
          while( $ReturnNaturezas = mysqli_fetch_assoc($ExeQrBuscarNaturezas) ){
            ?>
              <option value="<?php echo $ReturnNaturezas['id_natureza']?>">
                <?php echo $ReturnNaturezas['descricao_natureza']?>
              </option>
            <?php
          }
        }
      ?>
    </select>
  </div>

  <label for="protocolo_solicitante" class="col-1 col-form-label col-form-label-lg">Protocolo: </label>
  <div class="col-2">
    <input 
      type="text" 
      name="protocolo_solicitante" 
      id="protocolo_solicitante" 
      class="form-control form-control-lg"
      required
      placeholder="Protocolo do Solicitante"
    >
  </div>

  <label 
    for="data_evento" 
    class="col-1 col-form-label col-form-label-lg"
    style="font-size: 1.2rem"
  >Data Evento:</label>
  <div class="col-2">
    <input type="date" name="data_evento" id="data_evento" class="form-control form-control-lg">    
  </div>

  <label 
    for="horario_evento" 
    class="col-1 col-form-label col-form-label-lg"
    style="font-size: 1rem"
  >Horário Evento: </label>
  <div class="col-2">
    <input type="time" name="horario_evento" id="horario_evento" class="form-control form-control-lg">
  </div>

  <div class="space-1"></div>


  <label for="cep_local_evento" class="col-1 col-form-label col-form-label-lg">CEP:</label>
  <div class="col-2">
    <input 
      type="number" 
      name="cep_local_evento" 
      id="cep_local_evento" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-1 align-items-center float-left" style="cursor:pointer">
    <i class="fa fa-search form-control-lg"></i>
  </div>

  <label for="endereco_local_evento" class="col-2 col-form-label col-form-label-lg">Endereço:</label>
  <div class="col-5">
    <input type="hidden" name="endereco_local_evento" id="endereco_local_evento" value="" required>
    <input 
      type="text" 
      name="endereco_local_evento_exibir" 
      placeholder="Aguardando CEP..." 
      disabled id="endereco_local_evento_exibir" 
      class="form-control form-control-lg"
    >
  </div>
  <div class="col-1">
    <input type="text" name="numero_local_evento" placeholder="Nº" class="form-control form-control-lg">
  </div>
  
  <div class="col-12" style="margin-top: .5rem"></div>
  <label for="bairro_local_evento" class="col-1 col-form-label col-form-label-lg">Bairro:</label>
  <div class="col-4">
    <input type="hidden" name="bairro_local_evento" id="bairro_local_evento">
    <input 
      type="text" 
      class="form-control form-control-lg" 
      name="bairro_local_evento_exibir" 
      id="bairro_local_evento_exibir" 
      placeholder="Aguardando CEP..." disabled
    >
  </div>
  <label for="cidade_local_evento" class="col-1 col-form-label col-form-label-lg">Cidade:</label>
  <div class="col-4">
    <input type="hidden" name="cidade_local_evento" id="cidade_local_evento">
    <input 
      type="text" 
      disabled placeholder="Aguardando CEP..." 
      class="form-control form-control-lg" 
      name="cidade_local_evento_exibir" 
      id="cidade_local_evento_exibir" 
    >
  </div>

  <div class="col-2">
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