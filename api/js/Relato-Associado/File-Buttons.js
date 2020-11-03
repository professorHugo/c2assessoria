$(function(){
  //Declaração do Condutor
  $('#button-upload_declaracao1').on('click', function() {
    $('#print_foto_declaracao_condutor1').trigger('click');
  });

  $('#print_foto_declaracao_condutor1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_condutor1').val(fileName);
  });

  $('#button-upload_declaracao2').on('click', function() {
    $('#print_foto_declaracao_condutor2').trigger('click');
  });

  $('#print_foto_declaracao_condutor2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_condutor2').val(fileName);
  });

  $('#button-upload_declaracao3').on('click', function() {
    $('#print_foto_declaracao_condutor3').trigger('click');
  });

  $('#print_foto_declaracao_condutor3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_condutor3').val(fileName);
  });


  //Foto do documento
  $('#button-upload_documento_condutor_frente').on('click', function() {
      $('#print_foto_documento_condutor_frente').trigger('click');
  });

  $('#print_foto_documento_condutor_frente').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_condutor_frente').val(fileName);
  });

  $('#button-upload_documento_condutor_verso').on('click', function() {
      $('#print_foto_documento_condutor_verso').trigger('click');
  });

  $('#print_foto_documento_condutor_verso').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_condutor_verso').val(fileName);
  });
});