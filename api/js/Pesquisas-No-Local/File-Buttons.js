$(function(){
  //Declaração do Proprietário Anterior
  $('#button-img_evento1').on('click', function() {
    $('#print_foto_img_evento1').trigger('click');
  });

  $('#print_foto_img_evento1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_img_evento1').val(fileName);
  });

  $('#button-img_evento2').on('click', function() {
    $('#print_foto_img_evento2').trigger('click');
  });

  $('#print_foto_img_evento2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_img_evento2').val(fileName);
  });

  $('#button-img_evento3').on('click', function() {
    $('#print_foto_img_evento3').trigger('click');
  });

  $('#print_foto_img_evento3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_img_evento3').val(fileName);
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
      $('#print_foto_documento_proprietario3').trigger('click');
  });

  $('#print_foto_documento_proprietario3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_proprietario3').val(fileName);
  });
});