<script src="js/Pesquisas-No-Local/index.js"></script>
<script src="js/Pesquisas-No-Local/File-Buttons.js"></script>


<?php
  if( $SysMode == 1 ){
    //DEV
    include 'Tela-DEV.php';
  }else{
    //PROD
    include 'Tela-PROD.php';
  }
