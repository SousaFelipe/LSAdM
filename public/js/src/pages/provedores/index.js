


$(function () {

    const table = new Table('provedores', {
        headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'action'],
        columns: [ 4, 8, 8, 2 ]
    })

    new Request(window.APP.url('super/admin').web('provedores/listar'))
        .get(async response => {
            const provedores = await response.provedores

            provedores.forEach(provedor => {
                table.addRow(
                    provedor.id, [
                        window.APP.mask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`,
                    ]
                ).action(
                    `<span class="icon-sm icn-open-in-new text-primary"></span>`,
                    (row) => location.replace(window.APP.url('super/admin').web(`provedores/detalhes/${ row }`))
                )
            })

            table.render()
            icons.render()
        })

})
