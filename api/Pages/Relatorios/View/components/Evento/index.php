<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDinamicaEvento = "
      SELECT * FROM 
        tb_relatorios
      WHERE 
        protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDinamicaEvento = mysqli_query($connection, $QueryBuscarDinamicaEvento);
    $RowQrBuscarDinamicaEvento = mysqli_num_rows($ExeQrBuscarDinamicaEvento);
    if( $RowQrBuscarDinamicaEvento = 1 ){
      while( $ReturnDinamicaEvento = mysqli_fetch_assoc($ExeQrBuscarDinamicaEvento) ){
        $DinamicaEvento = $ReturnDinamicaEvento['dinamica_do_evento'];
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarDinamicaEvento = "
      SELECT * FROM 
        tb_relatorios
      WHERE 
        protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarDinamicaEvento = mysqli_query($connection, $QueryBuscarDinamicaEvento);
    $RowQrBuscarDinamicaEvento = mysqli_num_rows($ExeQrBuscarDinamicaEvento);
    if( $RowQrBuscarDinamicaEvento = 1 ){
      while( $ReturnDinamicaEvento = mysqli_fetch_assoc($ExeQrBuscarDinamicaEvento) ){
        $DinamicaEvento = $ReturnDinamicaEvento['dinamica_do_evento'];
      }
    }
  }
?>

<div class="col-12 space-3" id="Dinamica-Evento">
  <h4 class="col-12 rotulos">Dinâmica do evento: </h4>
  <div class="col-12 texto-relato float-left">
    <p class="text-justify">
      <textarea rows="20" disabled class="form-control form-control-lg" style="border:none"
      ><?php echo $DinamicaEvento?></textarea>
      <span class="text-aviso-pc">Para editar o texto do relato, acesse via computador</span>
      <div class="editar-relato">
        <button type="button" class="btn btn-primary"
          data-toggle="modal" 
          data-target="#Editar-Dinamica-Evento"
        >
          Editar relato
        </button>
      </div>
    </p>
  </div>
</div>

<p class="numero-pagina">
  Relatório: <?php echo $Protocolo ?> 
  - Página ??? - 
  Dinâica do evento
</p>


<!-- Local do Evento -->
<div class="col-12 space-3" id="Local-Evento">
  <?php include 'Local-Evento.php'?>
</div>

<?php include 'Modal-Editar-Dinamica-Evento.php'?>