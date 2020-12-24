<select 
  name="procedente_veiculo" 
  id="procedente_veiculo" 
  class="form-control form-control-lg"
  reuire
  onchange="escolhaProcedente();"
>
  <option value="" selected disabled>Escolha</option>
  <?php
    $QueryBuscarProcedentes = "SELECT * FROM tb_tipos_procedentes WHERE ativacao = '1'";
    $ExeQrBuscarProcedentes = mysqli_query($connection, $QueryBuscarProcedentes);
    if( mysqli_num_rows($ExeQrBuscarProcedentes) > 0 ){
      while($ReturnProcedente = mysqli_fetch_assoc($ExeQrBuscarProcedentes)){
        $IdProcedente = $ReturnProcedente['id_procedente'];
        $Procedente = $ReturnProcedente['descricao_procedente'];
        ?>
          <option value="<?php echo $IdProcedente ?>">
            <?php echo $Procedente ?>
          </option>
        <?php
      }
    }else{

    }
  ?>
  <option value="99">Não quis informar</option>
</select>

<input type="hidden" name="">