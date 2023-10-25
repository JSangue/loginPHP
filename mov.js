function bemvindo(){
    alert("Bem vindo a minha pagina de teste")
}
function adeus(){
    var nome=prompt("Muito obrigado pelo teste,Informe o seu nome");
    alert("Muito obrigado " +nome+ " por testar a minha pagina")
}
function verificar() {
    var nome = document.getElementById("nome").value;
    var senha = document.getElementById("senha").value;
    
    if (nome.trim() === "") {
        alert("Preencha o campo de nome");
        return false;
    }

    if (senha.trim() === "") {
        alert("Preencha o campo de senha");
        return false;
    }
    else{
        adeus();
    }
}
