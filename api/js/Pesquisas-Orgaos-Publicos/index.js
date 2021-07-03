function MostrarPesquisasPC(){
  var orgaos_publicos_pc = document.getElementById('orgaos_publicos_pc').value,
      Resultados_Pesquisas_PC = document.getElementById('Resultados-Pesquisas-PC');
  
  xmlResultadosPesquisasPC = new XMLHttpRequest();
    
  
  Resultados_Pesquisas_PC.setAttribute('style', 'display: block');
  Resultados_Pesquisas_PC.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  xmlResultadosPesquisasPC.onreadystatechange = function(){
    if( xmlResultadosPesquisasPC.readyState == 4 && xmlResultadosPesquisasPC.status == 200 ){
      Resultados_Pesquisas_PC.innerHTML = xmlResultadosPesquisasPC.responseText;
    }
  };

  xmlResultadosPesquisasPC.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Pesquisas-Orgaos-Publicos/components/containers/Checkbox-PC.php?PC=' + orgaos_publicos_pc,
    true
  );
  xmlResultadosPesquisasPC.send(null);  
}


function MostrarPesquisasPM(){
  var orgaos_publicos_pm = document.getElementById('orgaos_publicos_pm').value,
      Resultados_Pesquisas_PM = document.getElementById('Resultados-Pesquisas-PM');
  
  xmlResultadosPesquisasPM = new XMLHttpRequest();
    
  
  Resultados_Pesquisas_PM.setAttribute('style', 'display: block');
  Resultados_Pesquisas_PM.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  xmlResultadosPesquisasPM.onreadystatechange = function(){
    if( xmlResultadosPesquisasPM.readyState == 4 && xmlResultadosPesquisasPM.status == 200 ){
      Resultados_Pesquisas_PM.innerHTML = xmlResultadosPesquisasPM.responseText;
    }
  };

  xmlResultadosPesquisasPM.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Pesquisas-Orgaos-Publicos/components/containers/Checkbox-PM.php?PM=' + orgaos_publicos_pm,
    true
  );
  xmlResultadosPesquisasPM.send(null);  
}

function MostrarBoletimAutenticoPC(){
  var orgaos_publicos_pc = document.getElementById('orgaos_publicos_pc').value,
      boletim_pc = document.getElementById('boletim_pc');

  xmlboletim_pc = new XMLHttpRequest();

  boletim_pc.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  xmlboletim_pc.onreadystatechange = function(){
    if( xmlboletim_pc.readyState == 4 && xmlboletim_pc.status == 200 ){
      boletim_pc.innerHTML = xmlboletim_pc.responseText;
    }
  };

  xmlboletim_pc.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Pesquisas-Orgaos-Publicos/components/containers/Boletim-Autentico-PC.php?APC=' + orgaos_publicos_pc,
    true
  );
  xmlboletim_pc.send(null);
};


function MostrarBoletimAutenticoPM(){
  var orgaos_publicos_pm = document.getElementById('orgaos_publicos_pm').value,
      boletim_pm = document.getElementById('boletim_pm');

  xmlboletim_pm = new XMLHttpRequest();

  boletim_pm.innerHTML = '<img src="img/ajax-loader.gif" class="img-fluid">';

  xmlboletim_pm.onreadystatechange = function(){
    if( xmlboletim_pm.readyState == 4 && xmlboletim_pm.status == 200 ){
      boletim_pm.innerHTML = xmlboletim_pm.responseText;
    }
  };

  xmlboletim_pm.open(
    'GET',
    'Pages/Relatorios/Preencher/container/components/Pesquisas-Orgaos-Publicos/components/containers/Boletim-Autentico-PM.php?APM=' + orgaos_publicos_pm,
    true
  );
  xmlboletim_pm.send(null);
};