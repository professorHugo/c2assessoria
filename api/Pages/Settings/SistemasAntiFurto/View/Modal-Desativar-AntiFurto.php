<!-- Modal Desativar Chaves -->
<div class="modal fade" id="DesativarAntiFurto<?php echo $ReturnAntiFurto['id_sistema']?>" tabindex="-1" aria-labelledby="DesativarAntiFurtoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Settings&SistemasAntiFurto" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DesativarAntiFurtoLabel">Desativar Sistema: <?php echo $ReturnAntiFurto['tipo_sistema']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Nome: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnAntiFurto['tipo_sistema']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        
                        <input type="hidden" name="id_sistema" value="<?php echo $ReturnAntiFurto['id_sistema']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Desativar" class="btn btn-primary" value="Desativar">
                </div>
            </div>
        </form>
    </div>
</div>