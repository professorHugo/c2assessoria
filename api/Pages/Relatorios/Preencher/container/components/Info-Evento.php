<!-- Dinâmica do evento -->
<div class="col-7 float-left">
  <label for="perfil_associado" class="col-form-label col-form-label-lg label-dados-relatorios">
    Dinâmica do evento
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Dinamica-Evento"
    class="btn btn-info form-control"
    id="perfil_associado"
  >
    <?php
      $QueryBuscarDinamicaEvento = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrBuscarDinamicaEvento = mysqli_query($connection, $QueryBuscarDinamicaEvento);
      while( $ResDinamicaEvento = mysqli_fetch_assoc($ExeQrBuscarDinamicaEvento) ){
        $ReturnDinamicaEvento = $ResDinamicaEvento['dinamica_do_evento'];
      }

      if( $ReturnDinamicaEvento == '' ){
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

<div class="clearfix col-12 space-1"></div>

<?php
  if( $CondutorEvento == 2 ){
    ?>
      <!-- Relato do Condutor -->
      <div class="col-7 float-left">
        <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
          Considerações do Condutor
        </label>
      </div>
      <div class="col-5 float-left">
        <a 
          href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Consideracoes-Condutor"
          class="btn btn-info form-control"
          id="perfil_condutor"
        >
          <?php
            $QueryBuscaRelatoCondutor = "
              SELECT * FROM tb_relatorios relatorio
              INNER JOIN tb_condutores condutor
              ON relatorio.protocolo_evento = condutor.protocolo_evento
              WHERE relatorio.protocolo_evento = '$Protocolo'
            ";
            $ExeQrBuscaRelatoCondutor = mysqli_query($connection, $QueryBuscaRelatoCondutor);
            while( $ResRelatoCondutor = mysqli_fetch_assoc($ExeQrBuscaRelatoCondutor) ){
              $ReturnRelatoCondutor = $ResRelatoCondutor['relato_condutor'];
            }

            if( $ReturnRelatoCondutor == '' ){
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
    <?php
  }
?>


<div class="clearfix col-12 space-1"></div>
<!-- Relato do Associado -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Considerações do Associado
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Consideracoes-Associado"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscaRelatoAssociado = "
        SELECT * FROM tb_relatorios relatorio
        INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscaRelatoAssociado = mysqli_query($connection, $QueryBuscaRelatoAssociado);
      while( $ResRelatoAssociado = mysqli_fetch_assoc($ExeQrBuscaRelatoAssociado) ){
        $ReturnRelatoAssociado = $ResRelatoAssociado['relato_associado'];
      }

      if( $ReturnRelatoAssociado == '' ){
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