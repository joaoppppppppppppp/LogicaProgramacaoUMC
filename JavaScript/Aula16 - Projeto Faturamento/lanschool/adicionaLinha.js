function Adicionar(){
    let form = document.querySelector('#form-adiciona')

    let produtoNome = form.produto.value
    let valor = form.valor.value
    let quantidade = form.quantidade.value

    if  (!produto || !quantidade || !valor){
        window.alert("Por favor, preencha todos os campos antes de adicionar")
    }
    else {
        let produto = document.createElement("tr")
        let codigoTD = document.createElement("td")
        let nomeTD = document.createElement("td")
        let valorUnitTD = document.createElement("td")
        let quantidadeTD = document.createElement("td")
        let valortotalTD = document.createElement("td")

        codigoTD.textContent = document.querySelectorAll('tr').length
        nomeTD.textContent = "Bolo de " + produto
        valorUnitTD.textContent = valor
        quantidadeTD.textContent = quantidade
        valortotalTD.textContent = "R$" + (parseInt(quantidade) * parseFloat(valor)).toFixed(2)

        produto.appendChild(codigoTD)
        produto.appendChild(nomeTD)
        produto.appendChild(quantidade)
        produto.appendChild(valorUnitTD)
        produto.appendChild(valortotalTD)

        let tabela = document.querySelector('#tabela-produtos')
        tabela.appendChild(produto)
    }
}

































/*function Adicionar() {
    const produto = document.getElementById('produto').value;
    const quantidade = parseInt(document.getElementById('quantidade').value);
    const valorUnitario = parseFloat(document.getElementById('valor').value.replace('R$', '').replace(',', '.'));
 
    if (!produto || isNaN(quantidade) || isNaN(valorUnitario)) {
        alert('Preencha todos os campos corretamente.');
        return;
    }
 
    const tabela = document.getElementById('tabela-produtos').getElementsByTagName('tbody')[0];
    const linhas = tabela.querySelectorAll('tr');
 
    // Pega o maior código de venda existente e soma +1
    let ultimoCodigo = 0;
    linhas.forEach(linha => {
        const codigoTexto = linha.querySelector('.info-codigo').textContent;
        const codigo = parseInt(codigoTexto);
        if (!isNaN(codigo) && codigo > ultimoCodigo) {
            ultimoCodigo = codigo;
        }
    });
 
    const novoCodigo = ultimoCodigo + 1;
 
    const novaLinha = document.createElement('tr');
    novaLinha.classList.add('produto');
 
    novaLinha.innerHTML = `
        <td class="info-codigo">${novoCodigo}</td>
        <td class="info-produto">Bolo de ${produto}</td>
        <td class="info-quantidade">${quantidade}</td>
        <td class="info-valor-unidade">R$ ${valorUnitario.toFixed(2)}</td>
        <td class="info-valor-total">0</td>
    `;
 
    tabela.appendChild(novaLinha);
 
    document.getElementById('form-adiciona').reset();
    document.getElementById('valor').value = '';
 
    calcularFaturamento(); // Recalcula os totais após adicionar*/
}