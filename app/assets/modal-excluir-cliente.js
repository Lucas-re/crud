
$('#nao-excluir-cliente').click(function(e){

    e.preventDefault();
    const modal = document.getElementById("excluir-cliente");

    modal.close();
});


$('#sim-excluir-cliente').click(function(e){

    var idCliente = $("#excluir-cliente").data("idCliente"); // Recupera o ID do modal

    $.ajax({
        url: 'http://localhost/Crud-project/app/controllers/excluir-cliente.php',
        method: 'POST', 
        data: {id: idCliente},
        dataType: 'json'
    }).done(function(oResult){

        if(oResult.result == false && oResult.status == 0){
            alert(oResult.message);
            location.href = 'http://localhost/Crud-project/app/clientes.php';

        }

        alert(oResult.message);
        location.href = 'http://localhost/Crud-project/app/clientes.php';
            
    });
    

    e.preventDefault();
});
