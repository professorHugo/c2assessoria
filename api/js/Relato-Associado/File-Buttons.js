$(function(){
  //Declaração do Condutor
  $('#button-upload_declaracao1').on('click', function() {
    $('#print_foto_declaracao_associado1').trigger('click');
  });

  $('#print_foto_declaracao_associado1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_associado1').val(fileName);
  });

  $('#button-upload_declaracao2').on('click', function() {
    $('#print_foto_declaracao_associado2').trigger('click');
  });

  $('#print_foto_declaracao_associado2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_associado2').val(fileName);
  });

  $('#button-upload_declaracao3').on('click', function() {
    $('#print_foto_declaracao_associado3').trigger('click');
  });

  $('#print_foto_declaracao_associado3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao_associado3').val(fileName);
  });


  //Foto do documento
  $('#button-upload_documento_associado_frente').on('click', function() {
      $('#print_foto_documento_associado_frente').trigger('click');
  });

  $('#print_foto_documento_associado_frente').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_associado_frente').val(fileName);
  });

  $('#button-upload_documento_associado_verso').on('click', function() {
      $('#print_foto_documento_associado_verso').trigger('click');
  });

  $('#print_foto_documento_associado_verso').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_associado_verso').val(fileName);
  });
});