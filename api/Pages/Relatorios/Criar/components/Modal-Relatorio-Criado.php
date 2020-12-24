<script type="text/javascript">
  $(function(){
    $("body").addClass('modal-open');
  });
</script>

<!-- Modal Sindicância cadastrada -->
<div 
  class="modal fade show" 
  id="staticBackdrop" 
  data-keyboard="false" 
  tabindex="-1" 
  aria-labelledby="staticBackdropLabel" 
  aria-hidden="true"
  style="
    display: block;
    background: rgba(78,115,223, .87); 
  "
>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Sindicância criada com sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        O Relatório <?php echo $ProtocoloRelatorio?> foi criado com sucesso para o sindicante 
        <?php
          $QueryBuscarSindicantes = "
            SELECT * FROM tb_sindicantes sindicante
            INNER JOIN tb_usuarios usuario
              ON sindicante.id_usuario = usuario.id_usuario
            WHERE sindicante.ativacao = 1 && id_sindicante = '$Sindicante'
          ";
          $ExeQrBuscarSindicantes = mysqli_query($connection, $QueryBuscarSindicantes);
          while($ReturnSindicante = mysqli_fetch_assoc($ExeQrBuscarSindicantes)){
            echo $ReturnSindicante['nome_usuario'];
          }

          //Criar diretório
          if(!is_dir("Docs/".$CPFAssociado."/")){
            mkdir("Docs/".$CPFAssociado."/", 0777);
          }else{
            echo "<br>Já existe o diretório";
          }
        ?>
      </div>
      <div class="modal-footer">
        <a href="?Page=Relatorios&Criar" class="btn btn-success">Novo Relatório</a>
        <a href="?Page=Relatorios" class="btn btn-primary">Entendi</a>
      </div>
    </div>
  </div>
</div>