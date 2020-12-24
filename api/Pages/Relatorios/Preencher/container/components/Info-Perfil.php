<!-- Perfil do Associado -->
<div class="col-xs-6 col-sm-5 col-md-3 float-left">
  <label for="perfil_associado" class="col-form-label col-form-label-lg label-dados-relatorios">
    Perfil do Associado
  </label>
</div>
<div class="col-xs-3 col-sm-4 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Associado"
    class="btn btn-info form-control"
    id="perfil_associado"
  >
    <?php
      $QueryBuscarPerfilAssociado = "
        SELECT * FROM tb_associados associado
        INNER JOIN tb_veiculos veiculos
          ON veiculo.segurado_veiculo = associado.cpf_associado
        
      ";
    ?>
    <i class="icones icone-preencher"></i>
  </a>
</div>

<div class="col-xs-3 col-sm-3 float-left">
  <a href="https://www.google.com/maps/place/<?php echo $Endereco1?>+-+<?php echo $Bairro1?>,+<?php echo $Cidade1?>+-+<?php echo $Estado1?>,+<?php echo $Cep1?>" 
  target="_blank" class="btn btn-primary form-control">
    <i class="fa fa-location-arrow" aria-hidden="true"></i> Maps
  </a>
</div>

<?php
  if( $CondutorEvento == 2 ){
    ?>
      <div class="clearfix col-12" style="margin-top: 10px"></div>
      <!-- Perfil do Condutor -->
      <div class="col-xs-6 col-sm-5 col-md-3 float-left">
        <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
          Perfil do condutor 
        </label>
      </div>
      <div class="col-xs-3 col-sm-4 float-left">
        <a 
          href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Condutor"
          class="btn btn-info form-control"
          id="perfil_condutor"
        >
          <i class="icones icone-preencher"></i>
        </a>
      </div>

      <div class="col-xs-3 col-sm-3 float-left">
        <a href="https://www.google.com/maps/place/<?php echo $Endereco2?>+-+<?php echo $Bairro2?>,+<?php echo $Cidade2?>+-+<?php echo $Estado2?>,+<?php echo $Cep2?>" 
        target="_blank" class="btn btn-primary form-control">
          <i class="fa fa-location-arrow" aria-hidden="true"></i> Maps
        </a>
      </div>
    <?php
  }
?>