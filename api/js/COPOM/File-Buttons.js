$(function(){
  //copom_img1
  $('#button-upload-copom_img1').on('click', function() {
    $('#print_copom_img1').trigger('click');
  });

  $('#print_copom_img1').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_copom_img1').val(fileName);
  });

  //copom_img2
  $('#button-upload-copom_img2').on('click', function() {
    $('#print_copom_img2').trigger('click');
  });

  $('#print_copom_img2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_copom_img2').val(fileName);
  });

  //copom_img3
  $('#button-upload-copom_img3').on('click', function() {
    $('#print_copom_img3').trigger('click');
  });

  $('#print_copom_img3').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_copom_img3').val(fileName);
  });

  //copom_img4
  $('#button-upload-copom_img4').on('click', function() {
    $('#print_copom_img4').trigger('click');
  });

  $('#print_copom_img4').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_copom_img4').val(fileName);
  });

  //copom_img5
  $('#button-upload-copom_img5').on('click', function() {
    $('#print_copom_img5').trigger('click');
  });

  $('#print_copom_img5').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_copom_img5').val(fileName);
  });
});

//Add fotos
$(function(){

  $('#foto1').attr('style', 'display: none');
  $('#foto2').attr('style', 'display: none');
  $('#foto3').attr('style', 'display: none');
  $('#foto4').attr('style', 'display: none');
  $('#foto5').attr('style', 'display: none');
  
});

function selectCopom(){
  var comunicado_copom = $('#comunicado_copom').val();

  if( comunicado_copom != 3 ){
    $('#print_copom_exibir').attr('style', 'display: block');

    var print_copom = $('#print_copom').val();

    if( print_copom == 1 ){
      $('#registro').attr('style', 'display: block');
      $('#foto1').attr('style', 'display: block');

      var add_foto2 = $('#add_foto2');
      var add_foto3 = $('#add_foto3');
      var add_foto4 = $('#add_foto4');
      var add_foto5 = $('#add_foto5');
    
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
    }else{
      $('#foto1').attr('style', 'display: none');

      var add_foto2 = $('#add_foto2');
      var add_foto3 = $('#add_foto3');
      var add_foto4 = $('#add_foto4');
      var add_foto5 = $('#add_foto5');
    
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
    }

  }else {
    $('#print_copom_exibir').attr('style', 'display: none');
    $('#foto1').attr('style', 'display: none');

    var add_foto2 = $('#add_foto2');
    var add_foto3 = $('#add_foto3');
    var add_foto4 = $('#add_foto4');
    var add_foto5 = $('#add_foto5');
  
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
  }
}

function divergenciaRegistro(){
  var divergencia_registro = $('#divergencia_registro').val();
  if( divergencia_registro == 1 ){
    $('#texto_divergencia_exibir').attr('style', 'display: block');
  }else{
    $('#texto_divergencia_exibir').attr('style', 'display: none');
  }
}