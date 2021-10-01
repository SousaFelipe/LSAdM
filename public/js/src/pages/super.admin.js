


$(function () {

    new Request(`http://127.0.0.1:8000/api/provedores/ativos`)
        .get(response => {
            new Table('provedores')
                .head(['Nº', 'CNPJ', 'RAZÃO', 'FANTASIA', 'ENDEREÇO', 'CONTATOS'])
                .body(response.provedores)
        })
})