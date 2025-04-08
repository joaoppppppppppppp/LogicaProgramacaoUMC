// Array
let timesPaulistas = ["Santos", "São Paulo", "Palmeiras", "Ponte Preta"]

// Acessar um item do Array
console.log(timesPaulistas[0]);

// Verificar o tamanho da lista
console.log(timesPaulistas.length)

// Adicionar um item no final do Array
timesPaulistas.push("Corinthians")

// Adicionar um item no inicio do Array
timesPaulistas.unshift("Guarani")

// Removendo um indice no inicio do Array
timesPaulistas.shift()

// Removendo um indice no final do Array
timesPaulistas.pop()

// Verificar posição de um item
console.log(timesPaulistas.indexOf("Santos"))

// Metodo Splice()
// -Adicionar
// -Remover
// -Modificar

// Remover um item a partir de uma posição
timesPaulistas.splice(1,1)

// Remover um item a partir de um valor
timesPaulistas.splice(timesPaulistas.indexOf("Santos"),1)

// Adicionando itens dentro de um Array
timesPaulistas.splice(0,0, "Santos", "São Paulo", "Palmeiras", "Corinthians")

// Modificando itens de um Array
timesPaulistas.splice(2,1,"Guarani")

// Percorrer um Array
let i = 0;

timesPaulistas.forEach((time) => {
    i++
    console.log(i, "-", time);
})

