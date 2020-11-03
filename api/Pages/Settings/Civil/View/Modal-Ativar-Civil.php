<!-- Modal Ativar de Civil -->
<div class="modal fade" id="AtivarCivil<?php echo $ReturnCivil['id_civil']?>" tabindex="-1" aria-labelledby="AtivarCivilLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Settings&Civil" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AtivarCivilLabel">Ativar estado Civil: <?php echo $ReturnCivil['descricao_civil']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Descrição: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnCivil['descricao_civil']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_civil" value="<?php echo $ReturnCivil['id_civil']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Ativar" class="btn btn-primary" value="Ativar">
                </div>
            </div>
        </form>
    </div>
</div>