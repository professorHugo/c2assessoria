<table class="table table-bordered table-striped table-dark table-hover">
  <thead class="thead-dark">
    <tr>
      <td>Data</td>
      <td>Título</td>
      <td>Descrição</td>
    </tr>
  </thead>
  <tbody>
    <?php
      while( $ReturnUpdates = mysqli_fetch_assoc($ExeQrBuscarUpdates) ){
        ?>
          <tr>
            <td>
              <span style="font-size: 0.8rem; text-align: middle">
                <?php echo date( "d-m-Y H:i", strtotime($ReturnUpdates['data_update'])) ?>
              </span>
            </td>
            <td>
              <?php echo $ReturnUpdates['titulo_update'] ?>
            </td>
            <td style="cursor: pointer" 
              title="Ver o Update" 
              data-toggle="modal" 
              data-target="#Modal-Update-<?php echo $ReturnUpdates['id_update']?>">
              <?php echo Resumo($ReturnUpdates['texto_update'], 95)." ..." ?>
            </td>
          </tr>


          <!-- Modal Update -->
          <div class="modal fade" id="Modal-Update-<?php echo $ReturnUpdates['id_update']?>" tabindex="-1" aria-labelledby="Modal-Update-<?php echo $ReturnUpdates['id_update']?>Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modal-Update-<?php echo $ReturnUpdates['id_update']?>Label">
                    <?php echo $ReturnUpdates['titulo_update']?>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php echo $ReturnUpdates['texto_update']?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        <?php
      }
    ?>
  </tbody>
</table>
