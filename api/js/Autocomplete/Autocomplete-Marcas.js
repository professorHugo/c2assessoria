$('#marca_veiculo').autocomplete({
    minLength: 1,
    autoFocus: true,
    delay: 300,
    
    appendTo: '#form',
    source: function(request, response){
        $.ajax({
            url: 'js/Autocomplete/Buscar-Modelos.php',
            type: 'get',
            dataType: 'html',
            data: {
                'termo': request.term
            }
        }).done(function(data){
            if(data.length > 0){
                
                data = data.split(',');
                response( $.each(data, function(key, item){
                    return({
                        label: item
                    });
                }));
            }
        });
    }
});