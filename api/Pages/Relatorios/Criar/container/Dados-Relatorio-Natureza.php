<div class="form-group row">
  <label for="protocolo_solicitacao" class="col-md-2 col-form-label col-form-label-lg">
    Relatório: 
  </label>
  <div class="col-md-4">
    <?php
        "<br><pre>".
      $QueryBuscarUltimoRelatorio = "SELECT id_relatorio FROM tb_relatorios ORDER BY id_relatorio DESC LIMIT 1";
        "</pre>";
      $ExeQrBuscarUltimoRelatorio = mysqli_query($connection, $QueryBuscarUltimoRelatorio);

      if($ExeQrBuscarUltimoRelatorio){
        $UltimoRegistro = mysqli_fetch_array($ExeQrBuscarUltimoRelatorio);
      }else{
        $UltimoRegistro = 0;
      }

        "<br>Próximo Registro: 2020-" . $Registro = $UltimoRegistro[0]+1;

        "<br><pre>".
      $QueryCadastrarRelatorioInicio = "
        INSERT INTO tb_relatorios(
          protocolo_evento
        )VALUES(
          '$Registro'
        )
      ";
        "</pre>";
      // $ExeQrCadastrarRelatorioInicio = mysqli_query($connection, $QueryCadastrarRelatorioInicio);

    ?>
    <input 
      type="text" 
      name="protocolo_solicitacao" 
      id="protocolo_solicitacao" 
      class="form-control form-control-lg"
      required
      value="<?php echo $Registro ?>"
    >
  </div>

  <label for="natureza_evento" class="col-md-2 col-form-label col-form-label-lg">Natureza</label>
  <div class="col-md-4">
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
</div>