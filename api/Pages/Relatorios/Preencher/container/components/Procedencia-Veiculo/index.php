<script src="js/Procedencia-Veiculo/Procedencia-Veiculo.js"></script>
<script src="js/Procedencia-Veiculo/File-Buttons.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Procedencia-Veiculo&Salvar" 
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

    <?php include 'components/container/Dados-Associado.php'?>

    <div class="col-sm-6 col-md-3" style="margin-top: 10px">
      <?php include 'components/container/Select-Procedente.php' ?>
    </div>


    <div class="col-sm-12 col-md-6" id="return_comprovante" style="margin-top:10px;">
      <!-- Retornar campo para escolher comprovante caso tenha informado procedente -->
    </div>

    <div class="col-12" id="return_foto_comprovante" style="display:none; margin-top:10px">
      <?php include 'components/container/Foto-Comprovante.php'?>
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
        name="Salvar"
      >
        Salvar
      </button>
    </div>
  </div>
</form>

<?php 
if( isset($_POST['Salvar']) || isset($_GET['Salvar']) ){
  include 'components/Salvar.php';
  if( $SysMode == 2 ){
    include 'components/container/Modal-Procedencia-Salva.php';
  }
}