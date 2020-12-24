$(function(){
  //Declaração do Proprietário Anterior
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
      $('#print_foto_documento_proprietario_anterior1').trigger('click');
  });

  $('#print_foto_documento_proprietario_anterior1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_proprietario_anterior1').val(fileName);
  });

  $('#button-upload_documento2').on('click', function() {
      $('#print_foto_documento_proprietario_anterior2').trigger('click');
  });

  $('#print_foto_documento_proprietario_anterior2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_proprietario_anterior2').val(fileName);
  });
});