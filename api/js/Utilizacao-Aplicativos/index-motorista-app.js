function selectMotoristaApp(){
  var motorista_aplicativo =  $('#motorista_aplicativo').val(),
  return_motorista_aplicativo = document.getElementById('return_motorista_aplicativo');

  if( motorista_aplicativo == 1 ){
    XMLmotorista_aplicativo = new XMLHttpRequest();

    return_motorista_aplicativo.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    XMLmotorista_aplicativo.onreadystatechange = function(){
      if( XMLmotorista_aplicativo.readyState == 4 && XMLmotorista_aplicativo.status == 200 ){
        return_motorista_aplicativo.innerHTML = XMLmotorista_aplicativo.responseText;
      }
    };

    XMLmotorista_aplicativo.open(
      'GET',
      'Pages/Relatorios/Preencher/container/components/Utilizacao-Aplicativos/components/containers/Apresentou-Cadastro-Corridas?MotoristaApp=' + motorista_aplicativo,
      true
    );
    XMLmotorista_aplicativo.send(null);

  }else{

    //Não é motorista por aplicativo
    //alert('Retormar o Ajax vazio e remover os campos de imagem da tela, junto com as imagens adicionadas');
    XMLmotorista_aplicativo = new XMLHttpRequest();

    return_motorista_aplicativo.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

    XMLmotorista_aplicativo.onreadystatechange = function(){
      if( XMLmotorista_aplicativo.readyState == 4 && XMLmotorista_aplicativo.status == 200 ){
        return_motorista_aplicativo.innerHTML = XMLmotorista_aplicativo.responseText;
      }
    };

    XMLmotorista_aplicativo.open(
      'GET',
      'Pages/Relatorios/Preencher/container/components/Utilizacao-Aplicativos/components/containers/Apresentou-Cadastro-Corridas?MotoristaApp=' + motorista_aplicativo,
      true
    );
    XMLmotorista_aplicativo.send(null);


    //Remover imagem
    document.getElementById('print_comprovante_motorista_app_img1').value = '';
    document.getElementById('print_comprovante_motorista_app_img2').value = '';
    document.getElementById('print_comprovante_motorista_app_img3').value = '';
    document.getElementById('print_comprovante_motorista_app_img4').value = '';
    document.getElementById('print_comprovante_motorista_app_img5').value = '';
    document.getElementById('print_comprovante_motorista_app_img6').value = '';

    document.getElementById('file_comprovante_motorista_app_img1').value = '';
    document.getElementById('file_comprovante_motorista_app_img2').value = '';
    document.getElementById('file_comprovante_motorista_app_img3').value = '';
    document.getElementById('file_comprovante_motorista_app_img4').value = '';
    document.getElementById('file_comprovante_motorista_app_img5').value = '';
    document.getElementById('file_comprovante_motorista_app_img6').value = '';

    $('#return_apresentou_comprovante').attr('style', 'display: none');
    $('#foto1_motorista_app').attr('style', 'display: none');


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
    $('#foto1_motorista_app').attr('style', 'display: block;width:100%;float:left');

    var add_foto2_motorista_app = $('#add_foto2_motorista_app');
    var add_foto3_motorista_app = $('#add_foto3_motorista_app');
    var add_foto4_motorista_app = $('#add_foto4_motorista_app');
    var add_foto5_motorista_app = $('#add_foto5_motorista_app');
    var add_foto6_motorista_app = $('#add_foto6_motorista_app');
  
    add_foto2_motorista_app.on('click', function(){
      $('#foto2_motorista_app').attr('style', 'display: block;width:100%;float:left');
    });
    
    add_foto3_motorista_app.on('click', function(){
      $('#foto3_motorista_app').attr('style', 'display: block;width:100%;float:left');
    });
  
    add_foto4_motorista_app.on('click', function(){
      $('#foto4_motorista_app').attr('style', 'display: block;width:100%;float:left');
    });
  
    add_foto5_motorista_app.on('click', function(){
      $('#foto5_motorista_app').attr('style', 'display: block;width:100%;float:left');
    });

    add_foto6_motorista_app.on('click', function(){
      $('#foto6_motorista_app').attr('style', 'display: block;width:100%;float:left');
    });
  }else{
    $('#return_apresentou_comprovante').attr('style', 'display: none');
    $('#foto1_motorista_app').attr('style', 'display: none');

    var add_foto2_motorista_app = $('#add_foto2_motorista_app');
    var add_foto3_motorista_app = $('#add_foto3_motorista_app');
    var add_foto4_motorista_app = $('#add_foto4_motorista_app');
    var add_foto5_motorista_app = $('#add_foto5_motorista_app');
    var add_foto6_motorista_app = $('#add_foto6_motorista_app');
  
    add_foto2_motorista_app.on('click', function(){
      $('#foto2_motorista_app').attr('style', 'display: none');
    });
    
    add_foto3_motorista_app.on('click', function(){
      $('#foto3_motorista_app').attr('style', 'display: none');
    });
  
    add_foto4_motorista_app.on('click', function(){
      $('#foto4_motorista_app').attr('style', 'display: none');
    });
  
    add_foto5_motorista_app.on('click', function(){
      $('#foto5_motorista_app').attr('style', 'display: none');
    });

    add_foto6_motorista_app.on('click', function(){
      $('#foto6_motorista_app').attr('style', 'display: none');
    });
  }
}