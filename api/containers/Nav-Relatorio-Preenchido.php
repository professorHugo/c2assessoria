<div class="text-center Menu-Relatorio Preenchido rounded">
  <li class="nav-item">
    <span>Navegar pelo Relatório</span>
  </li>
  <li class="nav-item">
    <a href="#Relatorio" class="scroll-to-Relatorio nav-link colapsed">
      Solicitação
    </a>
    <a href="#Perfil-Associado" class="scroll-to-Perfil-Associado nav-link colapsed">
      Perfil Associado
    </a>
    <a href="#Perfil-Condutor" class="scroll-to-Perfil-Condutor nav-link colapsed">
      Perfil Condutor
    </a>
    <a href="#Procedencia-Veiculo" class="scroll-to-Procedencia-Veiculo nav-link colapsed">
      Procedencia do Veiculo
    </a>
    <a href="#Sobre-Evento" class="scroll-to-Sobre-Evento nav-link colapsed">
      Sobre o Evento
    </a>
    <span class="scroll-to-Orgaos-Publicos nav-link colapsed" style="color: #aaa">
      Procedimentos Legais
    </span>
    <hr class="sidebar-divider" style="border-color: #aaa">
    <ul>
      <li class="nav-item">
        <a href="#Boletim-Ocorrencia" class="scroll-to-Boletim-Ocorrencia nav-link colapsed">
          Boletim de Ocorrencia
        </a>
      </li>
      <li class="nav-item">
        <a href="#Policia-Civil" class="scroll-to-Policia-Civil nav-link colapsed">
          Policia Civil
        </a>
      </li>
      <li class="nav-item">
        <a href="#Policia-Militar" class="scroll-to-Policia-Militar nav-link colapsed">
          Policia Militar
        </a>
      </li>
      <li class="nav-item">
        <a href="#Copom" class="scroll-to-Copom nav-link colapsed">
          Copom
        </a>
      </li>
      <li class="nav-item">
        <a href="#Mobilidade-Urbana" class="scroll-to-Mobilidade-Urbana nav-link colapsed">
          Mobilidade Urbana
        </a>
      </li>
    </ul>

    <span class="scroll-to-Orgaos-Publicos nav-link colapsed" style="color: #aaa">
      Convívio
    </span>
    <hr class="sidebar-divider" style="border-color: #aaa">
    <ul>
      <li class="nav-item">
        <a href="#Convivio-Associado" class="scroll-to-Convivio-Associado nav-link colapsed">
          Associado
        </a>
      </li>
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

        if( $BuscarCondutor == 2 ){
          ?>
            <li class="nav-item">
              <a href="#Convivio-Condutor" class="scroll-to-Convivio-Condutor nav-link colapsed">
                Condutor
              </a>
            </li>
          <?php
        }
      ?>
    </ul>
  </li>
</div>