<!-- Pesquisas Realizadas -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="pesquisas-realizadas" class="col-form-label col-form-label-lg label-dados-relatorios">
    Pesquisas Realizadas
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-Orgaos-Publicos"
    class="btn btn-info form-control"
    id="pesquisas-realizadas"
  >
    <?php
      $QueryBuscarOrgaosPublicos = "
        SELECT * FROM tb_relatorios 
        WHERE protocolo_evento = '$Protocolo'
      ";
      $ExeQrBuscarOrgaosPublicos = mysqli_query($connection, $QueryBuscarOrgaosPublicos);
      while( $ReturnPC = mysqli_fetch_assoc($ExeQrBuscarOrgaosPublicos) ){
        $ResOrgaosPublicos = $ReturnPC['orgaos_publicos'];
      }
      if( $ResOrgaosPublicos == '' ){
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

<!-- Boletim de Ocorrência -->
<?php //include 'Bloco-Boletim.old.php';?>

<!-- COPOM - 190 -->
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    COPOM - 190
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=COPOM"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarCOPOM = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrBuscarCOPOM = mysqli_query($connection, $QueryBuscarCOPOM);
      while( $ReturnCOPOM = mysqli_fetch_assoc($ExeQrBuscarCOPOM) ){
        $ResCOPOM = $ReturnCOPOM['registro_copom'];
      }
      if( $ResCOPOM == '' ){
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

<!-- Polícia Civil 
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Polícia Civil
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Policia-Civil"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarPoliciaCivil = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrBuscarPoliciaCivil = mysqli_query($connection, $QueryBuscarPoliciaCivil);
      while( $ReturnPC = mysqli_fetch_assoc($ExeQrBuscarPoliciaCivil) ){
        $ResPoliciaCivil = $ReturnPC['policia_civil'];
      }
      if( $ResPoliciaCivil == '' ){
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

<!-- Polícia Militar 
<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios">
    Polícia Militar
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Policia-Militar"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarPoliciaMilitar = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrBuscarPoliciaMilitar = mysqli_query($connection, $QueryBuscarPoliciaMilitar);
      while( $ReturnPM = mysqli_fetch_assoc($ExeQrBuscarPoliciaMilitar) ){
        $ResPoliciaMilitar = $ReturnPM['policia_militar'];
      }
      if( $ResPoliciaMilitar == '' ){
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
-->