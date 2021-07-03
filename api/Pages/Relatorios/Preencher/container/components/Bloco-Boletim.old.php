<div class="clearfix col-12" style="margin-top: 10px"></div>
<div class="col-7 float-left">
  <label 
    for="perfil_condutor" class="col-form-label col-form-label-lg label-dados-relatorios" 
    style="padding-top:5px"
  >
    Boletim de Ocorrência
  </label>
</div>
<div class="col-5 float-left">
  <a 
    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Boletim-Ocorrencia"
    class="btn btn-info form-control"
    id="perfil_condutor"
  >
    <?php
      $QueryBuscarBoletimOcorrencia = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
      $ExeQrBuscarBoletimOcorrencia = mysqli_query($connection, $QueryBuscarBoletimOcorrencia);
      while( $ReturnBO = mysqli_fetch_assoc($ExeQrBuscarBoletimOcorrencia) ){
        $ResBoletim = $ReturnBO['boletim_ocorrencia'];
      }

      if( $ResBoletim == '' ){
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