<?php
echo "<br>Prontuário: " . $_FILES['print_prontuario_associado']['name'];
echo "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

if( is_dir($PastaAssociado) ){
  //Diretório já existe
  $extensao = pathinfo( $_FILES['print_prontuario_associado']['name'] );
  echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
  echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
  echo "<br>Nome do arquivo: " . $Prontuario = "Prontuario_DETRAN_Associado".$extensao;

  echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Prontuario;

  if( move_uploaded_file( $_FILES['print_prontuario_associado']['tmp_name'], $target_file ) ){
    echo "<br>Arquivo carregado com sucesso";

    //Verificar cadastro da foto
    include "Query-Buscar-Prontuario.php";

    if( $RowQrBuscarProntuario < 1 ){
      //Cadastrar foto no Banco de dados
      include "Query-Cadastrar-Prontuario.php";

      if( $ExeQrCadastrarFotoProntuario ){
        echo "<br>Foto do Prontuário do associado cadastrada";
        
        //Atualizar o cadastro do Associado com o prontuário
        include "Query-Buscar-Prontuario.php";

        if( $RowQrBuscarProntuario = 1 ){
          while( $ReturnProntuario = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
            $IdFoto = $ReturnProntuario['id_foto'];
          }
          include "Update-CNH-Associado.php";
        }

      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }

    }else{
      echo "<br>A Foto $Prontuario já tem cadastro";
      //Atualizar o cadastro do Associado com o prontuário
      include "Query-Buscar-Prontuario.php";

      if( $RowQrBuscarProntuario = 1 ){
        while( $ReturnProntuario = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
          $IdFoto = $ReturnProntuario['id_foto'];
        }
        include "Update-CNH-Associado.php";
      }
    }
  }
}