$('#btn-entrar').click(function(e){

    e.preventDefault();

    var login = $('#login').val();
    var senha = $('#senha').val();

    if(!login && !senha){
        alert("Informe os campos para fazer login");
        return false;
    }
    if(!login){
        alert("Informe o login");
        return false
    }
    if(!senha){
        alert("informe a senha!");
        return false;
    }
    
    $.ajax({
        url: 'http://localhost/Crud-project/app/controllers/login.php',
        method: 'POST', 
        data: {login: login,senha: senha,},
        dataType: 'json'
    }).done(function(result){

        if(result == 'logado'){
            location.href = 'http://localhost/Crud-project/app/clientes.php';
            // console.log(result);
        }
        alert(result);
    });
});


/**
 * levar para a pagina de cadastro
 * de um novo usuario
 */
$('#btn-cadastro').click(function(e){

    
    location.href = 'http://localhost/Crud-project/app/cadastrar.php';

    e.preventDefault();
});
