function divergenciaRegistro(){
  var divergencia_registro = $('#divergencia_registro').val();
  if( divergencia_registro == 1 ){
    $('#texto_divergencia_exibir').attr('style', 'display: block');
  }else{
    $('#texto_divergencia_exibir').attr('style', 'display: none');
  }
}