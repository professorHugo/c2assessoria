<!-- Características técnicas -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Características técnicas
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Caracteristicas-Tecnicas"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarCaracteristicasTecnicas = "
        SELECT * FROM tb_relatorios 
        WHERE protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBuscarCaracteristicasTecnicas);
      while( $ReturnCt = mysqli_fetch_assoc($ExeQrBuscarCaracteristicasTecnicas) ){
        $CaracteristicasLocal = $ReturnCt['caracteristicas_local_evento'];
      }
      if( $CaracteristicasLocal == '' ){
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


<!-- Pesquisas realizadas -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Pesquisas realizadas
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-No-Local"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarPesquisasLocal = "
        SELECT * FROM tb_relatorios relatorio
        INNER JOIN tb_local_evento local_evento
        ON relatorio.protocolo_evento = local_evento.protocolo_local_evento
        INNER JOIN tb_entrevistados entrevistados
        ON 
          relatorio.protocolo_evento = entrevistados.protocolo_entrevistados &&
          entrevistados.testemunha_entrevistado = '0'
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarPesquisasLocal = mysqli_query($connection, $QueryBuscarPesquisasLocal);
      $RowQrBuscarPesquisasLocal = mysqli_num_rows($ExeQrBuscarPesquisasLocal);
      if( $RowQrBuscarPesquisasLocal > 0 ){
        while( $ReturnPesquisasLocal = mysqli_fetch_assoc($ExeQrBuscarPesquisasLocal) ){
          $LocalSalvo = $ReturnPesquisasLocal['local_evento_salvo'];
        }
        if( $LocalSalvo == '' ){
          ?>
            <i class="icones icone-preencher"></i>
          <?php
        }else{
          ?>
            <i class="icones icone-ok"></i>
          <?php
        }
      }else{
        ?>
          <i class="icones icone-preencher"></i>
        <?php
      }
    ?>
  </a>
</div>