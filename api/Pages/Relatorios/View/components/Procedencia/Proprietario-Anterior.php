<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM tb_proprietario_anterior
      WHERE id_proprietario = '$ProprietarioAnterior'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);

    if( $RowQrBuscarProprietarioAnterior = 1 ){
      while( $ReturProprietarioAnterior = mysqli_fetch_assoc($ExeQrBuscarProprietarioAnterior) ){
      echo "<br>Nome:" . $NomeProprietarioAnterior = $ReturProprietarioAnterior['nome_proprietario'];
      echo "<br>Vínculo: " . $VinculoProprietarioAnterior = $ReturProprietarioAnterior['vinculo_proprietario'];

      $DocumentoProprietarioAnteriorFrente = $ReturProprietarioAnterior['documento_frente'];

      if( $DocumentoProprietarioAnteriorFrente = '' ){
        $DocumentoProprietarioAnteriorFrente = '';echo "<br>Documento - Frente: Vazio";
      }else{
        echo "<br>Documento - Frente: " . 
        $DocumentoProprietarioAnteriorFrente = $ReturProprietarioAnterior['documento_frente'];
      }

      $DocumentoProprietarioAnteriorVerso = $ReturProprietarioAnterior['documento_verso'];
      if( $DocumentoProprietarioAnteriorVerso = '' ){
        $DocumentoProprietarioAnteriorVerso = '';echo "<br>Documento - Verso: Vazio";
      }else{
        echo "<br>Documento - Verso: " . 
        $DocumentoProprietarioAnteriorVerso = $ReturProprietarioAnterior['documento_verso'];
      }

      $DeclaracaoProprietarioAnterior1 = $ReturProprietarioAnterior['declaracao1'];
      if( $DeclaracaoProprietarioAnterior1 = '' ){
        $DeclaracaoProprietarioAnterior1 = ''; echo "<br>Declaracao 1: Vazio"; 
      }else{
        echo "<br>Declaração 1: " . 
        $DeclaracaoProprietarioAnterior1 = $ReturProprietarioAnterior['declaracao1'];
      }

      $DeclaracaoProprietarioAnterior2 = $ReturProprietarioAnterior['declaracao2'];
      if( $DeclaracaoProprietarioAnterior2 = '' ){
        $DeclaracaoProprietarioAnterior2 = '' ; echo "<br>Declaração 2: Vazio";
      }else{
        echo "<br>Declaração 2: " . 
        $DeclaracaoProprietarioAnterior2 = $ReturProprietarioAnterior['declaracao2'];
      }
      
      $DeclaracaoProprietarioAnterior3 = $ReturProprietarioAnterior['declaracao3'];
      if( $DeclaracaoProprietarioAnterior3 = '' ){
        $DeclaracaoProprietarioAnterior3 = '' ; echo "<br>Declaração 3: Vazio";
      }else{
        echo "<br>Declaração 3: " . 
        $DeclaracaoProprietarioAnterior3 = $ReturProprietarioAnterior['declaracao3'];
      }

      echo "<br>" . $ObservacoesProprietarioAnterior = $ReturProprietarioAnterior['observacoes_proprietario'];
      }
    }
  }else{
    //PROd

    "<br><pre>" . 
    $QueryBuscarProprietarioAnterior = "
      SELECT * FROM tb_proprietario_anterior
      WHERE id_proprietario = '$ProprietarioAnterior'
    ";
    "</pre>";
    $ExeQrBuscarProprietarioAnterior = mysqli_query($connection, $QueryBuscarProprietarioAnterior);
    $RowQrBuscarProprietarioAnterior = mysqli_num_rows($ExeQrBuscarProprietarioAnterior);

    if( $RowQrBuscarProprietarioAnterior = 1 ){
      while( $ReturProprietarioAnterior = mysqli_fetch_assoc($ExeQrBuscarProprietarioAnterior) ){
      "<br>Nome:" . $NomeProprietarioAnterior = $ReturProprietarioAnterior['nome_proprietario'];
      "<br>Vínculo: " . $VinculoProprietarioAnterior = $ReturProprietarioAnterior['vinculo_proprietario'];

      $DocumentoProprietarioAnteriorFrente = $ReturProprietarioAnterior['documento_frente'];

      if( $DocumentoProprietarioAnteriorFrente = '' ){
        $DocumentoProprietarioAnteriorFrente = '';"<br>Documento - Frente: Vazio";
      }else{
        "<br>Documento - Frente: " . 
        $DocumentoProprietarioAnteriorFrente = $ReturProprietarioAnterior['documento_frente'];
      }

      $DocumentoProprietarioAnteriorVerso = $ReturProprietarioAnterior['documento_verso'];
      if( $DocumentoProprietarioAnteriorVerso = '' ){
        $DocumentoProprietarioAnteriorVerso = '';"<br>Documento - Verso: Vazio";
      }else{
        "<br>Documento - Verso: " . 
        $DocumentoProprietarioAnteriorVerso = $ReturProprietarioAnterior['documento_verso'];
      }

      $DeclaracaoProprietarioAnterior1 = $ReturProprietarioAnterior['declaracao1'];
      if( $DeclaracaoProprietarioAnterior1 = '' ){
        $DeclaracaoProprietarioAnterior1 = ''; "<br>Declaracao 1: Vazio"; 
      }else{
        "<br>Declaração 1: " . 
        $DeclaracaoProprietarioAnterior1 = $ReturProprietarioAnterior['declaracao1'];
      }

      $DeclaracaoProprietarioAnterior2 = $ReturProprietarioAnterior['declaracao2'];
      if( $DeclaracaoProprietarioAnterior2 = '' ){
        $DeclaracaoProprietarioAnterior2 = '' ; "<br>Declaração 2: Vazio";
      }else{
        "<br>Declaração 2: " . 
        $DeclaracaoProprietarioAnterior2 = $ReturProprietarioAnterior['declaracao2'];
      }
      
      $DeclaracaoProprietarioAnterior3 = $ReturProprietarioAnterior['declaracao3'];
      if( $DeclaracaoProprietarioAnterior3 = '' ){
        $DeclaracaoProprietarioAnterior3 = '' ; "<br>Declaração 3: Vazio";
      }else{
        "<br>Declaração 3: " . 
        $DeclaracaoProprietarioAnterior3 = $ReturProprietarioAnterior['declaracao3'];
      }

      "<br>" . $ObservacoesProprietarioAnterior = $ReturProprietarioAnterior['observacoes_proprietario'];
      }
    }
  }
?>

<h4 class="col-12 rotulos">Proprietario Anterior</h4>
<div class="col-4 float-left">
  <b>Nome: </b><br>
  <?php echo $NomeProprietarioAnterior ?>
</div>

<div class="col-4 float-left">
  <b>Vinculo: </b><br>
  <?php echo $VinculoProprietarioAnterior ?>
</div>

<div class="col-4 float-left">
  <b>Declaração apresentada: </b><br>
  <?php 
    if( 
      $DeclaracaoProprietarioAnterior1 != '' || 
      $DeclaracaoProprietarioAnterior2 != '' || 
      $DeclaracaoProprietarioAnterior3 != '' 
    ){
      echo "Sim";
    }else{
      echo "Não";
    }
  ?>
</div>

<div class="col-12 space-2 float-left" id="Documentos-Proprietario-Anterior">
  <?php include 'components/Fotos-Documentos-Proprietario-Anterior.php' ?>
</div>

<div class="col-12 space-2 float-left" id="Declaracao-Proprietario-Anterior">
  <?php include 'components/Fotos-Declaracao-Proprietario-Anterior.php' ?>
</div>