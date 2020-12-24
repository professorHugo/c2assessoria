<script>
$(function(){
  //Foto do documentos
  $('#button_documento_frente').on('click', function() {
      $('#print_foto_documento_frente').trigger('click');
  });

  $('#print_foto_documento_frente').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_documento_frente').val(fileName);
  });

  //Foto do documentos
  $('#button_documento_verso').on('click', function() {
    $('#print_foto_documento_verso').trigger('click');
  });

  $('#print_foto_documento_verso').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_documento_verso').val(fileName);
  });
});
</script>

<div class="col-12" style="margin-top: 1.2rem">
  <h5 style="border-bottom: 1px solid #aaa">Documentos</h5>
</div>
<label 
  for="print_foto_documento_frente" 
  class="col-3 col-md-6 col-form-label col-form-label-lg float-left"
  style="margin-top: 10px"
>
  Frente: 
</label>
<div class="col-9 float-left" style="margin-top: 10px">
  <input 
    type="file" 
    name="print_foto_documento_frente" 
    id="print_foto_documento_frente"
    style="display: none;"
  >
  <input 
    type="text" 
    name="file_foto_documento_frente" 
    id="file_foto_documento_frente"
    placeholder="Escolha o arquivo"
    class="form-control form-control-lg col-9 float-left"
    readonly
  >
  <button 
    type="button" 
    class="btn-default form-control form-control-lg col-3 float-left"
    id="button_documento_frente"
  >
    <i class="fa fa-upload" aria-hidden="true"></i>
  </button>
</div>



<label 
  for="print_foto_documento_verso" 
  class="col-3 col-md-6 col-form-label col-form-label-lg float-left"
  style="margin-top: 10px"
>
  Verso: 
</label>
<div class="col-9 float-left" style="margin-top: 10px">
  <input 
    type="file" 
    name="print_foto_documento_verso" 
    id="print_foto_documento_verso"
    style="display: none;"
  >
  <input 
    type="text" 
    name="file_foto_documento_verso" 
    id="file_foto_documento_verso"
    placeholder="Escolha o arquivo"
    class="form-control form-control-lg col-9 float-left"
    readonly
  >
  <button 
    type="button" 
    class="btn-default form-control form-control-lg col-3 float-left"
    id="button_documento_verso"
  >
    <i class="fa fa-upload" aria-hidden="true"></i>
  </button>
</div>