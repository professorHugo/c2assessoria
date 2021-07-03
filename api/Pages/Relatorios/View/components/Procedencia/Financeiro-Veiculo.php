<div class="col-12" id="Dados-Financeiro-Veiculo">
  <h3 class="rotulos">Status Financeiro</h3>

  <div class="col-4 float-left">
    <b>Instituição: </b><br>
    <?php echo $InstituicaoFinanceiro ?>
  </div>
  <div class="col-2 float-left">
    <b>Parcelas: </b><br>
    <?php echo "$ParcelasPagasFinanceiro / $TotalParcelasFinanceiro" ?>
  </div>
  <div class="col-3 float-left">
    <b>Valor  por parcela: </b><br>
    <?php echo $ValorParcelaFinanceiro?>
  </div>

  <?php 
    if( $SituacaoFinanceiro == 2 ){
      ?>
        <div class="col-3 float-left">
          <b>Parcelas inadimplentes: </b><br>
          <?php echo $ParcelasInadimplentes ?>
        </div>
      <?php
    }
  ?>
</div>

<div class="col-12 space-3 float-left" id="Fotos-Financeiro">
  <?php include 'components/Fotos-Financeiro.php' ?>
</div>