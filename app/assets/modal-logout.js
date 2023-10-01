$('#nao').click(function(e){

    e.preventDefault();
    const modal = document.querySelector("dialog");

    modal.close();
});


$('#sim').click(function(e){

    
    location.href = 'http://localhost/Crud-project/app/controllers/logout.php';

    e.preventDefault();
});
