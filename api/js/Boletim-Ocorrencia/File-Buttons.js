$(function(){
  //boletim_img1
  $('#button-upload-boletim_img1').on('click', function() {
    $('#print_boletim_img1').trigger('click');
  });

  $('#print_boletim_img1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img1').val(fileName);
  });

  //boletim_img2
  $('#button-upload-boletim_img2').on('click', function() {
    $('#print_boletim_img2').trigger('click');
  });

  $('#print_boletim_img2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img2').val(fileName);
  });

  //boletim_img3
  $('#button-upload-boletim_img3').on('click', function() {
    $('#print_boletim_img3').trigger('click');
  });

  $('#print_boletim_img3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img3').val(fileName);
  });

  //boletim_img4
  $('#button-upload-boletim_img4').on('click', function() {
    $('#print_boletim_img4').trigger('click');
  });

  $('#print_boletim_img4').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img4').val(fileName);
  });

  //boletim_img5
  $('#button-upload-boletim_img5').on('click', function() {
    $('#print_boletim_img5').trigger('click');
  });

  $('#print_boletim_img5').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img5').val(fileName);
  });

  //boletim_img6
  $('#button-upload-boletim_img6').on('click', function() {
    $('#print_boletim_img6').trigger('click');
  });

  $('#print_boletim_img6').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_boletim_img6').val(fileName);
  });
});

//Add fotos
$(function(){
  var add_foto2 = $('#add_foto2');
  var add_foto3 = $('#add_foto3');
  var add_foto4 = $('#add_foto4');
  var add_foto5 = $('#add_foto5');
  var add_foto6 = $('#add_foto6');

  $('#foto2').attr('style', 'display: none');
  $('#foto3').attr('style', 'display: none');
  $('#foto4').attr('style', 'display: none');
  $('#foto5').attr('style', 'display: none');
  $('#foto6').attr('style', 'display: none');

  add_foto2.on('click', function(){
    $('#foto2').attr('style', 'display: block; width:100%');
  });
  
  add_foto3.on('click', function(){
    $('#foto3').attr('style', 'display: block; width:100%');
  });

  add_foto4.on('click', function(){
    $('#foto4').attr('style', 'display: block; width:100%');
  });

  add_foto5.on('click', function(){
    $('#foto5').attr('style', 'display: block; width:100%');
  });

  add_foto6.on('click', function(){
    $('#foto6').attr('style', 'display: block; width:100%');
  });
});