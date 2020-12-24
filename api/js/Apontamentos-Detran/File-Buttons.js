$(function(){
  $('#button-upload1').on('click', function() {
      $('#print_foto1').trigger('click');
  });

  $('#print_foto1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto1').val(fileName);
  });


  $('#button-upload2').on('click', function() {
      $('#print_foto2').trigger('click');
  });

  $('#print_foto2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto2').val(fileName);
  });

  $('#button-upload3').on('click', function() {
      $('#print_foto3').trigger('click');
  });

  $('#print_foto3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto3').val(fileName);
  });


  //Vistorias
  $('#button-upload_v1').on('click', function() {
      $('#print_foto_vistoria_cautelar1').trigger('click');
  });

  $('#print_foto_vistoria_cautelar1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_vistoria_cautelar1').val(fileName);
  });

  $('#button-upload_v2').on('click', function() {
      $('#print_foto_vistoria_cautelar2').trigger('click');
  });

  $('#print_foto_vistoria_cautelar2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_vistoria_cautelar2').val(fileName);
  });

  $('#button-upload_v3').on('click', function() {
      $('#print_foto_vistoria_cautelar3').trigger('click');
  });

  $('#print_foto_vistoria_cautelar3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_vistoria_cautelar3').val(fileName);
  });
});