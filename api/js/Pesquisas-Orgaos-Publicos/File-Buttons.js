$(function(){
  //pesquisas_img1
  $('#button-upload-pesquisas_img1').on('click', function() {
    $('#print_pesquisas_img1').trigger('click');
  });

  $('#print_pesquisas_img1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img1').val(fileName);
  });

  //pesquisas_img2
  $('#button-upload-pesquisas_img2').on('click', function() {
    $('#print_pesquisas_img2').trigger('click');
  });

  $('#print_pesquisas_img2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img2').val(fileName);
  });

  //pesquisas_img3
  $('#button-upload-pesquisas_img3').on('click', function() {
    $('#print_pesquisas_img3').trigger('click');
  });

  $('#print_pesquisas_img3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img3').val(fileName);
  });

  //pesquisas_img4
  $('#button-upload-pesquisas_img4').on('click', function() {
    $('#print_pesquisas_img4').trigger('click');
  });

  $('#print_pesquisas_img4').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img4').val(fileName);
  });

  //pesquisas_img5
  $('#button-upload-pesquisas_img5').on('click', function() {
    $('#print_pesquisas_img5').trigger('click');
  });

  $('#print_pesquisas_img5').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img5').val(fileName);
  });

  //pesquisas_img6
  $('#button-upload-pesquisas_img6').on('click', function() {
    $('#print_pesquisas_img6').trigger('click');
  });

  $('#print_pesquisas_img6').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img6').val(fileName);
  });

  //pesquisas_img7
  $('#button-upload-pesquisas_img7').on('click', function() {
    $('#print_pesquisas_img7').trigger('click');
  });

  $('#print_pesquisas_img7').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img7').val(fileName);
  });

  //pesquisas_img8
  $('#button-upload-pesquisas_img8').on('click', function() {
    $('#print_pesquisas_img8').trigger('click');
  });

  $('#print_pesquisas_img8').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img8').val(fileName);
  });

  //pesquisas_img9
  $('#button-upload-pesquisas_img9').on('click', function() {
    $('#print_pesquisas_img9').trigger('click');
  });

  $('#print_pesquisas_img9').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img9').val(fileName);
  });

  //pesquisas_img10
  $('#button-upload-pesquisas_img10').on('click', function() {
    $('#print_pesquisas_img10').trigger('click');
  });

  $('#print_pesquisas_img10').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img10').val(fileName);
  });

  //pesquisas_img11
  $('#button-upload-pesquisas_img11').on('click', function() {
    $('#print_pesquisas_img11').trigger('click');
  });

  $('#print_pesquisas_img11').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img11').val(fileName);
  });

  //pesquisas_img12
  $('#button-upload-pesquisas_img12').on('click', function() {
    $('#print_pesquisas_img12').trigger('click');
  });

  $('#print_pesquisas_img12').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_pesquisas_img12').val(fileName);
  });

});

//Add fotos
$(function(){
  var add_foto2 = $('#add_foto2');
  var add_foto3 = $('#add_foto3');
  var add_foto4 = $('#add_foto4');
  var add_foto5 = $('#add_foto5');
  var add_foto6 = $('#add_foto6');
  var add_foto7 = $('#add_foto7');
  var add_foto8 = $('#add_foto8');
  var add_foto9 = $('#add_foto9');
  var add_foto10 = $('#add_foto10');
  var add_foto11 = $('#add_foto11');
  var add_foto12 = $('#add_foto12');
  

  $('#foto2').attr('style', 'display: none');
  $('#foto3').attr('style', 'display: none');
  $('#foto4').attr('style', 'display: none');
  $('#foto5').attr('style', 'display: none');
  $('#foto6').attr('style', 'display: none');
  $('#foto7').attr('style', 'display: none');
  $('#foto8').attr('style', 'display: none');
  $('#foto9').attr('style', 'display: none');
  $('#foto10').attr('style', 'display: none');
  $('#foto11').attr('style', 'display: none');
  $('#foto12').attr('style', 'display: none');

  add_foto2.on('click', function(){
    $('#foto2').attr('style', 'display: block; width: 100%');
  });
  
  add_foto3.on('click', function(){
    $('#foto3').attr('style', 'display: block; width: 100%');
  });

  add_foto4.on('click', function(){
    $('#foto4').attr('style', 'display: block; width: 100%');
  });

  add_foto5.on('click', function(){
    $('#foto5').attr('style', 'display: block; width: 100%');
  });
  
  add_foto6.on('click', function(){
    $('#foto6').attr('style', 'display: block; width: 100%');
  });

  add_foto7.on('click', function(){
    $('#foto7').attr('style', 'display: block; width: 100%');
  });

  add_foto8.on('click', function(){
    $('#foto8').attr('style', 'display: block; width: 100%');
  });

  add_foto9.on('click', function(){
    $('#foto9').attr('style', 'display: block; width: 100%');
  });

  add_foto10.on('click', function(){
    $('#foto10').attr('style', 'display: block; width: 100%');
  });

  add_foto11.on('click', function(){
    $('#foto11').attr('style', 'display: block; width: 100%');
  });

  add_foto12.on('click', function(){
    $('#foto12').attr('style', 'display: block; width: 100%');
  });
});