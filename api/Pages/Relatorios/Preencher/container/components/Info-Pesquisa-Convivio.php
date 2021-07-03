<!-- Convívio do Associado -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label 
    for="perfil_condutor" 
    class="col-form-label col-form-label-lg label-dados-relatorios"
  >
    Convívio do Associado
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Associado"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBusarEntrevistadosConvivioA = "
        SELECT * FROM tb_relatorios relatorio
        INNER JOIN tb_entrevistados entrevistados
        ON 
          relatorio.protocolo_evento = entrevistados.protocolo_entrevistados &&
          entrevistados.testemunha_entrevistado = '1' &&
          entrevistados.perfil_entrevistado = '1'
        INNER JOIN tb_entrevistados_convivio sabedores
        ON
          relatorio.protocolo_evento = sabedores.protocolo_sabedores &&
          sabedores.representante_sabedor = '1'
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBusarEntrevistadosConvivioA = mysqli_query($connection, $QueryBusarEntrevistadosConvivioA);
      $RowQrBusarEntrevistadosConvivioA = mysqli_num_rows($ExeQrBusarEntrevistadosConvivioA);

      if( $RowQrBusarEntrevistadosConvivioA >= 1 ){
        while( $ResBuscarSabedores = mysqli_fetch_assoc($ExeQrBusarEntrevistadosConvivioA) ){
          $SabedoresSalvo = $ResBuscarSabedores['sabedores_salvo'];
          $EntrevistadoSalvo = $ResBuscarSabedores['informacao_salva'];
        }

        if( $SabedoresSalvo == '' || $EntrevistadoSalvo == '' ){
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

<?php
  if( $CondutorEvento == 2 ){
    ?>
      <!-- Convívio do Condutor -->
      <div class="clearfix col-12" style="margin-top: 10px"></div>
      <div class="col-7 float-left">
        <label 
          for="perfil_condutor" 
          class="col-form-label col-form-label-lg label-dados-relatorios"
        >
          Convívio do Condutor
        </label>
      </div>
      <div class="col-5 float-left">
        <a 
          href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor"
          class="btn btn-info form-control"
          id="perfil_condutor"
        >
          <?php
            $QueryBusarEntrevistadosConvivioC = "
            SELECT * FROM tb_relatorios relatorio
            INNER JOIN tb_entrevistados entrevistados
            ON 
              relatorio.protocolo_evento = entrevistados.protocolo_entrevistados &&
              entrevistados.testemunha_entrevistado = '1' &&
              entrevistados.perfil_entrevistado = '2'
            INNER JOIN tb_entrevistados_convivio sabedores
            ON
              relatorio.protocolo_evento = sabedores.protocolo_sabedores &&
              sabedores.representante_sabedor = '2'
            WHERE relatorio.protocolo_evento = '$Protocolo'
          ";
          $ExeQrBusarEntrevistadosConvivioC = mysqli_query($connection, $QueryBusarEntrevistadosConvivioC);
          $RowQrBusarEntrevistadosConvivioC = mysqli_num_rows($ExeQrBusarEntrevistadosConvivioC);

          if( $RowQrBusarEntrevistadosConvivioC >= 1 ){
            while( $ResBuscarSabedoresC = mysqli_fetch_assoc($ExeQrBusarEntrevistadosConvivioC) ){
              $SabedoresSalvoC = $ResBuscarSabedoresC['sabedores_salvo'];
              $EntrevistadoSalvoC = $ResBuscarSabedoresC['informacao_salva'];
            }

            if( $SabedoresSalvoC == '' || $EntrevistadoSalvoC == '' ){
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
    <?php
  }
?>