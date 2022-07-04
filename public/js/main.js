function adicionarAmigo(id){ 
    
    $("#botaoAdicionar").removeClass("btn-dark");
    $("#botaoAdicionar").addClass("btn-primary");
    $("#botaoAdicionar").html("Seguindo");

    $.ajax({
        type: 'POST',
        url: '/adicionarAmigo',
        dataType: 'json',
        data: {
            id : id
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        sucess: function(response){
           
        }
        
    });
}

