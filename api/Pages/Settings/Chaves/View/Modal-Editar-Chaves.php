<!-- Modal Editar chave -->
<div class="modal fade" id="EditarChaves<?php echo $ReturnChaves['id_chave']?>" tabindex="-1" aria-labelledby="EditarChavesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Settings&Chaves" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditarChavesLabel">Editar tipo de chave: <?php echo $ReturnChaves['descricao_chave']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Descrição: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnChaves['descricao_chave']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_chave" value="<?php echo $ReturnChaves['id_chave']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Editar" class="btn btn-primary" value="Editar">
                </div>
            </div>
        </form>
    </div>
</div>