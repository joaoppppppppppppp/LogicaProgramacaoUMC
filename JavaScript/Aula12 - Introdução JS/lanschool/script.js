//getElementsbyTagName - Selectiona todas as tags que eu deseja
let paragrafos = document.getElementsByTagName("p")
paragrafos[0].innerHTML = "Palmeiras 2 x 0, sem mundial"

//getElementbyId - Seleciona um elemento do tipo ID
var titulo = document.getElementById("titulo")
titulo.innerHTML = "Alterando Usando JS"

//getElementsbyClassName - Seleciona todos os elementos do tipo Class
const caixas = document.getElementsByClassName("caixa")
caixas[0].style.backgroundColor = "lightblue"
caixas[1].style.backgroundColor = "lightgreen"


//querySelector - Seleciona um elemento do tipo Class ou ID
const paragrafoQuery = document.querySelector("#paragrafoQuery")
paragrafoQuery.style.backgroundColor = "yellow"
paragrafoQuery.style.padding ="10px"

function alteraTexto() {
    let input = document.getElementsByTagName("input")[0].value;  
    titulo.textContent = input
}

function alteraParagrafo() {
    let input = document.getElementsByTagName("input")[0].value;  
    paragrafoQuery.textContent = input
}

//querySelectorAll - Seleciona todos os elementos do tipo Class ou ID
const caixaQuery = document.querySelectorAll(".caixaQuery")
caixaQuery[0].style.backgroundColor = "cyan"
caixaQuery[0].style.border = "solid, black, 2px"

