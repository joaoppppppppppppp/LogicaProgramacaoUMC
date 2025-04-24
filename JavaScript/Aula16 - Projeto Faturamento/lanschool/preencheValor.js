function alterar() {
    const produtoSelecionado = document.getElementById('produto').value;
    const valores = {
        'Cenoura': 40.00,
        'Chocolate': 30.00,
        'Maracujá': 30.00,
        'Aipim': 25.00,
        'Coco': 25.00
    };
 
    const valor = valores[produtoSelecionado];
    document.getElementById('valor').value = valor ? `R$ ${valor.toFixed(2)}` : '';
}