<?php
if( isset($_GET['Vistoria']) ){
  $Vistoria = $_GET['Vistoria'];

  if( $Vistoria == 1 ){
    ?>
      <div
        class="col-5 col-md-2 custom-control custom-switch float-left"
        style="padding-top: 20px"
      >

        <input
          type="checkbox"
          name="vistoria_aprovada"
          id="vistoria_aprovada"
          class="custom-control-input"
        >
        <label for="vistoria_aprovada" class="custom-control-label">Vist. Aprovada</label>

      </div>


      <div class="col-7 col-md-4 float-left">

        <label
          for="data_vistoria"
          class="col-3 col-form-label col-form-label-lg float-left"
          style="margin-top: 10px"
        >Data:
        </label>
        <div class="col-9 float-left" style="margin-top: 10px">
          <input
            type="date"
            name="data_vistoria"
            id="data_vistoria"
            class="form-control form-control-lg"
            style="width:100%; margin-left: .6rem"
          >
        </div>

      </div>

      <!-- Escolha Vistoria -->
      <label
        for="img_vistoria"
        class="col-6 col-md-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >Imagens da Vistoria:
      </label>
      <div class="col-6 col-md-3 float-left" style="margin-top: 10px">
        <select
          name="img_vistoria"
          id="img_vistoria"
          class="form-control form-control-lg"
          required
          onchange="vistoriaCautelarImg();"
        >
          <option value="" disabled selected>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    <?php
  }
}