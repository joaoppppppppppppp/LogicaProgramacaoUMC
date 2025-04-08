
function verificalogin(){

    var login = document.getElementById("login").value
    var senha = document.getElementById("senha").value
    var mensagem = document.getElementById("mensagem").value

    if (login === "admin" && senha === "1234"){
        mensagem.innerHTML = "Login sucesso";
    }

    else if (login === "admin"){
        mensagem.innerHTML ="Senha incorreta";
    }

    else if (senha === "1234"){
        mensagem.innerHTML = "Usuario incorreta";
    }
}