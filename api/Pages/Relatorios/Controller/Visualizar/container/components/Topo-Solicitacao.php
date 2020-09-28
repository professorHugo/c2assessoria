<h5 class="col-12" style="border-bottom: 1px solid #ddd">Sobre a solicitação</h5>
<div class="col-sm-12 col-md-4 float-left">
    Protocolo: <?php echo $Protocolo?>
</div>
<div class="col-sm-12 col-md-6 float-left">
    Solicitante: <?php echo $Solicitante?>
</div>
<div class="col-sm-12 col-md-2 float-left">
    Natureza: <?php echo $NaturezaEvento?>
</div>

<div class="col-12" style="margin-top: 1rem"></div>

<div class="col-sm-12 col-md-6 float-left">
    Nome do Associado: <?php echo $NomeAssociado?>
</div>
<div class="col-sm-12 col-md-6 float-left">
    Nome do Condutor: 
    <?php 
        if( $CondutorVeiculo == 1 ){
            echo $NomeAssociado;
        }else{
            echo $NomeCondutor;
        }
    ?>
</div>
<div class="col-12" style="margin-top: 3rem"></div>

<div class="col-12 float-left">
    <h5 clas="col-12" style="border-bottom: 1px solid #ddd">Veículo: </h5>
    <p class="col-sm-12 col-md-4 float-left">
        Marca: <?php echo $MarcaVeiculo ?>
    </p>
    <p class="col-sm-12 col-md-4 float-left">
        Modelo: <?php echo $ModeloVeiculo ?>
    </p>
    <p class="col-sm-12 col-md-4 float-left">
        Placa: <?php echo $PlacaVeiculo ?>
    </p>
</div>
<div class="col-12" style="margin-top: 1rem"></div>

<div class="col-12 float-left">
    <h5 clas="col-12" style="border-bottom: 1px solid #ddd">Sobre o Evento: </h5>
    <p class="col-sm-12 col-md-3 float-left">
        Data: <?php echo $DataEvento ?>
    </p>
    <p class="col-sm-12 col-md-3 float-left">
        Horário: <?php echo $HoraEvento ?>
    </p>
    <p class="col-sm-12 col-md-6 float-left">
        Local: 
        <?php 
            echo "$EnderecoEvento , $NumeroEvento ";
        ?>
    </p>
</div>