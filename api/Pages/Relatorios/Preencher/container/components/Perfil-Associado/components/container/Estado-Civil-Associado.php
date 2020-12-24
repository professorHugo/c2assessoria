<select 
  name="estado_civil_associado" 
  id="estado_civil_associado" 
  class="form-control form-control-lg" 
  required
>
  <?php
    
    "<br><pre>" . 
    $QueryBuscarAssociado = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE 
        protocolo_evento = '$Protocolo' &&
        perfil_salvo = 1
    ";
      "</pre>";
    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
    if( $RowQrBuscarAssociado = 1 ){
      while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
        $CivilAssociado = $ReturnAssociado['civil_associado'];
      }
    }
    
    if( $CivilAssociado != NULL ){
      
      ?>
        <option value="<?php echo $CivilAssociado?>">
          <?php 
            
            $QueryBuscarDescricaoCivil = "
              SELECT * FROM tb_tipos_civil WHERE id_civil = '$CivilAssociado'
            ";
            $ExeQrBuscarDescricaoCivil = mysqli_query($connection, $QueryBuscarDescricaoCivil);
            while( $ReturnCivil = mysqli_fetch_assoc($ExeQrBuscarDescricaoCivil) ){
              echo $ReturnCivil['descricao_civil'];
            }
          ?>
        </option>
      <?php
      $QueryBuscarEstadoCivil = "
        SELECT * FROM tb_tipos_civil 
        WHERE 
          ativacao = '1' &&
          id_civil != '$CivilAssociado'
      ";
      $ExeQrBuscarEstadoCivil = mysqli_query($connection, $QueryBuscarEstadoCivil);
      $RowQrBuscarEstadoCivil = mysqli_num_rows($ExeQrBuscarEstadoCivil);

      if( $RowQrBuscarEstadoCivil > 0 ){
        
        while( $EstadoCivil = mysqli_fetch_assoc($ExeQrBuscarEstadoCivil) ){
          echo $DescricaoCivil = $EstadoCivil['descricao_civil'];
          ?>
            <option value="<?php echo $EstadoCivil['id_civil']?>">
              <?php echo $EstadoCivil['descricao_civil']?>
            </option>
          <?php
        }
      }else{
        ?>
          <option value="" disabled selected>Estados Civis ainda não cadastrados</option>
        <?php
      }
    }else{
      $QueryBuscarEstadoCivil = "SELECT * FROM tb_tipos_civil WHERE ativacao = '1'";
      $ExeQrBuscarEstadoCivil = mysqli_query($connection, $QueryBuscarEstadoCivil);
      $RowQrBuscarEstadoCivil = mysqli_num_rows($ExeQrBuscarEstadoCivil);

      if( $RowQrBuscarEstadoCivil > 0 ){
        ?>
          <option value="" disabled selected>Escolha</option>
        <?php
        while( $EstadoCivil = mysqli_fetch_assoc($ExeQrBuscarEstadoCivil) ){
          ?>
            <option value="<?php echo $EstadoCivil['id_civil']?>">
              <?php echo $EstadoCivil['descricao_civil']?>
            </option>
          <?php
        }
      }else{
        ?>
          <option value="" disabled selected>Estados Civis ainda não cadastrados</option>
        <?php
      }
    }
  ?>
</select> 