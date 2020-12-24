$(function(){
  $('#button-upload-associado1').on('click', function() {
      $('#print_prontuario_associado1').trigger('click');
  });

  $('#print_prontuario_associado1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_prontuario_associado1').val(fileName);
  });


  $('#button-upload-associado2').on('click', function() {
    $('#print_prontuario_associado2').trigger('click');
  });

  $('#print_prontuario_associado2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_prontuario_associado2').val(fileName);
  });
});