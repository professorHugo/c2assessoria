$(function(){
  //Img 1
  $('#button-upload-comprovante_motorista_app_img1').on('click', function() {
    $('#print_comprovante_motorista_app_img1').trigger('click');
  });

  $('#print_comprovante_motorista_app_img1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img1').val(fileName);
  });


  //Img 2
  $('#button-upload-comprovante_motorista_app_img2').on('click', function() {
    $('#print_comprovante_motorista_app_img2').trigger('click');
  });

  $('#print_comprovante_motorista_app_img2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img2').val(fileName);
  });

  //Img 3
  $('#button-upload-comprovante_motorista_app_img3').on('click', function() {
    $('#print_comprovante_motorista_app_img3').trigger('click');
  });

  $('#print_comprovante_motorista_app_img3').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img3').val(fileName);
  });

  //Img 4
  $('#button-upload-comprovante_motorista_app_img4').on('click', function() {
    $('#print_comprovante_motorista_app_img4').trigger('click');
  });

  $('#print_comprovante_motorista_app_img4').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img4').val(fileName);
  });

  //Img 5
  $('#button-upload-comprovante_motorista_app_img5').on('click', function() {
    $('#print_comprovante_motorista_app_img5').trigger('click');
  });

  $('#print_comprovante_motorista_app_img5').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img5').val(fileName);
  });

  //Img 6
  $('#button-upload-comprovante_motorista_app_img6').on('click', function() {
    $('#print_comprovante_motorista_app_img6').trigger('click');
  });

  $('#print_comprovante_motorista_app_img6').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_comprovante_motorista_app_img6').val(fileName);
  });
});