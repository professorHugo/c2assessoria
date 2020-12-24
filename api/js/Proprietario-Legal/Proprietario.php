<?php
if( isset($_GET['Proprietario']) ){
  $Proprietario = $_GET['Proprietario'];

  if( $Proprietario == 2 ){
    ?>
    
      <label 
        for="nome_proprietario" 
        class="col-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >Nome:
      </label>

      <div class="col-9 float-left" style="margin-top:10px">
        <input 
          type="text" 
          name="nome_proprietario" 
          id="nome_proprietario" 
          class="form-control form-control-lg"
        >
      </div>

      <label 
        for="vinculo_proprietario" 
        class="col-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >Vínculo:
      </label>

      <div class="col-9 float-left" style="margin-top:10px">
        <input 
          type="text" 
          name="vinculo_proprietario" 
          id="vinculo_proprietario" 
          class="form-control form-control-lg"
          placeholder="Pai, Mãe, Irmão, Amigo, Etc."
          required
        >
      </div>

      <label 
        for="documento_veiculo" 
        class="col-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >CRV/DUT:
      </label>

      <div class="col-9 float-left" style="margin-top:10px">
        <select 
          type="text" 
          name="documento_veiculo" 
          id="documento_veiculo" 
          class="form-control form-control-lg"
          required
          onchange="CRV_DUT_Change();"
        >
          <option value="" disabled selected>Escolha</option>
          <option value="1">Em Branco</option>
          <option value="2">Preenchido</option>
        </select>
      </div>

    <?php
  }
}