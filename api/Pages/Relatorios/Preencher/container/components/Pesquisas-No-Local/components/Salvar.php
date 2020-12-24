<?php
  if( isset($_GET['SalvarImagens']) ){
    include 'Salvar/Salvar-Imagens-Local.php';
  }

  if( isset($_GET['SalvarEntrevistado']) ){
    include 'Salvar/Salvar-Entrevistado.php';
  }

  if( isset($_GET['Salvar-Sabedores']) ){
    include 'Salvar/Salvar-Sabedores.php';
  }

  //Update data de modificação do relatório
  include 'Update-Data-Modifica-Relatorio.php';