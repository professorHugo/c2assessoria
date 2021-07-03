<?php
// $arquivo = $mensagem;
$arquivo = "
  <html>
    <div style='background-color: #fff'>
      <div style='width: 100%; margin-bottom: 50px;'>
        <div style='width:100%'>
          <img src='https://c2assessoria.n2y.com.br/img/logo.png' style='width: 30%;float:left; margin-left: 35%'>
        </div>
        <div style='width: 100%; text-align:center;'>
          <h1 style='float:left;'>Você recebeu uma nova sindicância</h1>
        </div>
      </div>
      <div style='width: 100%; float:left; font-size:18pt; border-top: 1px solid #06f'>
        $mensagem
      </div>
      <div style='width: 100%; float:left; font-size: 14pt'>
        <p>
          Para acessar o sistema, acesse o link por 
          <a href='https://c2assessoria.n2y.com.br'>aqui</a>
        </p>
        <p>
          Caso não esteja conseguindo acessar através do link, copie e cole o seguinte URL no seu navegador: <br>
          https://c2assessoria.n2y.com.br
        </p>
      </div>
    </div>
  </html>
";