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
      value="<?php echo date('Y') . '-' . $Registro ?>"
    >
  </div>

  <label for="horario_criacao" class="col-md-2 col-form-label col-form-label-lg">Data de Criação: </label>
  <div class="col-md-4">
    <input type="text" 
      name="horario_criacao" 
      id="horario_criacao" 
      class="form-control form-control-lg disabled"
      required value="<?php echo date('d/m/Y')?>"
    >
  </div>
</div>