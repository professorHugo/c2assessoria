<?php
  $Protocolo = $_GET['Protocolo'];
  $QueryBuscarCondutor = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
  $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
  $RowQrBuscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);
  if( $RowQrBuscarCondutor = 1 ){
    while( $ReturnBuscarCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor) ){
      $BuscarCondutor = $ReturnBuscarCondutor['condutor_veiculo'];
    }
  }
?>
<div class="text-center Menu-Relatorio Preencher rounded">
  <li class="nav-item">Navegar pelo Relatório</li>
  <li class="nav-item">
    <a href="#Relatorio" class="scroll-to-Relatorio nav-link colapsed">
      <?php
        if( $BuscarCondutor == 2 ){
          echo "Perfis";
        }else{
          echo "Perfil";
        }
      ?>
    </a>
    <a href="#Perfil-Associado" class="scroll-to-Perfil-Associado nav-link colapsed">
      Veículo
    </a>
    <a href="#Perfil-Condutor" class="scroll-to-Perfil-Condutor nav-link colapsed">
      Sobre o Evento
    </a>
    <a href="#Procedencia-Veiculo" class="scroll-to-Procedencia-Veiculo nav-link colapsed">
      Sobre o Local
    </a>
    <a href="#Sobre-Evento" class="scroll-to-Sobre-Evento nav-link colapsed">
      Órgãos Públicos
    </a>
    <a href="#Sobre-Evento" class="scroll-to-Sobre-Evento nav-link colapsed">
      Mobilidade Urbana
    </a>
    <a href="#Sobre-Evento" class="scroll-to-Sobre-Evento nav-link colapsed">
      Contexto Geral
    </a>
  </li>
</div>