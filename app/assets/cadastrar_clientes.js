$('#btn-cadastrar-clientes').click(function(e){

    e.preventDefault();

    var nome   = $('#nome').val();
    var sobrenome  = $('#sobrenome').val();
    var email  = $('#email').val();
    var idade  = $('#idade').val();

    if(!nome && !login && !email && !idade && !senha1 && !senha2){
        alert("Os campos devem ser preenchidos");
        return false;
    }
    if(!nome){
        alert("O campo nome deve ser informado");
        return false;
    }

    if(!sobrenome){
        alert("O campo sobrenome deve ser informado");
        return false;
    }

    if(!email){
        alert("O campo email deve ser informado");
        return false
    }
    if(!idade){
        alert("O campo idade deve ser informado");
        return false;
    }

   
    $.ajax({
        url: 'http://localhost/Crud-project/app/controllers/cadastrar_clientes.php',
        method: 'POST', 
        data: {nome: nome, sobrenome: sobrenome, email: email, idade: idade},
        dataType: 'json'
    }).done(function(result){
        console.log(result);

        if(result['result'] == true){
            console.log()
            alert(result['message']);
            location.href = 'http://localhost/Crud-project/app/clientes.php';
        }
        alert(result);
    });
});
