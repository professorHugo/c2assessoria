<!-- Utilização do aplicativo -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Utilização do aplicativo
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Utilizacao-Aplicativos"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryUtilizacaoApp = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrUtilizacaoApp = mysqli_query($connection, $QueryUtilizacaoApp);
      while( $ReturnUsoApp = mysqli_fetch_assoc($ExeQrUtilizacaoApp) ){
        $ResUsoApp = $ReturnUsoApp['registro_mobilidade'];
      }
      if( $ResUsoApp == '' ){
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

