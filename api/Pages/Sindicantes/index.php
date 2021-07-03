<h2 class="col-12 float-left">
  <div class="float-left">Sindicantes Cadastrados</div>
  <div class="float-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroSindicante">
      Cadastrar <i class="fa fa-user-plus" aria-hidden="true"></i>
    </button>
  </div>
</h2>
<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>
<table class="table table-bordered table-striped table-dark table-hover">
  <thead class="thead-dark">
    <tr>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Cadastro</td>
      <td>Status</td>
    </tr>
  </thead>
  <tbody>
    <?php
      "<br><pre>".
      $QueryBuscarSindicantes = "
        SELECT * FROM 
            tb_sindicantes sindicante
        INNER JOIN tb_usuarios usuarios
            ON sindicante.id_usuario = usuarios.id_usuario
      ";
      "</pre>";
      $ExeQrBuscarSindicantes = mysqli_query($connection, $QueryBuscarSindicantes);
      $RowQrBuscarSindicantes = mysqli_num_rows($ExeQrBuscarSindicantes);

      if( $RowQrBuscarSindicantes >= 1 ){
        while( $ReturnSindicante = mysqli_fetch_assoc($ExeQrBuscarSindicantes) ){
          ?>
            <tr>
              <td><?php echo $ReturnSindicante['nome_usuario']?></td>
              <td><?php echo $ReturnSindicante['email_usuario']?></td>
              <td>
                <a 
                  href="?Page=Sindicantes&Editar=<?php echo $ReturnSindicante['id_sindicante']?>"
                  alt="Editar Cadastro"
                  title="Editar Cadastro"
                  class="text-white"
                >
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <a 
                  href="?Page=Relatorios&Sindicante=<?php echo $ReturnSindicante['id_sindicante']?>"
                  alt="Ver Relatórios do Sindicante <?php echo $ReturnSindicante['nome_usuario']?>"
                  title="Ver Relatórios do Sindicante <?php echo $ReturnSindicante['nome_usuario']?>"
                  class="text-white"
                >
                  <i class="fa fa-file" aria-hidden="true"></i>
                </a>
              </td>
              <td>
                <?php
                  if( $ReturnSindicante['usuario_status'] == 1 ){
                    //Sindicante Logado
                    ?>
                      <i class="fa fa-user-o" aria-hidden="true"></i> -
                      <i class="fa fa-circle text-success" aria-hidden="true"></i>
                    <?php
                  }else{
                    //Sindicante Deslogado
                    ?>
                      <i class="fa fa-user-o" aria-hidden="true"></i> -
                      <i class="fa fa-circle text-danger" aria-hidden="true"></i>
                    <?php
                  }
                ?>
              </td>
            </tr>
          <?php
        }
      }

    ?>
      
  </tbody>
</table>


<?php
  // echo md5("c2assessoria");
  if( isset( $_POST['Cadastro'] ) ){
    include_once "Cadastro/index.php";
  }
?>