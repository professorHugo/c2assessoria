<div class="col-12" id="Dados-Vistoria-Cautelar">
  <h3 class="rotulos">Vistoria Cautelar</h3>

  <div class="col-4 float-left">
    <b>Estado: </b><br>
    <?php echo $EstadoDetran ?>
  </div>
  <div class="col-4 float-left">
    <b>Vistoria Aprovada: </b><br>
    <?php echo $VistoriaAprovada ?>
  </div>
  <div class="col-4 float-left">
    <b>Data da Vistoria: </b><br>
    <?php echo $DataVistoria?>
  </div>
</div>

<div class="col-12 space-3 float-left" id="Fotos-Vistoria">
  <?php include 'components/Fotos-Vistoria.php' ?>
</div>