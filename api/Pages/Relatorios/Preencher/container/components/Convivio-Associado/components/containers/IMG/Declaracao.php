<script>
$(function(){
  //Foto do documentos
  $('#button_upload1').on('click', function() {
      $('#print_foto_declaracao1').trigger('click');
  });

  $('#print_foto_declaracao1').on('change', function() {
      var fileName = $(this)[0].files[0].name;
      $('#file_foto_declaracao1').val(fileName);
  });

  //Foto do documentos
  $('#button_upload2').on('click', function() {
    $('#print_foto_declaracao2').trigger('click');
  });

  $('#print_foto_declaracao2').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file_foto_declaracao2').val(fileName);
  });
});
</script>

<div class="col-12" style="margin-top: 1.3rem">
  <h5 style="border-bottom: 1px solid #aaa">Fotos da Declaração</h5>
</div>
<label 
  for="foto_declaracao1" 
  class="col-3 col-md-6 col-form-label col-form-label-lg float-left"
  style="margin-top: 10px"
>
  Foto1: 
</label>
<div class="col-9 float-left" style="margin-top: 10px">
  <input 
    type="file" 
    name="print_foto_declaracao1" 
    id="print_foto_declaracao1"
    style="display: none;"
  >
  <input 
    type="text" 
    name="file_foto_declaracao1" 
    id="file_foto_declaracao1"
    placeholder="Escolha o arquivo"
    class="form-control form-control-lg col-9 float-left"
    readonly
  >
  <button 
    type="button" 
    class="btn-default form-control form-control-lg col-3 float-left"
    id="button_upload1"
  >
    <i class="fa fa-upload" aria-hidden="true"></i>
  </button>
</div>



<label 
  for="foto_declaracao2" 
  class="col-3 col-md-6 col-form-label col-form-label-lg float-left"
  style="margin-top: 10px"
>
  Foto2: 
</label>
<div class="col-9 float-left" style="margin-top: 10px">
  <input 
    type="file" 
    name="print_foto_declaracao2" 
    id="print_foto_declaracao2"
    style="display: none;"
  >
  <input 
    type="text" 
    name="file_foto_declaracao2" 
    id="file_foto_declaracao2"
    placeholder="Escolha o arquivo"
    class="form-control form-control-lg col-9 float-left"
    readonly
  >
  <button 
    type="button" 
    class="btn-default form-control form-control-lg col-3 float-left"
    id="button_upload2"
  >
    <i class="fa fa-upload" aria-hidden="true"></i>
  </button>
</div>