$(function(){
  //mobilidade_urbana_img1
  $('#button-upload-mobilidade_urbana_img1').on('click', function() {
    $('#print_mobilidade_urbana_img1').trigger('click');
  });

  $('#print_mobilidade_urbana_img1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_mobilidade_urbana_img1').val(fileName);
  });

  //mobilidade_urbana_img2
  $('#button-upload-mobilidade_urbana_img2').on('click', function() {
    $('#print_mobilidade_urbana_img2').trigger('click');
  });

  $('#print_mobilidade_urbana_img2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_mobilidade_urbana_img2').val(fileName);
  });

  //mobilidade_urbana_img3
  $('#button-upload-mobilidade_urbana_img3').on('click', function() {
    $('#print_mobilidade_urbana_img3').trigger('click');
  });

  $('#print_mobilidade_urbana_img3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_mobilidade_urbana_img3').val(fileName);
  });

  //mobilidade_urbana_img4
  $('#button-upload-mobilidade_urbana_img4').on('click', function() {
    $('#print_mobilidade_urbana_img4').trigger('click');
  });

  $('#print_mobilidade_urbana_img4').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_mobilidade_urbana_img4').val(fileName);
  });

  //mobilidade_urbana_img5
  $('#button-upload-mobilidade_urbana_img5').on('click', function() {
    $('#print_mobilidade_urbana_img5').trigger('click');
  });

  $('#print_mobilidade_urbana_img5').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_mobilidade_urbana_img5').val(fileName);
  });
});

//Add fotos
$(function(){
  var add_foto2 = $('#add_foto2');
  var add_foto3 = $('#add_foto3');
  var add_foto4 = $('#add_foto4');
  var add_foto5 = $('#add_foto5');

  $('#foto2').attr('style', 'display: none');
  $('#foto3').attr('style', 'display: none');
  $('#foto4').attr('style', 'display: none');
  $('#foto5').attr('style', 'display: none');

  add_foto2.on('click', function(){
    $('#foto2').attr('style', 'display: block');
  });
  
  add_foto3.on('click', function(){
    $('#foto3').attr('style', 'display: block');
  });

  add_foto4.on('click', function(){
    $('#foto4').attr('style', 'display: block');
  });

  add_foto5.on('click', function(){
    $('#foto5').attr('style', 'display: block');
  });
});