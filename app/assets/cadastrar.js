$('#btn-cadastrar').click(function(e){

    e.preventDefault();

    var nome   = $('#nome').val();
    var login  = $('#login').val();
    var email  = $('#email').val();
    var idade  = $('#idade').val();
    var senha1 = $('#senha1').val();
    var senha2 = $('#senha2').val();

    if(!nome && !login && !email && !idade && !senha1 && !senha2){
        alert("Os campos devem ser preenchidos");
        return false;
    }
    if(!nome){
        alert("O campo nome deve ser informado");
        return false;
    }
    if(!login){
        alert("O campo login deve ser informado");
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
    if(!senha1){
        alert("O campo senha deve ser informado!");
        return false;
    }
    if(!senha2){
        alert("O campo, confirmação de senha, deve ser informado!");
        return false;
    }
    if(senha1 != senha2){
        alert("As senhas estão diferentes");
        return false;
    }

   
    $.ajax({
        url: 'http://localhost/Crud-project/app/controllers/cadastro.php',
        method: 'POST', 
        data: {nome: nome, login: login, senha: senha1},
        dataType: 'json'
    }).done(function(result){

        if(result == 'Cadastrado com sucesso!'){
            alert(result);
            location.href = 'http://localhost/Crud-project/app/index.php';
        }
        alert(result);
    });
});
