<div class="form-group row">
  <label for="solicitante" class="col-md-2 col-form-label col-form-label-lg">Solicitante</label>
  <div class="col-md-4">
    <select 
        name="solicitante" 
        id="solicitante" 
        class="form-control form-control-lg"
        required
      >
        <option value="" disabled selected>Selecione</option>
        <?php
          $QueryBuscarSolicitantes = "SELECT * FROM tb_clientes WHERE ativacao = '1'";
          $ExeQrBuscarSolicitantes = mysqli_query($connection, $QueryBuscarSolicitantes);
          if( mysqli_num_rows($ExeQrBuscarSolicitantes) >= 1 ){
            while( $ReturnSolicitantes = mysqli_fetch_assoc($ExeQrBuscarSolicitantes) ){
              ?>
                <option value="<?php echo $ReturnSolicitantes['id_cliente']?>">
                  <?php echo $ReturnSolicitantes['nome_cliente']?>
                </option>
              <?php
            }
          }
        ?>
    </select>
  </div>

  <label for="sindicante" class="col-md-2 col-form-label col-form-label-lg">Sindicante</label>
  <div class="col-md-4">
    <select 
      name="sindicante" 
      id="sindicante" 
      class="form-control form-control-lg"
      required
    >
      <option value="" selected disabled>Selecione</option>
      <?php
        $QueryBuscarSindicantes = "
          SELECT * FROM tb_sindicantes sindicante
          INNER JOIN tb_usuarios usuario
            ON sindicante.id_usuario = usuario.id_usuario
          WHERE 
            sindicante.ativacao = 1 &&
            usuario.permissao_usuario != 3 &&
            usuario.permissao_usuario != 1
        ";
        $ExeQrBuscarSindicantes = mysqli_query($connection, $QueryBuscarSindicantes);
        if( mysqli_num_rows($ExeQrBuscarSindicantes) >= 1 ){
          while( $ReturnSindicantes = mysqli_fetch_assoc($ExeQrBuscarSindicantes) ){
            ?>
              <option value="<?php echo $ReturnSindicantes['id_sindicante'] ?>">
                <?php echo $ReturnSindicantes['nome_usuario'] ?>
              </option>
            <?php
          }
        }
      ?>
    </select>
  </div>
</div>