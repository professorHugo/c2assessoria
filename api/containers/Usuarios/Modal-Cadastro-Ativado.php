<script type="text/javascript">
  $(function(){
    $("body").addClass('modal-open');
  });
</script>

<div 
  class="modal fade show" 
  id="modalLoggedIn" 
  data-keyboard="false" 
  tabindex="-1" 
  role="dialog" 
  aria-labelledby="staticBackdropLabel" 
  aria-hidden="true" 
  style="
    display: block;
    background: var(--background-opacity)
  "
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastro Ativado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-md-12 text-center">
            <img src="img/ajax-loader.gif">
          </div>
            <div class="col-md-12 text-center">
              <p>
                Seu cadastro foi ativado com sucesso, você será redirecionado em: 
                <span id="sessao"></span>
              </p>
            </div>
        </div>
      <div class="modal-footer">
        <script type="text/javascript">

          var tempo = new Number();
          // Tempo em segundos
          tempo = 3;

          function startCountdown(){

            // Se o tempo não for zerado
            if((tempo - 1) >= 0){

              // Pega a parte inteira dos minutos
              var min = parseInt(tempo/60);
              // Calcula os segundos restantes
              var seg = tempo%60;

              // Formata o número menor que dez, ex: 08, 07, ...
              if(min < 10){
                min = "0"+min;
                min = min.substr(0, 2);
              }
              if(seg <=9){
                seg = "0"+seg;
              }

              // Cria a variável para formatar no estilo hora/cronômetro
              horaImprimivel = '00:' + min + ':' + seg;
              //JQuery pra setar o valor
              $("#sessao").html(horaImprimivel);

              // Define que a função será executada novamente em 1000ms = 1 segundo
              setTimeout('startCountdown()',1000);

              // diminui o tempo
              tempo--;

            // Quando o contador chegar a zero faz esta ação
            } else {
              window.open('?', '_self');
            }

          }

          // Chama a função ao carregar a tela
          startCountdown();

        </script>
      </div>
    </div>
  </div>
</div>