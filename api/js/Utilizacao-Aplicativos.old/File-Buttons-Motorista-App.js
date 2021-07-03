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

//Add fotos
$(function(){

  $('#foto1').attr('style', 'display: none');
  $('#foto2').attr('style', 'display: none');
  $('#foto3').attr('style', 'display: none');
  $('#foto4').attr('style', 'display: none');
  $('#foto5').attr('style', 'display: none');
  $('#foto6').attr('style', 'display: none');
  $('#return_motorista_aplicativo').attr('style', 'display: none');
  
});

function selectMotoristaApp(){
  var motorista_aplicativo = $('#motorista_aplicativo').val();

  if( motorista_aplicativo != 2 ){
    $('#return_motorista_aplicativo').attr('style', 'display: block');
    $('#foto1').attr('style', 'display: none');


    

  }else {
    $('#return_motorista_aplicativo').attr('style', 'display: none');
    $('#foto1').attr('style', 'display: none');

    var add_foto2 = $('#add_foto2');
    var add_foto3 = $('#add_foto3');
    var add_foto4 = $('#add_foto4');
    var add_foto5 = $('#add_foto5');
    var add_foto6 = $('#add_foto6');
  
    add_foto2.on('click', function(){
      $('#foto2').attr('style', 'display: none');
    });
    
    add_foto3.on('click', function(){
      $('#foto3').attr('style', 'display: none');
    });
  
    add_foto4.on('click', function(){
      $('#foto4').attr('style', 'display: none');
    });
  
    add_foto5.on('click', function(){
      $('#foto5').attr('style', 'display: none');
    });

    add_foto6.on('click', function(){
      $('#foto6').attr('style', 'display: none');
    });
  }
}

function apresentouComprovante(){
  var apresentou_comprovante = $('#apresentou_comprovante');

  apresentou_comprovante.on('change', function(){
    apresentou_comprovante = $(this).val();
    console.log(apresentou_comprovante);
  });

  if( apresentou_comprovante = 1 ){
    $('#return_apresentou_comprovante').attr('style', 'display: block');
    $('#foto1').attr('style', 'display: block;width:100%;float:left');

    var add_foto2 = $('#add_foto2');
    var add_foto3 = $('#add_foto3');
    var add_foto4 = $('#add_foto4');
    var add_foto5 = $('#add_foto5');
    var add_foto6 = $('#add_foto6');
  
    add_foto2.on('click', function(){
      $('#foto2').attr('style', 'display: block;width:100%;float:left');
    });
    
    add_foto3.on('click', function(){
      $('#foto3').attr('style', 'display: block;width:100%;float:left');
    });
  
    add_foto4.on('click', function(){
      $('#foto4').attr('style', 'display: block;width:100%;float:left');
    });
  
    add_foto5.on('click', function(){
      $('#foto5').attr('style', 'display: block;width:100%;float:left');
    });

    add_foto6.on('click', function(){
      $('#foto6').attr('style', 'display: block;width:100%;float:left');
    });
  }else{
    $('#return_apresentou_comprovante').attr('style', 'display: none');
    $('#foto1').attr('style', 'display: none');

    var add_foto2 = $('#add_foto2');
    var add_foto3 = $('#add_foto3');
    var add_foto4 = $('#add_foto4');
    var add_foto5 = $('#add_foto5');
    var add_foto6 = $('#add_foto6');
  
    add_foto2.on('click', function(){
      $('#foto2').attr('style', 'display: none');
    });
    
    add_foto3.on('click', function(){
      $('#foto3').attr('style', 'display: none');
    });
  
    add_foto4.on('click', function(){
      $('#foto4').attr('style', 'display: none');
    });
  
    add_foto5.on('click', function(){
      $('#foto5').attr('style', 'display: none');
    });

    add_foto6.on('click', function(){
      $('#foto6').attr('style', 'display: none');
    });
  }
}