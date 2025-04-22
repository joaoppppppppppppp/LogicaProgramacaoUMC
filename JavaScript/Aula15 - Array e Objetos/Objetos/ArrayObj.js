let produtos    = [
    {nome: "Teclado", categoria: "Periférico", preco: 200},
    {nome: "Mouse", categoria: "Periférico", preco: 150},
    {nome: "Computador", categoria: "Eletronico", preco: 3000},
    {nome: "Monitor", categoria: "Eletronico", preco: 750}
]

//Lista de Produtos
produtos.forEach((produto) => {
    console.log(produto);   
})

// Produto - valor
produtos.forEach((produto) => {
    console.log(`${produto.nome} - R$${produto.preco}`);   
})

//Fazer calculo de itens dentro de um array
const total = produtos.reduce((soma, produto) => soma + produto.preco, 0)
console.log(`Valor Total de todos os produtos é R$${total}`);

//Ofertando desconto MAP
const produtosComDesconto = produtos.map( produto => ({
    nome: produto.nome,
    preco: produto.preco * 0.9
}))

console.log(produtosComDesconto)

//Filtrando itens
const produtosEletronicos = produtos.filter(produtos => produtos.categoria === "Periférico")
console.log(produtosEletronicos)

//Periférico 5%
//Eletronico - 10%

//1- Crirar um filtro por categoria - filter
//2- Aplicar o desconto por tipo de categoria - map
//3- Soma todo os produtos por categoria

//1-
console.log("Produtos Eletronicos");
const produtosEletronico = produtos.filter(produto => produto.categoria === "Eletronico")

//2-
const produtosEletronicosDesconto = produtosEletronico.map(produto => ({
    nome: produto.nome,
    categoria: produto.categoria,
    preco: produto.preco * 0.9
}))
//3-
const somaProdutosEletronicosDesconto = produtosEletronicosDesconto.reduce((soma, produto) => soma + produto.preco, 0)
produtos.forEach((produto) => {
    console.log(`${produto.nome} - R$: ${produto.preco} `); 
})
console.log(`Valor Total de todos os produtos é R$${somaProdutosEletronicosDesconto}`);



//1-
console.log("Produtos Eletronicos");
const produtosPerifiericos = produtos.filter(produto => produto.categoria === "Eletronico")

//2-
const produtosPerifericosDesconto = produtosEletronico.map(produto => ({
    nome: produto.nome,
    categoria: produto.categoria,
    preco: produto.preco * 0.9
}))
//3-
const somaProdutosPerifericosDesconto = produtosPerifericosDesconto.reduce((soma, produto) => soma + produto.preco, 0)
produtos.forEach((produto) => {
    console.log(`${produto.nome} - R$: ${produto.preco}`);   
})
console.log(`Valor Total de todos os produtos é R$${somaProdutosPerifericosDesconto}`);