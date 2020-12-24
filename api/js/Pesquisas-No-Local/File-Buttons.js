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


});