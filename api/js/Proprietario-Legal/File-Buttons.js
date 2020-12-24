$(function(){
  $('#button-upload1').on('click', function() {
      $('#print_foto_frente_documento_veiculo').trigger('click');
  });

  $('#print_foto_frente_documento_veiculo').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_frente_documento_veiculo').val(fileName);
  });


  $('#button-upload2').on('click', function() {
      $('#print_foto_verso_documento_veiculo').trigger('click');
  });

  $('#print_foto_verso_documento_veiculo').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_verso_documento_veiculo').val(fileName);
  });


  //Declaração do Proprietário
  $('#button-upload_proprietario1').on('click', function() {
      $('#print_foto_declaracao_proprietario1').trigger('click');
  });

  $('#print_foto_declaracao_proprietario1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_declaracao_proprietario1').val(fileName);
  });

  $('#button-upload_proprietario2').on('click', function() {
      $('#print_foto_declaracao_proprietario2').trigger('click');
  });

  $('#print_foto_declaracao_proprietario2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_declaracao_proprietario2').val(fileName);
  });

  $('#button-upload_proprietario3').on('click', function() {
      $('#print_foto_declaracao_proprietario3').trigger('click');
  });

  $('#print_foto_declaracao_proprietario3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_declaracao_proprietario3').val(fileName);
  });


  //Foto do documento
  $('#button-upload_documento1').on('click', function() {
      $('#print_foto_documento_proprietario1').trigger('click');
  });

  $('#print_foto_documento_proprietario1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_proprietario1').val(fileName);
  });

  $('#button-upload_documento2').on('click', function() {
      $('#print_foto_documento_proprietario2').trigger('click');
  });

  $('#print_foto_documento_proprietario2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_proprietario2').val(fileName);
  });
});
