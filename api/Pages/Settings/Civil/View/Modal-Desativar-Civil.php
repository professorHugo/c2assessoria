<!-- Modal Desativar de Natureza -->
<div class="modal fade" id="DesativarCivil<?php echo $ReturnCivil['id_civil']?>" tabindex="-1" aria-labelledby="DesativarCivilLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Settings&Civil" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DesativarCivilLabel">Desativar estado Civil: <?php echo $ReturnCivil['descricao_civil']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Nome: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnCivil['descricao_civil']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_civil" value="<?php echo $ReturnCivil['id_civil']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Desativar" class="btn btn-primary" value="Desativar">
                </div>
            </div>
        </form>
    </div>
</div>