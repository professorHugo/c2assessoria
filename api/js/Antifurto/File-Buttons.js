$(function(){

  //Declaração do Proprietário Anterior
  $('#button-upload-comprovante_instalacao1').on('click', function() {
    $('#print_foto_comprovante_instalacao1').trigger('click');
  });

  $('#print_foto_comprovante_instalacao1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_comprovante_instalacao1').val(fileName);
  });

  $('#button-upload-comprovante_instalacao2').on('click', function() {
    $('#print_foto_comprovante_instalacao2').trigger('click');
  });

  $('#print_foto_comprovante_instalacao2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_comprovante_instalacao2').val(fileName);
  });


  //Telemetria
  $('#button-upload-telemetria_rastreador1').on('click', function() {
    $('#print_foto_telemetria_rastreador1').trigger('click');
  });

  $('#print_foto_telemetria_rastreador1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_telemetria_rastreador1').val(fileName);
  });

  $('#button-upload-telemetria_rastreador2').on('click', function() {
    $('#print_foto_telemetria_rastreador2').trigger('click');
  });

  $('#print_foto_telemetria_rastreador2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_telemetria_rastreador2').val(fileName);
  });
  
  $('#button-upload-telemetria_rastreador3').on('click', function() {
    $('#print_foto_telemetria_rastreador3').trigger('click');
  });

  $('#print_foto_telemetria_rastreador3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_telemetria_rastreador3').val(fileName);
  });
});