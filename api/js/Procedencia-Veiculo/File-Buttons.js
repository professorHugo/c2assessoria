$(function(){
  $('#button-upload1').on('click', function() {
      $('#print_foto_comprovante1').trigger('click');
  });

  $('#print_foto_comprovante1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_comprovante1').val(fileName);
  });

  $('#button-upload2').on('click', function() {
      $('#print_foto_comprovante2').trigger('click');
  });

  $('#print_foto_comprovante2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_comprovante2').val(fileName);
  });

  $('#button-upload3').on('click', function() {
      $('#print_foto_comprovante3').trigger('click');
  });

  $('#print_foto_comprovante3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_comprovante3').val(fileName);
  });
});