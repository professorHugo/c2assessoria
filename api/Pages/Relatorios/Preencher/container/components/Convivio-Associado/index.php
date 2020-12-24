<script src="js/Convivio-Associado/index.js"></script>
<script src="js/Convivio-Associado/File-Buttons.js"></script>

<h3 class="col-12" style="border-bottom: 1px solid #ddd">Convívio do Associado: </h3>
<?php
  if( $SysMode == 1 ){
    //DEV
    include 'Tela-DEV.php';
  }else{
    //PROD
    include 'Tela-PROD.php';
  }
?>