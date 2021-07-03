<!-- Procedência do Veículo -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Procedência do Veículo
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Procedencia-Veiculo"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarProcedencia = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarProcedencia = mysqli_query($connection, $QueryBuscarProcedencia);
      while( $ReturnProcedencia = mysqli_fetch_assoc($ExeQrBuscarProcedencia) ){
        $Procedente = $ReturnProcedencia['procedente_veiculo'];
      }

      if( $Procedente == '' ){
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

<div class="clearfix col-12" style="margin-top: 10px"></div>
<!-- Dados do Proprietario Legal -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Proprietário Legal
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Proprietario-Legal"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarProprietario = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
      while( $ReturnProprietario = mysqli_fetch_assoc($ExeQrBuscarProprietario) ){
        $Proprietario = $ReturnProprietario['proprietario_veiculo'];
      }

      if( $Proprietario == '' ){
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


<div class="clearfix col-12" style="margin-top: 10px"></div>
<!-- Dados do Proprietario Anterior -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Proprietário Anterior
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Proprietario-Anterior"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarProprietarioAnterior = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
      while( $ReturnProprietarioAnterior = mysqli_fetch_assoc($ExeQrBuscarProprietarioAnterior) ){
        $ProprietarioAnterior = $ReturnProprietarioAnterior['proprietario_anterior_veiculo'];
      }

      if( $ProprietarioAnterior == '' ){
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


<div class="clearfix col-12" style="margin-top: 10px"></div>
<!-- Dados do DETRAN -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    DETRAN
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Apontamentos-Detran"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarRegistroDetran = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarRegistroDetran = mysqli_query($connection, $QueryBuscarRegistroDetran);
      while( $ReturnRegistroDetran = mysqli_fetch_assoc($ExeQrBuscarRegistroDetran) ){
        $RegistroDetran = $ReturnRegistroDetran['registro_detran'];
      }

      if( $RegistroDetran == '' ){
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

<div class="clearfix col-12" style="margin-top: 10px"></div>
<!-- Dados de FINANCIAMENTO -->
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Financiamento Atrelado
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Financiamento-Atrelado"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarFinanceiroVeiculo = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarFinanceiroVeiculo = mysqli_query($connection, $QueryBuscarFinanceiroVeiculo);
      while( $ReturnFinanceiroVeiculo = mysqli_fetch_assoc($ExeQrBuscarFinanceiroVeiculo) ){
        $FinanceiroVeiculo = $ReturnFinanceiroVeiculo['financeiro_veiculo'];
      }

      if( $FinanceiroVeiculo == '' ){
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


<div class="clearfix col-12" style="margin-top: 10px"></div>
<!-- Sistema Antifurto -->
<div class="col-7 float-left" style="margin-top: 10px">
  <label for="sistema_antifurto" class="col-form-label col-form-label-lg label-dados-relatorios">
    Sistema Antifurto
  </label>
</div>
<div class="col-5 float-left" style="margin-top: 10px">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Anti-Furto"
    class="btn btn-info form-control"
    id="sistema_antifurto"
  >
    <?php
      $QueryBuscarSistemaAntiFurto = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        WHERE relatorio.protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarSistemaAntiFurto = mysqli_query($connection, $QueryBuscarSistemaAntiFurto);
      while( $ReturnSistemaAntiFurto = mysqli_fetch_assoc($ExeQrBuscarSistemaAntiFurto) ){
        $SistemaAntiFurto = $ReturnSistemaAntiFurto['sistema_anti_furto'];
      }

      if( $SistemaAntiFurto == '' ){
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

