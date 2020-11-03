<script src="js/Procedencia-Veiculo/Procedencia-Veiculo.js"></script>
<script>
$(function(){
    $('#button-upload1').on('click', function() {
        $('#print_foto_comprovante1').trigger('click');
    });

    $('#print_foto_comprovante1').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_comprovante1').val(fileName);
    });

    $('#button-upload2').on('click', function() {
        $('#print_foto_comprovante2').trigger('click');
    });

    $('#print_foto_comprovante2').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_comprovante2').val(fileName);
    });

    $('#button-upload3').on('click', function() {
        $('#print_foto_comprovante3').trigger('click');
    });

    $('#print_foto_comprovante3').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_comprovante3').val(fileName);
    });
});
</script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar" 
  method="post"
  enctype="multipart/form-data"
  class="col-12"
>
  <div class="form-group row">
    <label 
      for="procedente_veiculo" 
      class="col-sm-6 col-md-3 col-form-label col-form-label-lg"
      style="margin-top:10px"
    >Procedente (Compra):     
    </label>

    <div class="col-sm-6 col-md-3" style="margin-top: 10px">
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
    </div>


    <div class="col-sm-12 col-md-6" id="return_comprovante" style="margin-top:10px;">
      <!-- Retornar campo para escolher comprovante caso tenha informado procedente -->
      
    </div>

    <div class="col-12" id="return_foto_comprovante" style="display:none; margin-top:10px">
      <label 
        for="foto_comprovante1" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print1: 
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input 
          type="file" 
          name="print_foto_comprovante1" 
          id="print_foto_comprovante1"
          style="display: none;"
        >
        <input 
          type="text" 
          name="file_foto_comprovante1" 
          id="file_foto_comprovante1"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button 
          type="button" 
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload1"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>



      <label 
        for="foto_comprovante2" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print2: 
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input 
          type="file" 
          name="print_foto_comprovante2" 
          id="print_foto_comprovante2"
          style="display: none;"
        >
        <input 
          type="text" 
          name="file_foto_comprovante2" 
          id="file_foto_comprovante2"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button 
          type="button" 
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload2"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>


      <label 
        for="foto_comprovante3" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print3: 
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input 
          type="file" 
          name="print_foto_comprovante3" 
          id="print_foto_comprovante3"
          style="display: none;"
        >
        <input 
          type="text" 
          name="file_foto_comprovante3" 
          id="file_foto_comprovante3"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button 
          type="button" 
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload3"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>
    </div>

  </div>






  <div class="clearfix" style="margin: 1rem 0"></div>
  <hr>
  
  <div class="form-group row">
    <div class="col-6">
      <a 
        href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
        class="btn btn-outline-danger btn-lg btn-block"
      >
        Voltar
      </a>
    </div>

    <div class="col-6">
      <button 
        type="submit"
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>
</form>