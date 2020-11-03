<!-- Modal Ativar de Procedente -->
<div class="modal fade" id="AtivarProcedente<?php echo $ReturnProcedente['id_procedente']?>" tabindex="-1" aria-labelledby="AtivarProcedenteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Settings&Procedentes" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AtivarProcedenteLabel">Ativar estado Civil: <?php echo $ReturnProcedente['descricao_procedente']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Descrição: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnProcedente['descricao_procedente']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_procedente" value="<?php echo $ReturnProcedente['id_procedente']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Ativar" class="btn btn-primary" value="Ativar">
                </div>
            </div>
        </form>
    </div>
</div>