$(function(){
  $('#button-upload_1').on('click', function() {
      $('#print_foto_inadimplencia_1').trigger('click');
  });

  $('#print_foto_inadimplencia_1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_inadimplencia_1').val(fileName);
  });

  $('#button-upload_2').on('click', function() {
      $('#print_foto_inadimplencia_2').trigger('click');
  });

  $('#print_foto_inadimplencia_2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_inadimplencia_2').val(fileName);
  });

  $('#button-upload_3').on('click', function() {
      $('#print_foto_inadimplencia_3').trigger('click');
  });

  $('#print_foto_inadimplencia_3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_inadimplencia_3').val(fileName);
  });

  $('#button-upload_4').on('click', function() {
      $('#print_foto_inadimplencia_4').trigger('click');
  });

  $('#print_foto_inadimplencia_4').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_inadimplencia_4').val(fileName);
  });

  $('#button-upload_5').on('click', function() {
      $('#print_foto_inadimplencia_5').trigger('click');
  });

  $('#print_foto_inadimplencia_5').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_inadimplencia_5').val(fileName);
  });

});