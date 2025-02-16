

$("[name='btn-excluir-cliente']").click(function(e){

    var idCliente = $(this).val();

    $("#excluir-cliente").data("idCliente", idCliente); // Armazena o ID no modal

    const modal = document.getElementById("excluir-cliente");
    

    modal.showModal();

});
