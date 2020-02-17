$(documet).ready( function(){
    $('#cep').blur(function(){
        $.ajax({
            url : 'consultar_cep.php',
            type : 'POST',
            data : 'cep=' + $('#cep').val,
            dataType : 'json',
            success : function(data){
                if(data.success == 1){
                    $('#rua').val(data.rua);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.cidade);
                    $('#estado').val(data.estado);

                    $('#numero').focus()
                }
            }
        })
        return false
    })
});

