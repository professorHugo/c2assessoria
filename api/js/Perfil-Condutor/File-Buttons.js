$(function(){
  $('#button-upload-condutor1').on('click', function() {
      $('#print_prontuario_condutor1').trigger('click');
  });

  $('#print_prontuario_condutor1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_prontuario_condutor1').val(fileName);
  });


  $('#button-upload-condutor2').on('click', function() {
    $('#print_prontuario_condutor2').trigger('click');
  });

  $('#print_prontuario_condutor2').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_prontuario_condutor2').val(fileName);
  });
});