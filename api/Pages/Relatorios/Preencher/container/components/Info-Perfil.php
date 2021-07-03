<!-- Perfil do Associado -->
<div class="col-6 float-left">
  <label for="perfil_associado" class="col-form-label col-form-label-lg label-dados-relatorios">
    Perfil do Associado
  </label>
</div>
<div class="col-3 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Associado"
    class="btn btn-info form-control"
    id="perfil_associado"
  >
    <?php
      $QueryBuscarPerfilAssociado = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_associados associado
          ON relatorio.cpf_associado = associado.cpf_associado
        WHERE relatorio.protocolo_evento = '$Protocolo'        
      ";
      $ExeQrBuscarPerfilAssociado = mysqli_query($connection, $QueryBuscarPerfilAssociado);
      while( $ReturnPerfilA = mysqli_fetch_assoc($ExeQrBuscarPerfilAssociado) ){
        $PerfilSalvoA = $ReturnPerfilA['perfil_salvo'];
      }
      if( $PerfilSalvoA == 2 ){
        ?>
          <i class="icones icone-preencher"></i>
        <?php
      }else{
        ?>
          <i class="icones icone-ok"></i>
        <?php
      }
    ?>
    
  </a>
</div>

<div class="col-xs-3 col-sm-3 float-left">
  <a href="https://www.google.com/maps/place/<?php echo $Endereco1?>+-+<?php echo $Bairro1?>,+<?php echo $Cidade1?>+-+<?php echo $Estado1?>,+<?php echo $Cep1?>" 
  target="_blank" class="btn btn-primary form-control">
    <i class="icones icone-navegar" aria-hidden="true"></i>
  </a>
</div>

<?php
  if( $CondutorEvento == 2 ){
    ?>
      <div class="clearfix col-12" style="margin-top: 10px"></div>
      <!-- Perfil do Condutor -->
      <div class="col-6 float-left">
        <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
          Perfil do condutor 
        </label>
      </div>
      <div class="col-3 float-left">
        <a 
          href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Condutor"
          class="btn btn-info form-control"
          id="perfil_condutor"
        >
          <?php
            $QueryBuscarPerfilCondutor = "
              SELECT * FROM 
                tb_relatorios relatorio
              INNER JOIN tb_condutores condutor
                ON relatorio.protocolo_evento = condutor.protocolo_evento
              WHERE relatorio.protocolo_evento = '$Protocolo'        
            ";
            $ExeQrBuscarPerfilCondutor = mysqli_query($connection, $QueryBuscarPerfilCondutor);
            while( $ReturnPerfilC = mysqli_fetch_assoc($ExeQrBuscarPerfilCondutor) ){
              $PerfilSalvoC = $ReturnPerfilC['perfil_salvo'];
            }
            if( $PerfilSalvoC == 2 ){
              ?>
                <i class="icones icone-preencher"></i>
              <?php
            }else{
              ?>
                <i class="icones icone-ok"></i>
              <?php
            }
          ?>
        </a>
      </div>

      <div class="col-xs-3 col-sm-3 float-left">
        <a href="https://www.google.com/maps/place/<?php echo $Endereco2?>+-+<?php echo $Bairro2?>,+<?php echo $Cidade2?>+-+<?php echo $Estado2?>,+<?php echo $Cep2?>" 
        target="_blank" class="btn btn-primary form-control">
          <i class="icones icone-navegar" aria-hidden="true"></i>
        </a>
      </div>
    <?php
  }
?>