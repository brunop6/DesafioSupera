function deleteBook(event){
    event.preventDefault();

    let token = document.getElementsByName("_token")[0].value;

    if(confirm("Deseja mesmo deletar "+event.target.parentNode.id+"?")){
        let ajax = new XMLHttpRequest();

        ajax.open('DELETE', event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.onreadystatechange=function(){
            if(ajax.readyState === 4 && ajax.status === 200){
                window.location.href="books"
            }
        };
        ajax.send();
    }
}

function validaSenha(){
    let senha = document.getElementById("senha");
    let confirmSenha = document.getElementById("confirm_senha");
    
    if(senha.value != confirmSenha.value){
        confirmSenha.setCustomValidity("As senhas não coincidem!")
    }else{
        confirmSenha.setCustomValidity("");
    }
}

if(document.querySelector(".js-del")){
    let btn = document.querySelectorAll(".js-del");

    for(let i=0; i<btn.length; i++){
        btn[i].addEventListener('click', deleteBook, false)
    }
}

if(document.getElementsByName("formCadUsuarios")){
    let senha = document.getElementById("senha");
    let confirmSenha = document.getElementById("confirm_senha");

    senha.onchange = validaSenha;
    confirmSenha.onkeyup = validaSenha;
}