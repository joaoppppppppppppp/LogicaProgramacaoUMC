let produtos = document.querySelectorAll(".produto")
console.log(produtos);

for(let i = 0; i < produtos.length; i++){
    
    
    let valorUnitProduto = produtos[i].querySelector(".info-valor-unidade").textContent
    let quantidadeProduto = produtos[i].querySelector(".info-quantidade").textContent
    let valorTotalProduto = produtos[i].querySelector(".info-valor-total")
    
    console.log(valorUnitProduto);
    console.log(quantidadeProduto);
    console.log(valorTotalProduto);
    
    //Excluir o R$
    let valorUnitProdutoLimpo = valorUnitProduto.replace(/R\$\ /, "")
    console.log(valorUnitProdutoLimpo)
    console.log(parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto))
    
    valorTotalProduto.innerHTML = "R$ " + (parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto)).toFixed(2)
}












/*function calcularFaturamento() {
    const produtos = document.querySelectorAll('.produto');
 
    produtos.forEach(produto => {
        const qtd = parseInt(produto.querySelector('.info-quantidade').textContent);
        const valorTexto = produto.querySelector('.info-valor-unidade').textContent;
        const valorUnitario = parseFloat(valorTexto.replace('R$', '').replace(',', '.'));
 
        const total = qtd * valorUnitario;
 
        const tdTotal = produto.querySelector('.info-valor-total');
        tdTotal.textContent = `R$ ${total.toFixed(2)}`;
    });
}
 
// Executa ao carregar a página
document.addEventListener('DOMContentLoaded', calcularFaturamento);*/