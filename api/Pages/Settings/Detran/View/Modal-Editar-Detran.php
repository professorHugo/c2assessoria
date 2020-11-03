<!-- Modal Editar de Natureza -->
<div class="modal fade" id="EditarDetran<?php echo $ReturnDetran['id_detran']?>" tabindex="-1" aria-labelledby="EditarDetranLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <form action="?Page=Settings&Detran" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditarDetranLabel">Editar Estado Detran: <?php echo $ReturnDetran['estado_detran']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-6 float-left">
                            Estado: 
                        </label>
                        <div class="col-6 float-left">
                            <input type="text" value="<?php echo $ReturnDetran['estado_detran']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_detran" value="<?php echo $ReturnDetran['id_detran']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Editar" class="btn btn-primary" value="Editar">
                </div>
            </div>
        </form>
    </div>
</div>