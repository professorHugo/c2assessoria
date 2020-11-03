<h2 class="col-12 float-left">
    <div class="float-left">Estados atendidos - DETRAN</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroDetran">
            Cadastrar <i class="fa fa-user-plus" aria-hidden="true"></i>
        </button>
    </div>
    
</h2>
<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>
<table class="table table-bordered table-striped table-dark table-hover">
  <thead class="thead-dark">
      <tr>
          <td>#</td>
          <td>Estado</td>
          <td>Ajuste</td>
      </tr>
  </thead>
  <tbody>
    <?php
      if( $RowQrBuscarDetran >= 1 ){
        while( $ReturnDetran = mysqli_fetch_assoc($ExeQrBuscarDetran) ){
          ?>
            <tr>
              <td><?php echo $ReturnDetran['id_detran'] ?></td>
              <td><?php echo $ReturnDetran['estado_detran'] ?></td>
              <td>
                <a 
                  style="cursor:pointer" 
                  data-toggle="modal" 
                  data-target="#EditarDetran<?php echo $ReturnDetran['id_detran']?>"
                  title="Editar o Estado"
                >
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a> &nbsp;

                <?php
                    if( $ReturnDetran['ativacao'] == 1){
                      ?>
                        <a 
                          style="cursor:pointer" 
                          data-toggle="modal" 
                          data-target="#DesativarDetran<?php echo $ReturnDetran['id_detran']?>" 
                          title="Estado Ativado"
                        >
                            
                          <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </a>
                      <?php
                    }else{
                      ?>
                        <a 
                            style="cursor:pointer" 
                            data-toggle="modal" 
                            data-target="#AtivarDetran<?php echo $ReturnDetran['id_detran']?>" 
                            title="Estado Desativado"
                        >
                            <i class="fa fa-ban" aria-hidden="true"></i>
                        </a>
                      <?php
                    }
                ?>

              </td>
            </tr>
          <?php

          include "Modal-Ativar-Detran.php";
          include "Modal-Desativar-Detran.php";
          include "Modal-Editar-Detran.php";

        }
      }else{
        echo "<br>Nada ainda definido";
      }
    ?>
  </tbody>
</table>

<?php
if( isset($_POST['Cadastro']) ){
  include "Cadastro-Detran.php";
}
if( isset($_POST['Editar']) ){
  include "Editar-Detran.php";
}

if( isset($_POST['Ativar']) ){
  include "Ativar-Detran.php";
}

if( isset($_POST['Desativar']) ){
  include "Desativar-Detran.php";
}